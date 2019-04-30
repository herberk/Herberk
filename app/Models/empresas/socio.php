<?php

namespace App\models\empresas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class socio extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'rut',
        'name',
        'fono',
        'email',
        'rep_legal',
        'porcen',
        'apopago',
        'apopend',
        'aporte',
        'notas',
        'softDeletes'
    ];

    public function empresas() {
//        return $this->belongsTo('App\models\empresas\empresa')->withDefault([
//            'name_corto' => '(Sin empresa)'
//        ]);
        return $this->belongsTo(empresa::class)->withDefault([
            'name_corto' => '(Sin empresa)'
        ]);


    }

    public function getnotasAttribute($notas)
    {
        return $this->attributes['notas'] = strip_tags($notas,"");
    }

}
