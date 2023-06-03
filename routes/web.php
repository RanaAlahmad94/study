<?php

use Illuminate\Support\Facades\Route;
use App\Models\Group;

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
    return view('welcome');
});

Route::get('/group/{id}/students',function($id){
    $group = Group::findOrFail($id);
    $group->students;
// Debugbar::info($group->name);
dd($group);
// return view('welcome', $group);
});