<?php

namespace App\Http\Controllers\Empresas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\empresas\empresa;
use App\Models\archivos\directorio;
use App\Models\archivos\fichero;
use Illuminate\Support\Facades\Storage;
use Kamaln7\Toastr\Facades\Toastr;

class archivosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

 // listado de empresas con sus directorios y archivos
    public function show(){
        $categoris = directorio::with('ficheros')->get();
        $view = 'index';
        $empresas = empresa::with('directorios')
            ->orderBy('name_corto')
            ->get();
        return view('archivos.listafiles', compact('empresas','categoris','view'));
    }

// Seccion para manejar directorios o categorias

    public function listacat() {
        $categori = directorio::with('empresas')
            ->orderBy('ano','asc')
            ->get();

        return view('archivos.listadirectorio',[
            'categoris'=>$categori,
            'view' => 'index',
        ]);
    }

    public function create(){
        $empresas = empresa::orderBy('name_corto','ASC')->get();
        $view = 'create';
        $categori = new directorio();
        return view('archivos.modal', compact('categori','empresas','view'));
    }
    public function store(Request $request)
    {
        $directorios = new directorio();
        $directorios->ano = $request->ano;
        $directorios->name = $request->name;
        $directorios->empresas_id = $request->empresa_id;
        $directorios->save();

        $message='El directorio '. $directorios->ano.' '. $directorios->name.' fue Guardadoa';
        $title = "";
        Toastr::success($message, $title);
        return redirect()->route("listacategori");

    }

    public function edit($id)
    {
        $empresas = empresa::orderBy('name_corto','ASC')->get();
        $categori = directorio::findOrFail($id);
        $view = 'edit';
        return view('archivos.modal', compact('categori','empresas','view'));
    }

    public function update(Request $request, $id)
    {
        $directorios=directorio::findOrFail($id);

        $directorios->ano = $request->ano;
        $directorios->name = $request->name;
        $directorios->empresas_id = $request->empresa_id;
        $directorios->save();
        $message='El directorio '.$directorios->ano.' '.$directorios->name.' fue modificado';
        $title = "";
        Toastr::success($message, $title);
        return redirect()->route("listacategori");
    }
    public function destroy( $id)
    {
//        abort_if($profession->profiles()->exists(), 400, 'Cannot delete a profession linked to a profile.');
        $categoriupload = directorio::findOrFail($id);
        $categoriupload->delete();
        $message='El directorio fue eliminado';
        $title = "";
        Toastr::Warning($message, $title);
        return redirect()->route("listacategori");
    }


    //    Seccion para manejar archivos o files
    public function index()  {
        $view = 'index';
        $files = fichero::orderBy('created_at', 'desc')->get();
        return view('archivos.files', compact('files','view'));
    }




    public function storefile(Request $request)
    {
        // Guardamos el archivo indicando el driver y el método putFileAs el cual recibe
        // el directorio donde será almacenado, el archivo y el nombre.
        // ¡No olvides validar todos estos datos antes de guardar el archivo!
        Storage::disk('dropbox')->putFileAs(
            '/',
            $request->file('file'),
            $request->file('file')->getClientOriginalName()
        );

        // Creamos el enlace publico en dropbox utilizando la propiedad dropbox
        // definida en el constructor de la clase y almacenamos la respuesta.
        $response = $this->dropbox->createSharedLinkWithSettings(
            $request->file('file')->getClientOriginalName(),
            ["requested_visibility" => "public"]
        );

        // Creamos un nuevo registro en la tabla files con los datos de la respuesta.
        fichero::create([
            'glosa' => $response['glosa'],
            'extension' => $request->file('file')->getClientOriginalExtension(),
            'size' => $response['size'],
            'public_url' => $response['url']
        ]);

        // Retornamos un redirección hacía atras
        return back();
    }
    public function download(File $file)
    {
        // Retornamos una descarga especificando el driver dropbox
        // e indicándole al método download el nombre del archivo.
        return Storage::disk('dropbox')->download($file->name);
    }

    public function destroyfile(File $file)
    {
        // Eliminamos el archivo en dropbox llamando a la clase
        // instanciada en la propiedad dropbox.
        $this->dropbox->delete($file->name);
        // Eliminamos el registro de nuestra tabla.
        $file->delete();

        return back();
    }
}
