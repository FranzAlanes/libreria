<?php
use Illuminate\Support\Facades\Route;
use App\Models\Libro;
/*
|--------------------------------------------------------------------------
| Rutas anteriores del curso
|--------------------------------------------------------------------------
*/
Route::get('/hola', function () {
    return 'Hola desde Laravel';
});
Route::get('/inicio', function () {
    return 'Bienvenido a la página de inicio';
});
Route::get('/contacto', function () {
    return 'Página de contacto';
});
Route::get('/productos', function () {
    return 'Página de productos';
});
/*
|--------------------------------------------------------------------------
| LIBRERÍA EL LÁPIZ
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| GET /libros
| Mostrar todos los libros
|--------------------------------------------------------------------------
*/
Route::get('/libros', function () {
    $libros = Libro::all();
    return view('libros.lista', compact('libros'));
});
/*
|--------------------------------------------------------------------------
| GET /libros/nuevo
| Mostrar formulario
|--------------------------------------------------------------------------
*/

Route::get('/libros/nuevo', function () {
    return view('libros.nuevo');
});
/*
|--------------------------------------------------------------------------
| POST /libros/nuevo
| Guardar nuevo libro
|--------------------------------------------------------------------------
*/
Route::post('/libros/nuevo', function () {
    /*
    |--------------------------------------------------------------------------
    | VALIDACIÓN
    |--------------------------------------------------------------------------
    */
    request()->validate(
        [
            'titulo' => 'required',
            'precio' => 'required|integer',
        ],
        [
            'titulo.required' => 'Falta el título del libro.',
            'precio.required' => 'Falta el precio del libro.',
            'precio.integer' => 'Ese precio no es un número entero.',
        ]
    );
    /*
    |--------------------------------------------------------------------------
    | GUARDAR EN LA BASE DE DATOS
    |--------------------------------------------------------------------------
    */
    Libro::create([
        'titulo' => request()->input('titulo'),
        'precio' => request()->input('precio'),
    ]);
    /*
    |--------------------------------------------------------------------------
    | REDIRECCIÓN
    |--------------------------------------------------------------------------
    */
    return redirect('/libros');
});