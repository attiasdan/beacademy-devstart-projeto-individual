@extends('template.users')
@section('title', 'Editar usuário')
@section('body')
    <h1>Usuário {{ $user->name }}</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
        </div>
        {{--  --}}
        <div class="mb-3">
            <label for="area" class="form-label">Área de Atuação</label>
            <input type="text" name="area" id="area" class="form-control" value="{{ $user->area }}">
        </div>
        <div class="mb-3">
            <label for="pretensao_salarial" class="form-label">Pretensão Salarial</label>
            <input type="text" name="pretensao_salarial" id="pretensao_salarial" class="form-control" value="{{ $user->pretensao_salarial }}">
        </div>
        <div class="mb-3">
            <label for="nivel" class="form-label">Nível</label>
            <input type="text" name="nivel" id="nivel" class="form-control" value="{{ $user->nivel }}">
        </div>
        {{--  --}}
        <button type="submit" class="btn btn-primary">Atualizar</button>

    </form>
@endsection