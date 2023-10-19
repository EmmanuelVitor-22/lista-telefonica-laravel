<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Endereco;
use App\Models\Telefone;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

class Contato extends Model
{
    use HasFactory;


    //ALTER USER 'root'@'localhost' IDENTIFIED WITH 'mysql_native_password' BY 'Semge71@';
    protected $fillable = [
        'nome',
        'email',
        'id_endereco',
    ];

    public function getContato(): \Illuminate\Support\Collection
    {
        $query =  DB::table('contatos')
            ->join('enderecos', 'contatos.id_endereco', '=','enderecos.id')
            ->join('telefones', 'telefones.id_contato', '=','contatos.id')
            ->select('contatos.id', 'contatos.nome','contatos.email',
                     'telefones.id', 'telefones.numero as numero_tel',
                     'enderecos.id', 'enderecos.logradouro','enderecos.numero',
                     'enderecos.complemento','enderecos.cep','enderecos.cidade','enderecos.estado')
            ->get();

        return $query->id;
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'id_endereco');
    }

    /**
     * @return HasMany
     */
    public function telefones(): HasMany
    {
        return $this->hasMany(Telefone::class, 'id_contato','id');
    }

    public function telefoneFormatado()
    {
        $telefones = $this->telefones;
        if ($telefones->isEmpty()) {
            return 'Nenhum telefone disponível';
        }
        $telefonesFormatados = $telefones->map(function ($telefone) {
            return "($telefone->codigo_area) . $telefone->numero"  ;
        });
        return $telefonesFormatados;
    }
//    public function enderecoFormatado()
//    {
//        $endereco = $this->endereco;
////        dd($this->endereco);
//        if ($endereco->isEmpty()) {
//            return 'Nenhum endereço cadastrado'; // Trate o caso em que não há telefones associados.
//        }
//        $enderecoFormatado = $endereco->map(function ($telefone) {
//            return 'teste' ;
//        });
//        dd($enderecoFormatado);
//        return $enderecoFormatado;
//    }



}
