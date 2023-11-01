<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contato;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Telefone
 *
 * @property int $id
 * @property string $codigo_area
 * @property string $numero_tel
 * @property int $id_contato
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Contato $contato
 * @method static \Database\Factories\TelefoneFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Telefone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Telefone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Telefone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Telefone whereCodigoArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Telefone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Telefone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Telefone whereIdContato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Telefone whereNumeroTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Telefone whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Telefone extends Model
{

    private $codigoDeArea;
    private $numero;

    use HasFactory;

    protected $fillable = [
        'codigo_area',
        'numero_tel',
        'id_contato',
    ];


    /**
     * @return BelongsTo
     */
    public function contato(): BelongsTo
    {
        return $this->belongsTo(Contato::class, 'id_contato', 'id');
    }


}
