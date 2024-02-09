<?php

use Illuminate\Support\Facades\Route;

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
    $welcome = 'Hello World!';

    return view('home', compact('welcome'));
})->name('homepage');

Route::get('/about_us', function () {
    $class = 'La classe #113 è composta da:';
    $students = [
        'Agostino Rossi', 'Mario Agazzi', 'Luisa Mari', 'Antonio Monti'
    ];
    return view('students', compact('class','students'));
})->name('students');

Route::get('/files', function () {
    $documents = 'In futuro i documenti verranno aggiunti in questa sezione:';

    return view('documents', compact('documents'));
})->name('documents');
