@extends('layouts.base')

@section('content')

<h1>Usuários</h1>
<h2>
    <a class="btn btn-danger" href="{{route('usuario.create')}}">Novo Usuário</a>
</h2>

    @if (Session::has('danger'))
        <div class="alert alert-danger">
            {!! Session::get('danger') !!}
        </div>
    @endif
<p>
    {{ $usuarios->links() }}

   {{-- onEachSide(2)->links() --}}
</p>
<table class="table table-border table-striped">
    <thead>
        <tr>
            <th> Ações </th>
            <th> Nome </th>
            <th> E-mail </th>
            <th> Criado em </th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $usuarios as $usuario)
        <tr>
            <td>
                <a class="btn btn-success" href="{{ route('usuario.show', ['id'=>$usuario->id])}}">Ver</a>
                <a class="btn btn-primary" href="{{ route('usuario.edit', ['id'=>$usuario->id])}}">Editar</a>
                <a class="btn btn-danger" href="{{ route('usuario.destroy',['id'=>$usuario->id])}}">Excluir</a>
            </td>



            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->created_at->format('d/m/Y') }}</td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection
