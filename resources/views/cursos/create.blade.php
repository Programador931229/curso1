@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>Aqui podras crear un nuevo curso</h1>
    <form action="" method="post">
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label>
            Descripcion
            <br>
            <textarea name="descripcion" rows="5"></textarea>
        </label>
        <br>
        <label>
            Clasificacion
            <input type="text" name="clasificacion">
        </label>
        <br>
        <button>
            Guardar
        </button>
    </form>
@endsection
