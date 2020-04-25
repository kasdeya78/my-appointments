@extends('layouts.panel')

@section('content')

<div class="card shadow">
	<div class="card-header border-0">
	  <div class="row align-items-center">
	    <div class="col">
	      <h3 class="mb-0">Nueva especialidad</h3>
	    </div>
	    <div class="col text-right">
	      <a href="{{ url('specialties') }}" class="btn btn-sm btn-default">
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
		
		<form action="{{ url('specialties') }}" method="POST">
		@csrf
			<div class="form-group">
	            <label class="form-control-label" for="name">Nombre de la especilidad</label>
	            <input id="name" name="name" class="form-control" type="text" value="{{ old('name') }}">
	        </div>
	        <div class="form-group">
	            <label class="form-control-label" for="name">Descripción</label>
	            <input id="description" name="description" class="form-control" type="text" value="{{ old('description') }}">
	        </div>
	        <button type="submit" class="btn btn-primary">
	        	Guardar
	        </button>
		</form>
  	</div>

</div>

@endsection
