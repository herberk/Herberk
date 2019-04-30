<?php

namespace App\Http\Controllers\Empresas;


use Illuminate\Http\Request;
use App\models\empresas\socio;
use App\Http\Controllers\Controller;

class SocioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios = socio::with('empresas')->get();
        $date = "30/04/2019";
  //      dd($socios);
        return view('empresas.socios.listasocios', compact('socios' , 'date'));
    }
}
