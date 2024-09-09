<?php

namespace App\Http\Controllers;

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

    public function create(Request $request) {
        
        Alumno::create($request->all() + ['slug' => str_replace(" ", "_", ucwords(strtolower("$request->nombre $request->apellido")))]);
        return redirect(route('alumno.index'));
    }

    public function indexEdit(Alumno $alumno){

        return view('alumno.editAlumno', [
            'alumno' => $alumno
        ]);

    }

    public function edit(Request $request, $alumno) {

        $alumno = Alumno::find($alumno);
        $alumno->update($request->all() + ['slug' => str_replace(" ", "_", ucwords(strtolower("$request->nombre $request->apellido")))]);

        return redirect(route('alumno.stats', [$alumno]));

    }

    public function delete($alumno){

        $alumno = Alumno::find($alumno);
        
        $alumno->delete();

        return redirect(route('alumno.index'));
        
    }
}
