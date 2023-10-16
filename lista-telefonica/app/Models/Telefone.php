<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contato;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Telefone extends Model
{
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
}
