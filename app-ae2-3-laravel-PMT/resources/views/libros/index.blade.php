
@extends('layouts.app')

@section('titulo', 'Listado de libros')

@section('contenido')
    <h2>Listado de libros</h2>

    @if ($libros->isEmpty())
        <p>No hay libros registrados.</p>
    @else
        @foreach ($libros as $libro)
            <article>
                <h3>{{ $libro->titulo }}</h3>
                <p>Autor: {{ $libro->autor }}</p>
                <p>Año de publicación: {{ $libro->anio_publicacion }}</p>
            </article>
            <br>
        @endforeach
    @endif
@endsection
