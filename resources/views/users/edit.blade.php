@extends('layouts.admin')

@section('content')
    <button><a href="{{ route('user.index') }}">Listar</a><br></button>
    <button><a href="{{ route('user.show', ['user' => $user->id]) }}">Visualizar</a><br></button>

    <h2>Editar User</h2>

    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.update', ['user'=>$user->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name', $user->name) }}"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Seu e-mail" value="{{ old('email', $user->email) }}"><br><br>

        <label>Senha: </label>
        <input type="password" name="password" placeholder="Senha com mínimo 6 caracteres"
            value="{{ old('password') }}"><br><br>

        <button type="submit">Salvar</button>

    </form>

@endsection