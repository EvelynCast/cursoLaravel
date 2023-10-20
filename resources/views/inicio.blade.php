@extends('master')

@section('contenido')
    <h2>Sistema de control escolar CETIS 107</h2>
    <h3>Catálogos disponibles</h3>
    <p>
        <a href="{{ url('alumnos') }}" class="btn btn-lg btn-primary">Alumnos</a>
    </p>
@stop
 