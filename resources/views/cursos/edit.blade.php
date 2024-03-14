@extends('layouts.plantilla')

@section('title', 'edit')

@section('content')
<a href="{{route('cursos.index')}}">volver a cursos</a>
<h1>Editar el curso {{$curso->nombre}}</h1>

<form action="{{route('cursos.update', $curso->id)}}" method="POST">
    
    @csrf
    @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{$curso->nombre}}">
        </label>
        <br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>
        <br>
        <label>
            Clasificacion
            <input type="text" name="clasificacion" value="{{$curso->clasificacion}}">
        </label>
        <br>
        <button type="submit">
            Guardar cambios
        </button>
</form>

<br>

@endsection