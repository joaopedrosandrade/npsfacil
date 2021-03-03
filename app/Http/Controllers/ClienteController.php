<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('adm.clientes.index',compact('clientes'));
    }

    public function create()
    {
        return view('adm.clientes.create');
    }

    public function store(Request $request)
    {
        $dados = new Cliente;
        $dados->nome = $request->nome;     
        $dados->responsavel = $request->responsavel;
        $dados->cnpj = $request->cnpj;
        $dataform = implode('-', array_reverse(explode('/', $request->data)));     
        $dados->data = $dataform; 
     
        //dd($dados);
        
	
        $dados->save();

        return redirect(route('cliente.cadastro'))->with('success','Cliente: '. $dados->nome . ', cadastrado com sucesso!');

    }

}
