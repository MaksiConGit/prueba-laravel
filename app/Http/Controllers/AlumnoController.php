<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumnoCreateRequest;
use App\Http\Requests\AlumnoEditRequest;
use App\Models\Alumno;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class AlumnoController extends Controller
{
    public function index(){
        
        $alumnos = Alumno::orderBy('id', 'asc')->paginate(10);

        return view ('alumno.indexAlumno', [
            'verAlumnos' => $alumnos
        ]);

    }

    public function alumnoIndex(Alumno $alumno){

        return view('alumno.indexAlumnoID', [
            'alumno' => $alumno
        ]);

    }

    public function indexCreate(){
        return view('alumno.createAlumno');
    }

    public function create(AlumnoCreateRequest $request) {
        
        // $request->validate([
        //     'nombre'=> 'required|min:2|max:255',
        //     'apellido'=> 'required|min:2|max:255',
        //     'email'=> 'required|min:7|max:255|unique:alumnos',
        //     'password'=> 'required|min:8|max:255',
        // ]);

        Alumno::create($request->all() + ['slug' => str_replace(" ", "_", ucwords(strtolower("$request->nombre $request->apellido")))]);
        return redirect(route('alumno.index'));


    }

    public function indexEdit(Alumno $alumno){

        return view('alumno.editAlumno', [
            'alumno' => $alumno
        ]);

    }

    public function edit(AlumnoEditRequest $request, $alumno) {

        $alumno = Alumno::find($alumno);

        $request->validate([
            // 'nombre'=> 'required|min:2|max:255',
            // 'apellido'=> 'required|min:2|max:255',
            'email'=> "required|min:7|max:255|unique:alumnos,email,{$alumno->id} ",
        ]);

        $alumno->update($request->all() + ['slug' => str_replace(" ", "_", ucwords(strtolower("$request->nombre $request->apellido")))]);

        return redirect(route('alumno.stats', [$alumno]));

    }

    public function delete($alumno){

        $alumno = Alumno::find($alumno);
        
        $alumno->delete();

        return redirect(route('alumno.index'));
        
    }
}
