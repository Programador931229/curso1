@extends('layouts.plantilla')

@section('title', 'principal')

@section('content')
    <h1>Esta es la ventana de cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                {{$curso->nombre}}
            </li>
        @endforeach
    </ul>
    {{ $cursos->links()}}
@endsection