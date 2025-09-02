@extends('layouts.app')

@section('title', 'Cadastro de Cliente')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Cadastro de Cliente</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <form method="POST" action="{{ route('cliente.novo') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <label for="nomeCompleto" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" required />
            </div>
            <div class="col-sm-6">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-6">
                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required />
            </div>
            <div class="col-sm-6">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required />
            </div>
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                <input type="email" class="form-control" id="email" name="email" required />
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="termosCheck" name="termos" />
            <label class="form-check-label" for="termosCheck">Aceito os termos e condições</label>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
