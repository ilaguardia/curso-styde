@extends('layout')

@section('title', "Usuario {$user->id} - ")

@section('content')
<h1 class="mt-5">{{ $title }} #{{ $user->id }}</h1>
<p class="lead">		
    @if (!empty($user->id))
    {{ $user->name }} - {{ $user->email }} - {{ $user->profession_id }}

    @foreach ($fields as $field)
<div class="row">
    <label for="name">{{ ucwords($field) }}</label>
    <input  maxlength="50" type="text" class="form-control @error($field) is-invalid @enderror" id="{{ $field }}" placeholder="" required name="{{ $field }}" value="{{ $user->$field }}">
</div>
@endforeach


@else
Este usuario no está registrado.
@endif
</p>



<a href ="{{ url('/usuarios/') }}">Ver listado de usuarios</a>
<a href ="{{ url()->previous() /* para volver a la página anterior vengas de donde vengas */ }}">Ver listado de usuarios</a>
<a href ="{{ route('users') }}">Ver listado de usuarios</a>

<br />

<a href ="{{ url('/usuarios/nuevo') }}">Crear usuario</a>

<?php /*
  <a href ="{{
  action([UserController::class, 'index']) /* llamando directamente al helper del controlador * /
  }}">Ver listado de usuarios</a>
 */
?>
@endsection
