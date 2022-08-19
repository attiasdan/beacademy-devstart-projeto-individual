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
        <button type="submit" class="btn btn-primary">Atualizar</button>

    </form>
@endsection