<?php

namespace App\Models\archivos;

use Illuminate\Database\Eloquent\Model;
use App\Models\empresas\empresa;


class directorio extends Model
{
    protected $fillable = [
        'ano',
        'categoriname',
        'empresas_id',
        'categoriupload_id',
    ];

    public function empresas() {
        return $this->belongsTo(empresa::class)->withDefault([
            'name_corto' => '(Sin empresa)'
        ]);
    }

    Public function ficheros()
     {
         return $this->hasMany(fichero::class);
     }

    public function getNombreAttribute()
    {
        return $this->ano . ' ' . $this->name;
    }
}
