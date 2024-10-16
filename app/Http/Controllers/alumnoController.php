<?php

namespace App\Http\Controllers;
use App\Http\Requests\Alumno\CreateRequest;
use App\Http\Requests\Alumno\EditRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::orderBy('id', 'asc')->paginate(10);

        return view ('alumno.index', compact('alumnos'));
    }

    public function show(Alumno $alumno){
        return view('alumno.show', compact('alumno'));
    }

    public function create(){
        return view('alumno.create');
    }

    public function store(CreateRequest $request) {

        Alumno::create($request->all() + ['slug' => str_replace(" ", "_", ucwords(strtolower("$request->nombre $request->apellido")))]);
        return redirect(route('alumno.index'));

    }

    public function edit(Alumno $alumno){

        return view('alumno.edit', compact('alumno'));

    }

    public function update(EditRequest $request, Alumno $alumno) {

        $request->validate([
            'email'=> "required|min:7|max:255|unique:alumnos,email,{$alumno->id} ",
        ]);

        $alumno->update($request->all() + ['slug' => str_replace(" ", "_", ucwords(strtolower("$request->nombre $request->apellido")))]);

        return redirect(route('alumno.show', [$alumno]));

    }

    public function destroy(Alumno $alumno){        
        
        $alumno->delete();
        return redirect(route('alumno.index'));
        
    }

    public function archive(){
        $alumnos = Alumno::onlyTrashed()
            ->orderBy('id', 'asc')->paginate(10);

        return view ('alumno.archive', compact('alumnos'));
    }
}
