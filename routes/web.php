<?php

use App\Http\Controllers\ProjectController;
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
    return view('pages.home');
})-> name("home");

Route::get('/about', function () {
    return view('pages.about');
})-> name("about");

Route::get('/skills', function () {
    return view('pages.skills');
})-> name("skills");

Route::get('/tech-watch', function() {
    return view('pages.techWatch');
})->name("tech-watch");


Route::get('/projects', [ProjectController::class, 'index']) ->name('projects');
Route::get('/projects/{slug}', [ProjectController::class, 'show']) ->name('project');