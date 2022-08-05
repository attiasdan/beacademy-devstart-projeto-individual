@extends('template.users')
@section('title', 'Novo Talento')
@section('body')
    <h1>Novo Talento</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control" aria-describedby="NNome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="area" class="form-label">Área de Atuação</label>
            <input type="text" name="area" id="area" class="form-control">
        </div>
        <div class="mb-3">
            <label for="pretensao_salarial" class="form-label">Pretensão Salarial</label>
            <input type="text" name="pretensao_salarial" id="pretensao_salarial" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nivel" class="form-label">Nível</label>
            <input type="text" name="nivel" id="nivel" class="form-control">
        </div>
        {{-- <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div> --}}
        <button type="submit" class="btn btn-primary">CADASTRAR</button>

    </form>
@endsection
