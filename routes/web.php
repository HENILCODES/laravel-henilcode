<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\SingleActionController;
use App\Models\Temp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Print_;

// use Illuminate\Support\Facades\View;

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

Route::get("/", [SimpleController::class, 'sempleFunction']);

Route::get('/single', SingleActionController::class);

Route::get("/inde", [ProductController::class, 'index'])->name('indexRoute');

Route::match(['get', 'post'], '/many', [ProductController::class, 'index']);

// Route::get('/d', function () {
//     return redirect()->route('login');
// });

Route::any("login", function () {
    return view("login");
})->name('login');

//Resource Route call Component Function
Route::resource("product", ProductController::class);
// Route::resource("product", ProductController::class)->only(['show','index']);
// Route::resource("product", ProductController::class)->except(['show','index']);

Route::prefix('tt')->group(function () {
    Route::get("/temp", function () {
        // return to_route('indexRoute');
        return "prifix route";
    });
});

Route::redirect('/sss', '/');

Route::view('new', 'signup', ['title' => 'Henil']);

Route::get("/user/{id}/{name?}", function ($arg, $name = 's') {
    return $arg . " " . $name;
});
Route::fallback(function () {
    return view('Not404');
    // })->withoutMiddleware('auth');
    // })->Middleware('auth');
});

Route::any('/userD', function (Request $request) {

    return "<pre>"  . $request['U_name'] . " ," . $request['U_password'];
});


// Route::get("/customer", function () {
//     $customer = Temp::all();
//     echo "<pre>";
//     print_r($customer->toArray());
// });