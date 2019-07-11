<?php

namespace App\Http\Controllers;

use App\models\varias\Setting;
use Illuminate\Http\Request;
use Kamaln7\Toastr\Facades\Toastr;

class SettingController extends Controller
{

    public function show()
    {
        $settings = Setting::all();
        return view('setting.show',compact('settings'));
    }

    public function index()
    {
//       filtar la empresa

        return view('setting.index');
    }

    public function store(Request $request)
    {
        $rules = Setting::getValidationRules();
        $data = $this->validate($request, $rules);
        $validSettings = array_keys($rules);
        foreach ($data as $key => $val) {
            if( in_array($key, $validSettings) ) {
                Setting::add($key, $val, Setting::getDataType($key),$request->get('id_empresa'));
            }
        }
        $message='La configuración se ha guardado.';
        $title = "";
        Toastr::success($message, $title);
        return redirect()->route("settings");

    }
}
