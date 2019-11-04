<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function adicionar($id)
    {
        $cliente = \App\Cliente::find($id);
        return view('telefone.adicionar', compact('cliente'));
    }

    public function salvar(Request $request, $id)
    {
        $telefone = new \App\Telefone;
        $telefone->titulo = $request->input('titulo');
        $telefone->telefone = $request->input('telefone');

        \App\Cliente::find($id)->addTelefone($telefone);

        \Session::flash('flash_message', [
            'msg'=>"Telefone adicionado com sucesso!",
            'class'=>"alert-success"
        ]);
            return redirect()->route('cliente.detalhe', $id);
        
    }
}
