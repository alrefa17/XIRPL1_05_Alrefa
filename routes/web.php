<?php
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view ('Home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "nama" => "Alrefa Putri Maeruli",
        "email" => "alrefa@smktelkom-pwt.sch.id",
        "gambar" => "AlrefaPutri.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return view ('Gallery', [
        "title" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);
