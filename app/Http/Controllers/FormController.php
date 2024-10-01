<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Form;

class FormController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'ci'=>'required',
            'nombre'=>'required',
            'genero'=>'required',
            'edad'=>'required',
            'telefono'=>'required',
            'ciudad'=>'required'
        ]);
        $registro = new Form;
        $registro->ci = $request->input('ci');
        $registro->nombre = $request->input('nombre');
        $registro->genero = $request->input('genero');
        $registro->edad = $request->input('edad');
        $registro->telefono = $request->input('telefono');
        $registro->ciudad = $request->input('ciudad');
        $registro->save();
        Alert::success('Registro Creado Correctamente'); 
        return redirect('/formulario');
    }
}
