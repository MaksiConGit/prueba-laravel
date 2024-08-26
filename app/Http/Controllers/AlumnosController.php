<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index(){
        return "Todos los alumnos";
    }

    public function añadir(){
        return "Añadir alumno";
    }

    public function mostrarAlumno($alumno){

        switch ($alumno) {
            case 'maximiliano':
                return "Nombre: Maximiliano<br>Apellido: Alcaraz";
                break;
            case 'lucas':
                return "Nombre: Lucas<br>Apellido: Del Labo";
                break;
            default:
                return "El alumno " . ucfirst($alumno) . " no se encuentra en la base de datos";
                break;
        }
    }
}
