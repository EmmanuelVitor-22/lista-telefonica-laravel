<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Endereco;
use App\Models\Telefone;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contato extends Model
{
    use HasFactory;


    //ALTER USER 'root'@'localhost' IDENTIFIED WITH 'mysql_native_password' BY 'Semge71@';
    protected $fillable = [
        'nome',
        'email',
        'id_endereco',
    ];

    /**
     * @return HasOne
     */
    public function endereco(): HasOne
    {

        return $this->hasOne(Endereco::class, 'id_endereco', 'id');
    }

    /**
     * @return HasMany
     */
    public function telefones(): HasMany
    {
        return $this->hasMany(Telefone::class, 'id_contato','id');
    }


}
