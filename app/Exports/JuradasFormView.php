<?php

namespace App\Exports;


use App\models\empresas\empresa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class JuradasFormView implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('Exports.Juradasexport', [
                'empresas' => empresa::with('juradas')->get()
        ]);
    }


}
