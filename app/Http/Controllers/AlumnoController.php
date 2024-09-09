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

        $alumno = new Alumno();
        $alumno->nombre = ucwords(strtolower($request->nombre)) ;
        $alumno->apellido = ucwords(strtolower($request->apellido));
        $alumno->email = $request->email;
        $alumno->password = bcrypt($request->password);
        $alumno->slug = str_replace(" ", "_", ucwords(strtolower("$request->nombre $request->apellido")));

        $alumno->save();

        return redirect(route('alumno.index'));
    }

    public function indexEdit(Alumno $alumno){
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

        return redirect(route('alumno.stats', [$alumno]));
    }

    public function delete($alumno){
        $alumno = Alumno::find($alumno);
        $alumno->delete();

        return redirect(route('alumno.index'));
        
    }
}
