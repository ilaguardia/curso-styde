@extends('layout')

@section('title', "Editar usuario {$user->id}")

@section('content')
<h1 class="mt-5">{{ $title }} #{{ $user->id }}</h1>
<p class="lead">		
    @if (!empty($user->id))
    {{ $user->name }} - {{ $user->email }} - {{ $user->profession_id }} {{ old('name') }}

<form method="POST" action="{{ url('usuarios') }}" class="needs-validation">
    <!-- /* Hay que añadir este token para que funcionen los formularios */ }} -->
    {!! csrf_field() !!} 
    <!-- /* Hay que añadir este token para que funcionen los formularios */ }} -->
    @foreach ($fields as $field)
    <div class="row">
        <label for="name">{{ ucwords($field) }}</label>
        <input  maxlength="50" type="text" class="form-control @error($field) is-invalid @enderror" id="{{ $field }}" placeholder="" required name="{{ $field }}" value="{{ old($field, $user->$field) }}">
    </div>
    @endforeach

    <p class="py-5 mb-8">
        <button class="w-100 btn btn-primary btn-lg" type="submit">Actualizar usuario</button>
    </p>
</form>
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
