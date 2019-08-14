<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    protected $table = 'carros';

    protected $fillable = [
        'marca',
        'renavam',
        'placa'
    ];
}
