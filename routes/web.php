<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Regresar una vista
//              ruta      vista
Route::view('welcome', 'welcome');

//Regresa un texto (mensaje)
Route::get('texto', function () {
    return 'Soy un texto';
});


Route::resource('pages', PagesController::class); //Crea 7 rutas en el  


/*
crea solo el controlador:

    php artisan make:controller PagesController --resource

crea el controlador con el modelo:

    php artisan make:controller PagesController --resource --model Pages


*/