@extends('layouts.base')

@section('content')

<h1>Usuários</h1>

<p>
    {{ $usuarios->links() }}
</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th> Ações </th>
            <th> Nome </th>
            <th> E-mail </th>
            <th> Criado em </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td></td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
