@extends('master')

@section('content')

    <h2>usuarios</h2>

    <ul>
        @foreach ($usuarios as $usuario)
            <li>{{ $usuario->nome }} - {{ $usuario->email }}</li>
        @endforeach
    </ul>

@endsection