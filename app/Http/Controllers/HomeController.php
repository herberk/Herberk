<?php

namespace App\Http\Controllers;

use App\models\empresas\empresa;
USE App\Models\varias\message;
use App\Models\Auth\setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Config::set('app.timezone', 'America/Chicago');
        $value = config('app.timezone');

        return view('home',compact('value'));
    }

    public function query(){
        $envs = [
            ['name' => 'PHP version',       'value' => 'PHP/'.PHP_VERSION],
            ['name' => 'Laravel version',   'value' => app()->version()],
            ['name' => 'CGI',               'value' => php_sapi_name()],
            ['name' => 'Uname',             'value' => php_uname()],
            ['name' => 'Server',            'value' => array_get($_SERVER, 'SERVER_SOFTWARE')],
            ['name' => 'Cache driver',      'value' => config('cache.default')],
            ['name' => 'Session driver',    'value' => config('session.driver')],
            ['name' => 'Queue driver',      'value' => config('queue.default')],
            ['name' => 'Timezone',          'value' => config('app.timezone')],
            ['name' => 'Locale',            'value' => config('app.locale')],
            ['name' => 'Env',               'value' => config('app.env')],
            ['name' => 'URL',               'value' => config('app.url')],
        ];

        $json = file_get_contents(base_path('composer.json'));
        $dependen = json_decode($json, true)['require'];

       // $companies = setting::where('key', 'general.company_name')->get();
      $companies = empresa::orderBy('name_corto','ASC')->get();

      $date =(new Carbon('first day of April 2019'));

      return['envs' => $envs, 'dependen' => $dependen ,'companies' => $companies, 'date' => $date ];
    }

}
