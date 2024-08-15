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
    return view ('Home', [
        "title" => "Home"
    ]);
});

Route::get('/layanankami/coaching', function () {
    return view('Layanan_Kami.Coaching', [
        "title" => "Coaching"
    ]);
});

Route::get('/layanankami/counseling', function () {
    return view('Layanan_Kami.Counseling', [
        "title" => "Counseling"
    ]);
});

Route::get('/layanankami/mentoring', function () {
    return view('Layanan_Kami.Mentoring', [
        "title" => "Mentoring"
    ]);
});

Route::get('/layanankami/analisisDataStatistik', function () {
    return view('Layanan_Kami.AnalisisDataStatistik', [
        "title" => "AnalisisDataStatistik"
    ]);
});

Route::get('/TesPsikolog', function () {
    return view ('TesPsikolog', [
        "title" => "TesPsikolog"
    ]);
});

Route::get('/Blog', function () {
    return view ('Blog', [
        "title" => "Blog"
    ]);
});

Route::get('/About', function () {
    return view ('About', [
        "title" => "About"
    ]);
});