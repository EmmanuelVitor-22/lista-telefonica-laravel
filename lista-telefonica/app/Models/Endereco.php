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

    public function contatos()
    {
        return $this->hasMany(Contato::class, 'id_endereco');
    }

}
