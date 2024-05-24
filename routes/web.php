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
    return view('index');
})->name('portal');
Route::get('/aa', function () {
    return view('advice');
});
Route::get('/scholar', function () {
    return view('scholar');
})->name('indeax_scholar');


Route::get('/person/personnel', function () {
    return view('person.personnel');
})->name('persontopersonnel');

Route::get('/person/student', function () {
    return view('person.student');
})->name('persontostudent');



Route::get('/journalall/journal', function () {
    return view('journalall.journal');
})->name('journalalltojournal');

Route::get('/journalall/conference', function () {
    return view('journalall.conference');
})->name('journalalltoconference');



Route::get('/compare/university', function () {
    return view('compare.university');
})->name('comparetouniversity');

Route::get('/question', function () {
    return view('estimate/question');
});


Route::get('/error', function () {
    return view('errorpage');
})->name('errorpage');