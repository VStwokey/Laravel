@extends('layouts.base')

@section('content')
    @if($usuario)
        <form action="{{ route('usuario.update',['id'=>$usuario->id])}}" method="post">
    @else'
        <form action="{{ route('usuario.store')}}" method="post">
    @endif

        @csrf {{-- @csrf evita um ataque gerando um token diferente --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <label class="form-label" for="name">Nome*</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ $usuario!=null?$usuario->name:old('name') }}">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="email">E-mail*</label>
                <input class="form-control" type="email" name="email" id="email" value="{{ $usuario!=null?$usuario->email:old('email') }}">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="password">Senha*</label>
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="password">Confirmar senha*</label>
                <input class="form-control" type="password" name="" id="">
            </div>
            <div class="col-md-2 mt-2">
            @if($usuario)
                <input type="submit" class="btn btn-warning" value="Atualizar">
            @else
                <input type="submit" class="btn btn-sucess" value="Cadastrar">
            @endif
            </div>
        </div>





    </form>
@endsection()
