<?php

namespace App\models\empresas;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class jurada extends Model
{
    protected $fillable = [
        'nro_dj',
        'desc_corta',
        'fe_vence',
        'descripcion',
        'certificado',
        'fe_certifica',
        'Instruccion',
        'Formulario',
     ];
     public function getfe_venceAttribute($fe_vence)
    {
        return Carbon::parse($fe_vence)->format('d-m-Y');

    }

    public function empresas()
    {
        return $this->belongsToMany(empresa::class, 'empresa_juradas');
    }


}


