@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">

        <div class="card-header hstack gap-2">

            <span> <strong>Cadastrar Usuário</strong></span>
            <span class="ms-auto d-sm-flex flex-row">

                <a href="{{ route('user.index') }}" class="btn btn-outline-info btn-sm me-1">Voltar</a>
            </span>
        </div>
        <div class="card-body">
            <x-alert />
            <form action="{{ route('user.store') }}" method="POST" class="row g-3">
                @csrf
                @method('POST')
                <div class="col-md-12">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo"
                        value ="{{ old('name') }}">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Seu e-mail"
                        value="{{ old('email') }}">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Senha:</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4"
                        placeholder="Senha com mínimo 6 caracteres" value="{{ old('password') }}">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-secondary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
