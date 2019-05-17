<?php

namespace App\models\archivos;

use Illuminate\Database\Eloquent\Model;

class fichero extends Model
{
    protected $fillable = [
        'glosa',
        'size',
        'extension',
        'public_url',
        'categoriupload_id',
        'empresas_id',
    ];

    public function getSizeInKbAttribute()
    {
        return number_format($this->size / 1024, 1);
    }
}
