<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
//ALTER USER 'root'@'localhost' IDENTIFIED WITH 'mysql_native_password' BY 'Semge71@';

    protected $fillable = [
        'logradouro',
        'numero',
        'complemento',
        'cep',
        'cidade',
        'estado',
    ];
}
