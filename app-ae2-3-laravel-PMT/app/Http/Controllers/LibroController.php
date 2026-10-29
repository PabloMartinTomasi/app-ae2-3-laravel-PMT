<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index(){
        Libro::query()->delete();

        /* Libro::create([
            'titulo'=>'La Odisea',
            'autor'=>'Homero',
            'anio_publicacion'=>'-700',
        ]);
        Libro::create([
            'titulo'=>'Don Quijote de la Mancha',
            'autor'=>'Miguel de Cervantes',
            'anio_publicacion'=>'1605',
        ]);
        Libro::create([
            'titulo'=>'El principito',
            'autor'=>'ntoine de Saint-Exupery',
            'anio_publicacion'=>'1943',
        ]); */

        $libros = Libro::all();

        return view('libros.index', compact('libros'));
    }
}
