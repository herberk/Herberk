<?php

namespace App\models\Tablas;

use Illuminate\Database\Eloquent\Model;

class girosas extends Model
{
    protected $fillable = ['name'];

    protected $table = 'girosas';

    Public function girosbs()
    {
        return $this->hasMany(girosbs,'girosas_id');
    }

}
