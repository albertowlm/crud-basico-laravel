<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function formCadastrar()
    {
        return view('create');
    }

    public function cadastrar(Request $request)
    {


        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();
        return redirect()->to('cliente/list');
    }
    public function formEditar($id)
    {
        $client = Client::find($id);
        if(!$client){
            abort(400);
        }
        return view('edit')->with('client',$client);
    }

    public function editar(Request $request,$id)
    {
        $client = Client::find($id);
        if(!$client){
            abort(400);
        }
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();

        return redirect()->to('cliente/list');
    }

    public function listar()
    {
        $clients = Client::all();
        return view('list')
            ->with('clients',$clients);
    }

    public function excluir($id)
    {
        $client = Client::find($id);
        if(!$client){
            abort(400);
        }

        $client->delete();

        return redirect()->to('cliente/list');
    }
}
