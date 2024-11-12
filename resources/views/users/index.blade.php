@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow text-center">

        <div class="card-header hstack gap-2 text-center">

            <span class="mx-auto"><strong>Lista de Usuários</strong></span>
            <span class="ms-auto"><a href="{{ route('user.create') }}" class="btn btn btn-success btn-sm">
                    Cadastrar</a></span>
        </div>

        <div class="card-body">
           <x-alert/>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-center"> <a href="{{ route('user.show', ['user' => $user->id]) }}"
                                    class="btn btn-outline-info btn-sm">Visualizar</a>
                                <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                    class="btn btn-outline-warning  btn-sm">Editar</a>

                                <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}"
                                    style="display: inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
@endsection
