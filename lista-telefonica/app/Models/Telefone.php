<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contato;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Telefone extends Model
{

    private $codigoDeArea;
    private $numero;

    use HasFactory;

    protected $fillable = [
        'codigo_area',
        'numero',
        'id_contato',
    ];



    /**
     * @return BelongsTo
     */
    public function contato(): BelongsTo
    {
        return $this->belongsTo(Contato::class, 'id_contato','id');
    }

    public function telefoneFormatado()
    {
        $telefones = $this->telefones;

        $telefonesFormatados = $telefones->map(function ($telefone) {
            return "($telefone->codigo_area) . $telefone->numero"  ;
        });
//        dd($telefonesFormatados);
        return $telefonesFormatados; // Retorna os números de telefone formatados como uma string separada por vírgulas.
    }
}
