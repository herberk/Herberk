<?php

namespace App\models\archivos;

use Illuminate\Database\Eloquent\Model;

class fichero extends Model
{

    protected $table = 'ficheros';
    protected $guarded = [];


    public function getSizeInKbAttribute()
    {
        return number_format($this->size / 1024, 1);
    }
}
