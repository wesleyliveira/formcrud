@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">

        <div class="card-header hstack gap-2">

            <span class="text-center"> Usuário</span>
            <span class="ms-auto d-sm-flex flex-row">


                <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                    class="btn btn-outline-warning  btn-sm me-1">Editar</a>
                <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}" style="display: inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger btn-sm me-1"
                        onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>
                <a href="{{ route('user.index', ['user' => $user->id]) }}"
                    class="btn btn-outline-info btn-sm me-1">Voltar</a>
            </span>
        </div>
        <div class="card-body">
            <x-alert />
            <dl class="row">
                <dt class="col-sm-3">ID:</dt>
                <dd class="col-sm-9">{{ $user->id }}</dd>

                <dt class="col-sm-3">Name:</dt>
                <dd class="col-sm-9">{{ $user->name }}</dd>

                <dt class="col-sm-3">E-mail:</dt>
                <dd class="col-sm-9">{{ $user->email }}</dd>

                <dt class="col-sm-3">Cadastrado:</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y - H:i:s') }}</dd>

                <dt class="col-sm-3">Editado: </dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y - H:i:s') }}</dd>
        </div>
    </div>
@endsection
