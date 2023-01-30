<?php

use App\Http\Controllers\Document\DocumentController;
use App\Http\Controllers\Student\StudentController;
use App\Models\Document;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Ramsey\Uuid\Uuid;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome', ['totalStudent' => count(Student::all()), 'totalDocument' => count(Document::all())]);
});

Route::resource('student', StudentController::class);
Route::resource('document', DocumentController::class);