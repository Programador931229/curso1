<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
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

    public function store(StoreCurso $request){
        
        
        //Se utiliza para validar que no hayan campos vacios en el formulario que se envia
        $curso = new Curso();
        

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->clasificacion = $request->clasificacion;
        
        $curso->save();
        
        return redirect()->route('cursos.show', $curso->id);
    }
    
    public function show(Curso $curso){
        
        // compact('curso'); es igual a ['curso' => $curso];

        return view('cursos.show', compact('curso'));
    }
    
    public function edit(Curso $curso){
        //$curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->clasificacion = $request->clasificacion;
        
        $curso->save();
        
        return redirect()->route('cursos.show', $curso);
    }

}
