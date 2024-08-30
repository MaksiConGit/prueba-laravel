<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnoController extends Controller
{
    public function index(){
        return view('alumno.indexView');
    }
    

    public function alumnoCreate(){
        return view('alumno.alumnoCreate');
    }

    public function indexID($userID){
        //Variante compact('userID') #La variable debe llamarse igual en la view y en el parametro#
        //return view('alumno.indexIDView', compact('userID'));

        //Variante Array #El nombre puede variar entre la view y el parametro#
        return view('alumno.indexIDView' , [
            'user'=> $userID 
        ]);
    }
}
