<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mascarillas;
use Illuminate\Contracts\Cache\Store;
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

        $mascarillas = new mascarillas();
        mascarillas::setImagen($request->imagen);
        dd($mascarillas);
    }
}
