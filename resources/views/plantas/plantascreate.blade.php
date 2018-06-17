@extends('layouts.navbar')

@section('content')    	
        <form action="/plantas/save" method="POST" accept-charset="utf-8"  >
     		 {{csrf_field()}}
     		 <div class="row">
    		<div class="form-group col-md-6 col-xs-6">
    			<label for="nombre" class="form-label">Nombre</label>
				<input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombre" placeholder="Ingrese el nombre de la planta" required">
     		</div>
     		<div class="form-group col-md-6 col-xs-6">
    			<label for="fruto" class="form-label">Fruto</label>
				<input type="text" class="form-control" name="fruto" id="fruto" aria-describedby="fruto" placeholder="Ingrese el nombre del fruto" required">
     		</div>
		 </div>
		 <div class="row">
    		<div class="form-group col-md-6 col-xs-6">
    			<label for="inicioriego" class="form-label">Inicio De Riego</label>
				<input type="text" class="form-control" name="inicioriego" id="inicioriego" aria-describedby="inicioriego" placeholder="Ingrese la hora del inicio de riego" required">
     		</div>
     		<div class="form-group col-md-6 col-xs-6">
    			<label for="finalriego" class="form-label">Fin De Riego</label>
				<input type="text" class="form-control" name="finalriego" id="finalriego" aria-describedby="finalriego" placeholder="Ingrese la hora del final de riego" required">
     		</div>
		 </div>
		 <div class="row">
		 	<div class="form-group col-md-12">
					<label for="descripcion">Descripción</label>
					<textarea class="form-control" name="descripcion" id="descripcion" rows="9"  required></textarea>
				</div>
		 </div>
		 <div class="form-group text-center">
				<div class="col-md-12 col-md-offset-8 col-xs-offset-8">
					<button type="submit" class="btn btn-primary">
						Guardar
					</button>
				</div>
			</div>
     	</form>

@endsection