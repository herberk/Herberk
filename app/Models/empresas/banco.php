<?php

namespace App\models\empresas;

use Illuminate\Database\Eloquent\Model;

class banco extends Model
{
    protected $fillable = [
        'name',
        'ctacte',
        'firman',
        'montoLin',
        'empresas_id',
        ];


    public function empresas() {
        return $this->belongsTo('App\models\empresas\empresa');
    }
}
