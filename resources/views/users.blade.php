@extends('layout')

@section('title', "Listado de Usuarios - ")

@section('content')
	<h1 class="mt-5">Usuarios</h1>
	<p class="lead">		
		@if (!empty($users))
			<ul>
			@foreach ($users as $user)
				<li>{{ $user }}</li>
			@endforeach
			</ul>
		@else
			No hay usuarios registrados
		@endif
	</p>
@endsection


