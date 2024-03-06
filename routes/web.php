<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/classe', function () {
    $class = 116;
    $students = [
        'alunno1' => 'Emiliano Gastaldo',
        'alunno2' => 'Emiliano Gastaldo',
        'alunno3' => 'Emiliano Gastaldo',
        'alunno4' => 'Emiliano Gastaldo',
        'alunno5' => 'Emiliano Gastaldo',
        'alunno6' => 'Emiliano Gastaldo',
        'alunno7' => 'Emiliano Gastaldo',
        'alunno8' => 'Emiliano Gastaldo',
    ];
    $data = compact('class', 'students');
    return view('classe.lista_alunni', $data);
})->name('classe');
