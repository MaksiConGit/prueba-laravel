<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
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

}
