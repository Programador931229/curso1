@extends('layouts.plantilla')
{{-- para correr tailwind css se usa "npm run dev" --}}

@section('title', 'show')

@section('content')
    <h1>Este es el curso de {{$curso->nombre}}</h1>
    <br>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <br>
    <p>
        <strong>Clasificacion: </strong>{{$curso->clasificacion}}
    </p>
    <p>
        <strong>Descripcion: </strong>{{$curso->descripcion}}
    </p>

@endsection