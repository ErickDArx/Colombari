<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DocentesController extends Controller
{

    public function index(Request $request)
    {
        $users = Docentes::orderBy('name', 'desc')->get();
        return $users;
    }

    public function create(Request $request)
    {

    }

    public function store(Request $request)
    {
        $post = new Docentes();
        $post->name = $request->name;
        $post->lastname = $request->lastname;
        $post->save();
        return response()->json($post);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
