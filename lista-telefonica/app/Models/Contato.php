<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;


/**
 * Post
 *
 * @mixin Eloquent
 */
class Contato extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    //ALTER USER 'root'@'localhost' IDENTIFIED WITH 'mysql_native_password' BY 'Semge71@';
    protected $fillable = [
        'nome',
        'email',
        'id_endereco',
    ];

//    public function getContato(): \Illuminate\Support\Collection
//    {
//        $query = DB::table('contatos')
//            ->join('enderecos', 'contatos.id_endereco', '=', 'enderecos.id')
//            ->join('telefones', 'telefones.id_contato', '=', 'contatos.id')
//            ->select('contatos.id', 'contatos.nome', 'contatos.email',
//                'telefones.id', 'telefones.numero as numero_tel',
//                'enderecos.id', 'enderecos.logradouro', 'enderecos.numero',
//                'enderecos.complemento', 'enderecos.cep', 'enderecos.cidade', 'enderecos.estado')
//            ->get();
//
//        return $query->id;
//    }


    public function create($request)
    {

    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'id_endereco');
    }

    public function enderecoFormatado()
    {
        $endereco = $this->endereco;

        $enderecoFormatado = $endereco->logradouro . " - " . $endereco->numero_casa;
        if (!empty($endereco->complemento)) {
            $enderecoFormatado .= PHP_EOL . $endereco->complemento;
        }
        $enderecoFormatado .= PHP_EOL . ', ' . $endereco->bairro . ', ' . $endereco->cidade . ' - ' . $endereco->estado . ', ' . $endereco->cep;

        return $enderecoFormatado;
    }

    /**
     * @return HasMany
     */
    public function telefones(): HasMany
    {
        return $this->hasMany(Telefone::class, 'id_contato', 'id');
    }

//    public function telefoneFormatado()
//    {
//        $telefones = $this->telefones;
//        $telFormatados = [];
//        foreach ($telefones as $telefone) {
//            $telFormatados[] =  "(" . $telefone->codigo_area . ") " . $telefone->numero_tel;
//        }
//        return implode("\n", $telFormatados);
//    }
}
