@extends('layouts.plantilla')

@section('title', 'principal')

@section('content')
    <h1>Esta es la ventana de cursos</h1>
    <a href="{{route("cursos.create")}}" >Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
        <li>
            <a href="{{route("cursos.show", $curso->id)}}">{{$curso->nombre}}</a>
        </li>
        @endforeach
    </ul>
    {{ $cursos->links()}}
@endsection