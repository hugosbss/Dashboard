@extends('layouts.app')

@section('title', 'Cadastro de Cliente')

@section('content')
<div class="container mt-5">
  <h1>Lista de Clientes</h1>

  @if (session('clientes'))
    <table class="table table-bordered mt-4">
      <thead>
        <tr>
          <th>Nome</th>
          <th>CPF</th>
          <th>Data Nascimento</th>
          <th>Telefone</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach (session('clientes') as $cliente)
          <tr>
            <td>{{ $cliente['nomeCompleto'] }}</td>
            <td>{{ $cliente['cpf'] }}</td>
            <td>{{ $cliente['dataNascimento'] }}</td>
            <td>{{ $cliente['telefone'] }}</td>
            <td>{{ $cliente['email'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <div class="alert alert-info">Nenhum cliente cadastrado ainda.</div>
  @endif
</div>
@endsection
