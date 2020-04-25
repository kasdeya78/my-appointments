@extends('layouts.panel')

@section('content')

<div class="card shadow">
	<div class="card-header border-0">
	  <div class="row align-items-center">
	    <div class="col">
	      <h3 class="mb-0">Nuevo Paciente</h3>
	    </div>
	    <div class="col text-right">
	      <a href="{{ url('patients') }}" class="btn btn-sm btn-default">
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
		
		<form action="{{ url('patients') }}" method="POST">
		@csrf
			<div class="form-group">
	            <label class="form-control-label" for="name">Nombre del paciente</label>
	            <input id="name" name="name" class="form-control" type="text" value="{{ old('name') }}">
	        </div>

			<div class="form-group">
	            <label class="form-control-label" for="name">E-mail</label>
	            <input id="email" name="email" class="form-control" type="text" value="{{ old('email') }}">
	        </div>

	        <div class="form-group">
	            <label class="form-control-label" for="name">DNI</label>
	            <input id="dni" name="dni" class="form-control" type="text" value="{{ old('dni') }}">
	        </div>

	        <div class="form-group">
	            <label class="form-control-label" for="name">Dirección</label>
	            <input id="address" name="address" class="form-control" type="text" value="{{ old('address') }}">
	        </div>

	        <div class="form-group">
	            <label class="form-control-label" for="name">Teléfono / Celular</label>
	            <input id="phone" name="phone" class="form-control" type="text" value="{{ old('phone') }}">
	        </div>

	        <div class="form-group">
	            <label class="form-control-label" for="password">Password</label>
	            <input id="password" name="password" class="form-control" type="text" value="{{  Str::random(6) }}">
	        </div>

	        <button type="submit" class="btn btn-primary">
	        	Guardar
	        </button>
		</form>
  	</div>

</div>

@endsection
