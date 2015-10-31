<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comentario;

class ControladorComentario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->json(Comentario::get());
    }

    
    public function store(Request $request)
    {
        Comentario::create(array(
            'autor' => $request->input('autor'),
            'texto' => $request->input('texto')

            ));
        return response()->json(array('exito' =>true));// exito es solo una verificacion de que se a cumplido la accion
    }
    public function show($id){

        return response()->json(Comentario::where('id','=',$id)->get());
    }
    
    public function destroy($id)
    {
        Comentario::destroy($id);
        return response()->json(array('exito'=>true));
    }
}
