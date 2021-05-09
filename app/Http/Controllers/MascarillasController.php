<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mascarillas;
use Illuminate\Support\Facades\Storage;
class MascarillasController extends Controller
{
    public function index(Request $request){
        //Busqueda del nombre
        $busqueda = $request->get('busqueda');

        //Muestreme los datos de la tabla t_usuario, de forma que su sus nombre_operario de vean de forma descendiente
        //Ejecutar la busqueda
        //Paginacion 
        $mascarillas = mascarillas::orderBy('nombre', 'DESC')
            ->paginate(12);
        return view('welcome', ['mascarillas' => $mascarillas]);
    }

    public function store(Request $request){
        if($request->hasFile('imagen')){

        }
        $mascarillas = new mascarillas();
        $mascarillas->nombre = "Ejemplo";
        $mascarillas->categoria = 1;
        $mascarillas->cantidad = 10;
        $mascarillas->precio = "5000";
        $imagenes =  $request->file('imagen')->store('public');
        $url = Storage::url($imagenes);
        $mascarillas->img = $url;
        $mascarillas->save();
        return back();
    }
}
