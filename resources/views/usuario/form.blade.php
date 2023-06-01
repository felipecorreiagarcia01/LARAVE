@extends('layouts.base')

@section('content')
    <form action="{{ route('usuario.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <label class="form-label" for="name">Nome*</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">Senha*</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            <div class="col-md-6">
                <label for="" class="form-label">Confirmar Senha</label>
                <input type="password" name="" id="" class="form-control">
            </div>

            <div class="col-md-2 mt-2">
                <input class="btn btn-success" type="submit" value="Cadastrar">
            </div>
        </div>

    </form>
@endsection
