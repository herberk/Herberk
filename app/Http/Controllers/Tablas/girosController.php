<?php

namespace App\Http\Controllers\tablas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Tablas\giros;
use App\Models\Tablas\girosbs;
use App\Models\Tablas\girosas;
use Maatwebsite\Excel\Excel;

class girosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function giros(Request $request){
        $view = 'index';

        $girosas = girosas::with('girosbs')->get();
        $girosbs = girosbs::with('giros')->get();
     //  dd(  $girosbs);

        return view('tablas.giros.index',compact( 'girosas','girosbs','view'));
    }

    function exports() {
       return view('shared._enconstrucion');
    }

}
