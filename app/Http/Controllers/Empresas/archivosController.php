<?php

namespace App\Http\Controllers\Empresas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\empresas\empresa;

class archivosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){

        $view = 'index';
        $empresas = empresa::with('juradas')
            ->orderBy('name_corto')
            ->get();
     //  dd($empresas);
        return view('archivos.listafiles', compact('empresas','view'));
    }
}
