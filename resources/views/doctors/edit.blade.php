@extends('layouts.panel')

@section('content')

<div class="card shadow">
	<div class="card-header border-0">
	  <div class="row align-items-center">
	    <div class="col">
	      <h3 class="mb-0">Editar Médico</h3>
	    </div>
	    <div class="col text-right">
	      <a href="{{ url('doctors') }}" class="btn btn-sm btn-default">
			Cancelar y volver
	      </a>
	    </div>
	  </div>
	</div>
	
	<div class="card-body">
		@if ($errors->any())
			<div class="alert alert-danger" role="alert">	
				@foreach ($errors -> all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</div>
		@endif
		
		<form action="{{ url('doctors/'.$doctor->id) }}" method="POST">
		@csrf
		@method('PUT')
			<div class="form-group">
	            <label class="form-control-label" for="name">Nombre del médico</label>
	            <input id="name" name="name" class="form-control" type="text" value="{{ old('name', $doctor->name) }}">
	        </div>

			<div class="form-group">
	            <label class="form-control-label" for="name">E-mail</label>
	            <input id="email" name="email" class="form-control" type="text" value="{{ old('email', $doctor->email) }}">
	        </div>

	        <div class="form-group">
	            <label class="form-control-label" for="name">DNI</label>
	            <input id="dni" name="dni" class="form-control" type="text" value="{{ old('dni', $doctor->dni ) }}">
	        </div>

	        <div class="form-group">
	            <label class="form-control-label" for="name">Dirección</label>
	            <input id="address" name="address" class="form-control" type="text" value="{{ old('address', $doctor->address ) }}">
	        </div>

	        <div class="form-group">
	            <label class="form-control-label" for="name">Teléfono / Celular</label>
	            <input id="phone" name="phone" class="form-control" type="text" value="{{ old('phone', $doctor->phone ) }}">
	        </div>

	        <div class="form-group">
	            <label class="form-control-label" for="password">Password</label>
	            <input id="password" name="password" class="form-control" type="text">
	            <em>Ingrese un valor si en caso desea modificar su password</em>
	        </div>

	        <button type="submit" class="btn btn-primary">
	        	Guardar
	        </button>
		</form>
  	</div>

</div>

@endsection
