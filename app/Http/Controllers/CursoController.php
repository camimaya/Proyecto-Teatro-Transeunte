<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getCirco()
    {
        return view('cursos.circo');
    }

    public function getClown1()
    {
        return view('cursos.clown1');
    }
    

    public function getTeatro()
    {
        return view('cursos.teatro');
    }
}
