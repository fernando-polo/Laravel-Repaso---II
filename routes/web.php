<?php

use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('inicio');
// });

Route::get('/', [controladorVistas::class, 'inicio'])->name('rutaInicio');
Route::get('/RegistroLibros', [controladorVistas::class, 'Registro_Libro'])->name('rutaRegistroLibros');
Route::post('/RegistrarLibro', [controladorVistas::class, 'RegistrarLibro'])->name('rutaRegistrarLibro');



