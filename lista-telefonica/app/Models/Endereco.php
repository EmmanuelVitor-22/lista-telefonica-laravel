<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'logradouro' ,
        'numero' ,
        'complemento' ,
        'cep' ,
        'cidade' ,
        'estado' ,
    ];

    public function contato(): BelongsTo
    {
        return $this->belongsTo(Contato::class);
    }
}
