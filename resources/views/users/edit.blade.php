@extends('layout')

@section('title', "Editar usuario {$user->id}")

@section('content')
<h1 class="mt-5">{{ $title }} #{{ $user->id }}</h1>
<p class="lead">		
    @if (!empty($user->id))
    {{ $user->name }} - {{ $user->email }} - {{ $user->profession_id }} {{ old('name') }}

<form method="POST" action="{{ route('users.update', $user->id) }}" class="needs-validation">
    <!-- /* Se pone este campo para transformar el post en put */ }} -->
    {{ method_field('PUT') }}
    
    <!-- /* Hay que añadir este token para que funcionen los formularios */ }} -->
    {{ csrf_field() }} 
    <!-- /* Hay que añadir este token para que funcionen los formularios */ }} -->

    <input type="hidden" class="form-control" id="profRelation_id" placeholder="" required name="profRelation_id" value="1">
    <input type="hidden" class="form-control" id="profession_id" placeholder="" required name="profession_id" value="1">
    <div class="col-md-7 col-lg-8">
        <div class="col-12">
            <label for="firstName" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" required placeholder="Nombre" name="name" value="{{ old('name', $user->name) }}">
            @if ($errors->has('name')) <?php /* @if ($errors->first('name')) muestra solo el primero */ ?>
            <div class="text-danger">
                Este campo es obligatorio.
            </div>
            @endif
        </div>
        <div class="col-12">
            <label for="lastName" class="form-label">Apellidos</label>
            <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" placeholder="Apellidos"  name="surname" value="{{ old('surname', $user->surname) }}">
            @error('lastName')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-12">
            <label for="telephone" class="form-label">Teléfono</label>
            <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Teléfono"  name="telephone" value="{{ old('telephone', $user->telephone) }}">
            @error('telephone')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-12">
            <label for="email"  class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="you@example.com" name="email" value="{{ old('email', $user->email) }}">
            @if ($errors->has('email'))
            @error('email')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            @else
            <small id="emailHelp" class="form-text text-muted">Asegúrate que está bien escrito. :)</small>
            @endif

        </div>
        <div class="col-12">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="" name="password" >
            @if ($errors->has('password'))
            @error('password')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            @endif
        </div>


        <hr class="my-4">
        <button class="w-100 btn btn-primary btn-lg" type="submit">Actualizar usuario</button>
    </div>
</form>


<form method="POST" action="{{ route('users.update', $user->id) }}" class="needs-validation">
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
