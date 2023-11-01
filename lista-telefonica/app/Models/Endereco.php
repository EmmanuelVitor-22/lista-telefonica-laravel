<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'logradouro',
        'numero_casa',
        'complemento',
        'cep',
        'bairro',
        'cidade',
        'estado',
    ];

    public function contatos()
    {
        return $this->hasMany(Contato::class, 'id_endereco');
    }




}
