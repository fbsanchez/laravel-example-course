<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('/hola', function () {
    return view('hola');
})->name('hola');

Route::get('/fecha', function () {
    $now = Carbon::now();
    return view('fecha', ['now' => $now]);
})->name('fecha');

Route::match(['GET', 'POST'], '/edad', function (Request $request) {
    $now = Carbon::now()->format('Y-m-d');
    $submitted = (bool) $request->input('fecha');
    $fecha = Carbon::parse($request->input('fecha'));
    $years = $fecha->diffInYears(Carbon::now());
    $months = $fecha->diffInMonths(Carbon::now()) % 12;
    $days = $fecha->diffInDays(Carbon::now()) % 31;


    return view('edad', [
        'now' => $now,
        'submitted' => $submitted,
        'fecha' => $fecha->format('d-m-Y'),
        'years' => $years,
        'days' => $days,
        'months' => $months,
    ]);
})->name('edad');

Route::match(['GET', 'POST'], '/cumple', function (Request $request) {
    $now = Carbon::now();
    $submitted = (bool) $request->input('cumple');
    $fecha = Carbon::parse($request->input('cumple'));
    $next = Carbon::parse($fecha->format('Y-m-d'));
    $next = Carbon::parse($next->year(now()->format('Y'))->format('Y-m-d'));
    $age = $fecha->diffInYears(Carbon::now());

    $birthday_day = $next->format('d-m-Y');
    $birthday_day_of_week = $fecha;
    $daysleft = $next->diffInDays(Carbon::now());
    return view('cumple', [
        'now' => $now->format('Y-m-d'),
        'submitted' => $submitted,
        'fecha' => $fecha->format('Y-m-d'),
        'age' => $age,
        'birthday_day' => $birthday_day,
        'daysleft' => $daysleft,
        'day_of_week' => $birthday_day_of_week,
    ]);
})->name('cumple');
