@extends('layouts.base')

@section('content')
    <h1>{{ $usuario->name}}</h1>
    <h2>
        <a class="btn btn-dark" 
        href="{{ route('usuario.index') }}">
            <- voltar
        </a>
    </h2>
    <p>
        E-mail:
        <a href="mailto:{{ $usuario->email}}">
            {{ $usuario->email}}
        </a>
    </p>
@endsection
