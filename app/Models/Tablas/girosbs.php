<?php

namespace App\models\Tablas;

use Illuminate\Database\Eloquent\Model;

class girosbs extends Model
{
    protected $fillable = ['name'];

    protected $table = 'girosbs';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    Public function girosas()
    {
        return $this->hasMany(girosas, girosbs_id);
    }


}
