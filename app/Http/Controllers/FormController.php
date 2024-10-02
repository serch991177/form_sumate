<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Form;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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
        $registro->nombre = strtoupper($request->input('nombre'));
        $registro->genero = $request->input('genero');
        $registro->edad = $request->input('edad');
        $registro->telefono = $request->input('telefono');
        $registro->ciudad = $request->input('ciudad');
        $registro->id_user = Auth::id();
        $registro->save();
        Alert::success('Registro Creado Correctamente'); 
        return redirect('/formulario');
    }
    public function index(){
        $registro= DB::table('form')->select()->get();
        //dd($registro);
        return view('dashboard')->with(['registro'=>$registro]);
    }
    
    public function createuser(){
        $registro= DB::table('users')->select()->get();
        return view('User')->with(['registro'=>$registro]);
    }
    public function formuser(){
        return view('formuser');
    }
    public function crearusuario(Request $request){
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'estado' => 'required',
            'administrador'=>'',
            'generador'=>''
        ]);
        //dd($attributes);
        $user = User::create($attributes);
        Alert::success('Usuario Creado Correctamente'); 

        return redirect('/Creacion-Usuarios');
    }

    public function show(Request $req){
        $solicitudId=$req->id;
        $solicitud = User::find($solicitudId);
        $id_usuario = Auth::id();
        //dd($solicitud);
        return view('editarfuncionario', compact('solicitud'));
    }

    public function updateuser(Request $request){
        $id = $request->user_id;
        $users = User::find($id);
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'estado' => 'required',
        ]);
        $users->update($attributes);
        Alert::success('Usuario Actualizado Correctamente'); 
        return redirect('/Creacion-Usuarios');
    }
}
