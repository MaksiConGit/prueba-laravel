<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::orderBy('id', 'asc')->paginate(10);
        return view ('alumno.indexAlumno', [
            'verAlumnos' => $alumnos
        ]);
    }

    public function alumnoIndex($alumno){
        $alumno = Alumno::find($alumno);
        return view('alumno.indexAlumnoID', [
            'alumno' => $alumno
        ]);
    }

    public function indexCreate(){
        return view('alumno.createAlumno');
    }

    public function create(Request $request) {


        $alumno = new Alumno();

        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->email = $request->email;

        $alumno->save();

        return redirect('/alumno');
    }

    public function indexEdit($alumno){
        $alumno = Alumno::find($alumno);
        return view('alumno.editAlumno', [
            'alumno' => $alumno
        ]);
    }

    public function edit(Request $request, $alumno) {
        $alumno = Alumno::find($alumno);

        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->email = $request->email;

        $alumno->save();

        return redirect("/alumno/{$alumno->id}");
    }

    public function delete($alumno){
        $alumno = Alumno::find($alumno);
        $alumno->delete();

        return redirect('/alumno');
        
    }
}
