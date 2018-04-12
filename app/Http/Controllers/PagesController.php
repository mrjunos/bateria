<?php

namespace App\Http\Controllers;

use App\Encuesta;

use Carbon\Carbon;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $encuestas = Encuesta::all();
        return view('encuestas.index', compact('encuestas'));
    }

    public function all(){
    	$encuestas = Encuesta::all();
    	return view('encuestas.all', compact('encuestas'));
    }

    public function create(){
    	return view('encuestas.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'cedula' => 'required',
            'nombre' => 'required',
            'fecha_encuesta' => 'required'
        ]);

        $encuesta = Encuesta::create([
            'cedula' => $request->get('cedula'),
            'nombre' => $request->get('nombre'),
            'fecha_encuesta' => Carbon::parse($request->get('fecha_encuesta')),
            'user_id' => $request->get('user'),
        ]);

        return redirect()->route('encuestas.edit', compact('encuesta'))->with('flash', 'Creado con Éxito');
    }

    public function edit(Encuesta $encuesta){
        return view('encuestas.edit', compact('encuesta'));
    }

    public function update(Encuesta $encuesta, Request $request){
        $this->validate($request, [
            'cedula' => 'required',
            'nombre' => 'required',
            'fecha_encuesta' => 'required'
        ]);

        $encuesta->cedula = $request->get('cedula');
        $encuesta->nombre = $request->get('nombre');
        $encuesta->fecha_encuesta = Carbon::parse($request->get('fecha_encuesta'));
        $encuesta->user_id = $request->get('user');
        $encuesta->save();

        return back()->with('flash', 'Guardado con Éxito');
    }
}
