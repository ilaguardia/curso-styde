@extends('layout')

@section('title', "Listado de Usuarios - ")

@section('content')
	<h1 class="mt-5">Usuarios</h1>
	<p class="lead">
		@if ($users->count() == 0 )
			No hay usuarios registrados
		@else
			<ul>
			@foreach ($users as $user)
				<li>{{ $user->name }}, ({{ $user->email }})</li>
			@endforeach
			</ul>
			
		@endif
	</p>
@endsection


