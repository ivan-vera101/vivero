@extends('layouts.navbar')
@section('content')


<form action="/plantas/update" method="POST" accept-charset="utf-8"  >
	{{csrf_field()}}
	<input type="hidden" name="idplantas" value='<?php if(isset($plant)){
			echo $plant->idplantas;
		}   ?>'>
	<div class="row">
		<div class="form-group col-md-6 col-xs-6">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombre" placeholder="Ingrese el nombre de la planta" value= '<?php if(isset($plant)){
			echo $plant->nombre	;
		}   ?>' required>
		</div>
		<div class="form-group col-md-6 col-xs-6">
			<label for="fruto" class="form-label">Fruto</label>
			<input type="text" class="form-control" name="fruto" id="fruto" aria-describedby="fruto" placeholder="Ingrese el nombre del fruto" value= '<?php if(isset($plant)){
			echo $plant->fruto	;
		}   ?>'  required>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-6 col-xs-6">
			<label for="inicioriego" class="form-label">Inicio De Riego</label>
			<input type="text" class="form-control" name="inicioriego" id="inicioriego" aria-describedby="inicioriego" placeholder="Ingrese la hora del inicio de riego" value= '<?php if(isset($plant)){
			echo $plant->inicioriego;
		}   ?>'  required>
		</div>
		<div class="form-group col-md-6 col-xs-6">
			<label for="finalriego" class="form-label">Fin De Riego</label>
			<input type="text" class="form-control" name="finalriego" id="finalriego" aria-describedby="finalriego" placeholder="Ingrese la hora del final de riego" value= '<?php if(isset($plant)){
			echo $plant->finalriego;
		}   ?>'  required>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-12">
			<label for="descripcion">Descripción</label>
			<textarea class="form-control" name="descripcion" id="descripcion" rows="9" required><?php if(isset($plant)){
			echo $plant->descripcion;
		}   ?> </textarea>
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

<hr>
<center>
	<table style="width:80%" class="table-striped border="3">
		<tr class="text-center">
			<th>Nombre</th>
			<th>Fruto</th>
			<th>Descripción</th>
			<th>Inicio De Riego</th>
			<th>Fin De Riego </th>
			<th></th>
		</tr>
		@forelse ($plantas as $planta)
		<tr class="text-center">
			<td>
				{{ $planta->nombre }}
			</td>
			<td>
				{{ $planta->fruto }}
			</td>
			<td>
				{{ $planta->descripcion }}
			</td>
			<td>
				{{ $planta->inicioriego }}
			</td>
			<td>
				{{ $planta->finalriego }}
			</td>
			<td>
				<a href="{{ '?idplantas='.$planta->idplantas }}" class="btn btn-info fa fa-pencil" aria-hidden="true"></a>
			</td>
		</tr>
		@empty
		<tr>
			<td colspan="5">
				No hay mensajes
			</td>
		</tr>
		@endforelse
	</table>
</center>
@endsection