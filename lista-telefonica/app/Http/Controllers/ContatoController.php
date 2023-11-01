<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\Telefone;
use App\Models\Endereco;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\HttpException;



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

        $endereco = new Endereco;
        $contato = new Contato;
        $telefone1 = new Telefone;
        $telefone2 = new Telefone;

        $endereco->logradouro = $dados['logradouro'];
        $endereco->numero_casa = $dados['numero_casa'];
        $endereco->bairro = $dados['bairro'];
        $endereco->complemento = $dados['complemento'];
        $endereco->cep = $dados['cep'];
        $endereco->cidade = $dados['cidade'];
        $endereco->estado = $dados['estado'];


        if ($endereco->save()) {
            $contato->nome = $dados['nome'];
            $contato->email = $dados['email'];
            $contato->id_endereco = $endereco->id;
            if ($contato->save()) {
                $telefone1->codigo_area = $dados['codigoArea1'];
                $telefone1->numero_tel = $dados['numeroTelefone1'];

                if (($dados['codigoArea2'] === null) and ($dados['numeroTelefone2'] === null)) {
                    $dados['codigoArea2'] = ' ';
                    $dados['numeroTelefone2'] = ' ';
                    $telefone2->codigo_area = $dados['codigoArea2'];
                    $telefone2->numero_tel = $dados['numeroTelefone2'];
                } else {
                    $telefone2->codigo_area = $dados['codigoArea2'];
                    $telefone2->numero_tel = $dados['numeroTelefone2'];
                }
                $telefone1->id_contato = $contato->id;
                $telefone2->id_contato = $contato->id;
                $telefone1->save();
                $telefone2->save();
            }
        }

        $response = new Response();
        $statusCode = $response;

        if (!$statusCode === 200) {
            throw new HttpException("Erro ao cadastrar um novo contato", 400);
        }
        return redirect()->route('home')->with("mensagem", "{$contato->nome} cadastrado com sucesso");
    }
    /**
     * Show the form for editing the specified resource.
     */
    public
    function edit($id)
    {
        $contato = Contato::find($id);

        return view('formulario.editar', compact('contato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $dados = $request->all();
        $contato = Contato::find($id);

        if (!$contato) {
            throw new ModelNotFoundException("Contato não encontrado");
        }

        $contato->update($dados);
        $contato->endereco->update($dados);

        $contato->telefones[0]->update([
            'codigo_area' => $dados['codigoArea1'],
            'numero_tel' => $dados['numeroTelefone1']
        ]);


        if (($dados['codigoArea2'] === null) and ($dados['numeroTelefone2'] === null)) {
            $dados['codigoArea2'] = ' ';
            $dados['numeroTelefone2'] = ' ';

            $contato->telefones[1]->update([
                'codigo_area' => $dados['codigoArea2'],
                'numero_tel' => $dados['numeroTelefone2']
            ]);
        }
        $contato->telefones[1]->update([
            'codigo_area' => $dados['codigoArea2'],
            'numero_tel' => $dados['numeroTelefone2']
        ]);


        return redirect()->route('home')->with('mensagem', 'Contato atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy($id)
    {
        $contato = new Contato();

        $contato::destroy($id);

        return redirect()->route('home')->with('flash-message', 'Contato ' . $contato->nome . ' deletado');
    }

    public function destroyAll()
    {
        DB::table('contatos')
            ->join('enderecos', 'contatos.id_endereco', '=', 'enderecos.id')
            ->join('telefones', 'telefones.id_contato', '=', 'contatos.id')
            ->delete();

        return redirect()->route('home');

    }

}
