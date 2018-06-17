<?php

namespace App\Http\Controllers;
use App\Plantas;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PlantasController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
    	$data = $request->all();
 		//var_dump($data);exit();

    	$plantas=Plantas::create($data);
    	return redirect('dashboard/plantas/create');
    }
    public function update(Request $request)
    {
    	$data = $request->all();
    	$plant=Plantas::where('idplantas',$data['idplantas'])->update(['nombre' => 1]);
    	$copydata=$data;
        unset($copydata['idplantas']);
        unset($copydata['_token']);
        //var_dump($copydata);
        $datos = Plantas::where('idplantas',$data['idplantas'])->update($copydata);
    	//$plantas=Plantas::wh($data);
    	return redirect('dashboard/plantas/show?idplantas='.$data['idplantas']);
    }
    public function show(Request $request){
// buscar un messages por ID
    	//var_dump($request->all());exit();
    	$plantas=Plantas::all();
    	if (count($request->all())>0) {
    	$id=$request->all()['idplantas'];
    	$plant=Plantas::where('idplantas',$id)->first();
    	return view('plantas.show',['plantas'=>$plantas,'plant'=>$plant,]);
    	}else{
    	return view('plantas.show',['plantas'=>$plantas,]);
    	}
    	// una view de un plantas
    	//dd($plantas);
    }
}