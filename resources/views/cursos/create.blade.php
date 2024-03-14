@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>Aqui podras crear un nuevo curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>

        @error('nombre')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>
        <label>
            Clasificacion
            <input type="text" name="clasificacion" value="{{old('nombre')}}">
        </label>
        @error('clasificacion')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror
        <br>
        <button type="submit">
            Guardar
        </button>
    </form>
@endsection
