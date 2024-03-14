<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
    }
    //
    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        //
        $curso = new Curso();
        
        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->clasificacion = $request->clasificacion;
        
        $curso->save();
        
        return redirect()->route('cursos.show', $curso->id);
    }

    public function edit($id){
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso') );
    }

    public function show($id){
        
        // compact('curso'); es igual a ['curso' => $curso];

        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }
}
