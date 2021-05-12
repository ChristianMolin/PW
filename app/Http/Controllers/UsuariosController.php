<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{

    function novo(){
        return view('usuario_novo');
    }

    function inserir(Request $req){
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $u = new Usuario();
        $u->nome = $nome;
        $u->endereço = $endereco;
        $u->cidade = $cidade;
        $u->estado = $estado;

        $u->save();
        return redirect()->route('usuario_lista');
    }

    function tela_principal(){
        $us = Usuario::all();
        return view('retornologin', [
            'resposta' => "Lista de Clientes",
            'tipo_resposta' => 'success',
            'usuarios' => $us
        ]);
    }

    function editar($id){
        $u = Usuario::findOrFail($id);
        return view('usuario_editar', [ 'u' => $u]);
    }

    function alterar(Request $req, $id){
        $u = Usuario::findOrFail($id);
        $nome = $req->input('nome');
        $endereco = $req->input('endereco');
        $cidade = $req->input('cidade');
        $estado = $req->input('estado');

        $u->nome = $nome;
        $u->endereço = $endereco;
        $u->cidade = $cidade;
        $u->estado = $estado;
        $u->save();

        session()->flash('mensagem', "O usuário {$u->nome} foi alterado com sucesso");

        return redirect()->route('usuario_lista');
    }

    function excluir($id){
        $u = Usuario::findOrFail($id);

        $u->delete();
        return redirect()->route('usuario_lista');
    }
}
