<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\Telefone;
use App\Models\Endereco;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contatos = Contato::with(['endereco', 'telefones'])->get();
        return view('index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('formulario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $contato = new Contato();

        $contato->
        dd($contato);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contato $contato)
    {
        //
    }
}
