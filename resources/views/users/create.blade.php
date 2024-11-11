@extends('layouts.admin')

@section('content')
    <button><a href="{{ route('user.index') }}">Listar</a><br></button>
    <h2>Cadastrar Usuário</h2>
    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        @method('POST')

        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome Completo" value="{{old('name')}}"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Seu e-mail" value="{{old('email')}}"><br><br>

        <label>Senha: </label>
        <input type="password" name="password" placeholder="Senha com mínimo 6 caracteres" value="{{old('password')}}"><br><br>

        <button type="submit">Cadastrar</button>

    </form>

@endsection
