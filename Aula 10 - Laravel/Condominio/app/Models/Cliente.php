<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey = 'cpf';

    protected $fillable = ['cpf','nome', 'endereco', 'telefone', 'id_predio'];

    public function relPredio(){
        return $this->hasOne('App\Models\Predio', 'id', 'id_predio');
    }
}
