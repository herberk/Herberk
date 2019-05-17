<?php

namespace App\Models\archivos;

use Illuminate\Database\Eloquent\Model;

class categoriupload extends Model
{
    protected $fillable = [
        'ano',
        'categoriname',
        'empresas_id',
    ];
}
