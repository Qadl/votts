<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Register;
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
    return view('layouts.app');
});

Route::get('/c', function () {
    return view('welcome');
});



Route::get('/aa', function () {
    return view('aa');
})->name('vot');

Route::get('/b', function () {
    return view('b');
})->name('cand');



Route::post('/cand_reg', [Register::class, 'signup'])->name('signup');




Route::get('/cand_reg', function () {
    return view('layouts.reg');
})->name('reg');

Route::get('/addinfo', function () {
    return view('layouts.addInfo');
})->name('addInfo');

Route::post('/addinfo', [Register::class, 'addInfo'])->name('addInfo');



Route::get('/cand_login', function () {
    return view('layouts.login');
});

Route::post('/cand_login', [Register::class, 'login'])->name('login');

Route::get('/secret', function () {
    return view('layouts.secret');
})->name('secret');

Route::post('/secret', [Register::class, 'addKey'])->name('secret');


Route::get('/upload', function () {
    return view('layouts.snap');
})->name('snap');

Route::get('/ed/{id}', function () {
    return view('layouts.edd');
})->name('edd');


Route::post('/upload', [Register::class, 'snap'])->name('snap');


//DASHBOARD
Route::get('/dashboard', [Dashboard::class, 'dashb'])->middleware('auth')->name('dashboard');


Route::get('/dashboard/profile', [Dashboard::class, 'prof'])->middleware('auth')->name('profile');




//VOTER
Route::get('voter_reg', function () {
    return view('voter.reg');
})->name('signup');


Route::post('voter_reg', [Register::class, 'signup'])->name('signup');

Route::get('voter_log', function () {
    return view('voter.login');
});

Route::get('voter_log', function () {
    return view('voter.login');
});

Route::get('/c/{slug}/{id}', [Dashboard::class, 'fvprof']);

Route::get('/voting/{id}', [Dashboard::class, 'fv'])->name('voting');

Route::post('/voting/{id}', [Register::class, 'vv'])->name('votings');




Route::get('voter_dashboard', [Dashboard::class, 'dashv'])->middleware('auth')->name('dashv');


Route::get('voter_secret', function () {
    return view('voter.secret');
})->name('secretv');


Route::post('voter_secret', [Register::class, 'vKey'])->name('secretv');
