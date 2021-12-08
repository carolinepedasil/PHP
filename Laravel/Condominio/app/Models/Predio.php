<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    use HasFactory;


    public function relCliente(){
        return $this->hasMany('App\Models\Cliente', 'id_predio');
    }
}

