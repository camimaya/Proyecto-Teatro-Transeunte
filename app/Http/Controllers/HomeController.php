<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Integrante;
use App\Http\Controllers\CursoController;


class HomeController extends Controller
{
    
    public function getHome()
    {
        return view('Inicio');
    }

    public function postHome(Request $request)
    {
        $p = new Integrante;
        $p->id = $request->id;
        $p->nombre = $request->nombre;
        $p->correo = $request->correo;
        $p->curso = $request->curso;
        $p->save();

        if($request->curso  == "circo")
        {
            return redirect() -> action([CursoController::class, 'getCirco']);
        }
        if($request->curso  == "clown")
        {
            return redirect() -> action([CursoController::class, 'getClown1']);
        }
        if($request->curso  == "teatro")
        {
            return redirect() -> action([CursoController::class, 'getTeatro']);
        }
        
    }


}
