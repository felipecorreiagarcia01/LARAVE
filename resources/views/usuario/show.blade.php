@extends('layouts.base')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success">
        {!! Session::get('success') !!}
    </div>
    @endif

    <h1>{{ $usuario->name}}</h1>
    <h2>
        <a class="btn btn-primary"
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
