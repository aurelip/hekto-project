<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ItemController;
use Illuminate\Routing\RouteRegistrar;

use function PHPUnit\Framework\returnSelf;

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
//     return view('index');
// });
Route::get('/', [ItemController::class,'index']);
// Route::get('/homepage' , 'ItemController@index')->name('Items');
// Route::get('/homepage' , 'ItemController@index');


// Route::get('/', function () {
//     return view('homepage');
// });
Route::get('/shoplist', function () {
    return view('shoplist');
});
Route::get('/shopgrid', function () {
    return view('shopgrid');
});
Route::get('/ordercompleted', function () {
    return view('ordercompleted');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contactpage' , function () {
    return view('contactpage');
});
Route::get('/login' , function () {
    return view('login');
});
Route::get('/register' , function () {
    return view('register');
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('/search' , [ItemController::class, 'search'])->name('search');