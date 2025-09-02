<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $mensagem = "Ola ";

    public function index()
    {
        return view('cliente.index');
    }

    public function recebeDados(Request $req)
    {
        $validador = $req->validate(
            [
                'nomeCompleto' => 'required',
                'cpf' => 'required',
            ],
            [
                'nomeCompleto.required' => 'O campo nome completo é obrigatório',
                'cpf.required' => 'O campo CPF é obrigatório',
            ]
        );
        echo $req->input('nomeCompleto');

         // Recupera clientes já cadastrados
        $clientes = session('clientes', []);

        // Adiciona novo cliente
        $clientes[] = [
        'nomeCompleto' => $req->input('nomeCompleto'),
        'cpf' => $req->input('cpf'),
        'dataNascimento' => $req->input('dataNascimento'),
        'telefone' => $req->input('telefone'),
        'email' => $req->input('email'),
        ];

        // Atualiza sessão
        session(['clientes' => $clientes]);

        return redirect()->route("cliente.index")
            ->with('Success', 'Cliente cadastrado com sucesso!');
    }
}