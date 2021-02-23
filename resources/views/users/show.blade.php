@extends('layout')

@section('title', "Usuario {$id} - ")

@section('content')
	<h1 class="mt-5">{{ $title }} #{{ $id }}</h1>
	<p class="lead">		
		@if (!empty($id))
			{{ $content }}
		@else
			No hay usuarios registrados
		@endif
	</p>
@endsection
