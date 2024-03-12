<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function __invoke()
    {
        return view('cursos.index');
    }
    //
}
