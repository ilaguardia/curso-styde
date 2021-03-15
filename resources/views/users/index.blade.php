@extends('layout')

@section('title', "Listado de Usuarios - ")

@section('content')
    <h1 class="mt-5">Usuarios</h1>
    <p class="lead">
        <a href ="{{ url('/usuarios/nuevo') }}">Crear usuario</a>
    </p>
    <p class="lead">
        @if ($users->count() == 0 )
            No hay usuarios registrados
        @else
        <ul>
            @foreach ($users as $user)

            <?php /*
             * <li><a href="{{ action([UserController::class, 'show'], ['id' => $user->id]) }}">{{ $user->name }}</a>, ({{ $user->email }})</li>
              Este no he conseguido que funcione
             *                          */
            ?>

            <li><a href="{{ url('/usuarios/'.$user->id) }}">{{ $user->name }}</a>, ({{ $user->email }}) - 
                <a href="{{ route('users.show', ['user' => $user]) }}">{{ $user->name }}</a>, ({{ $user->email }})</li>

            @endforeach
        </ul>

        @endif
    </p>
@endsection


