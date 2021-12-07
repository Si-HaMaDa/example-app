<?php

// use Illuminate\Support\Facades\Route;

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
Route::view('/', 'welcome');

Route::get('/posts', [App\Http\Controllers\MainController::class, 'main']);

Route::get('/articals', function () {
    return view('articals');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/main/{id}', function ($id) {
    return view('main')->with('key', $id);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::group(['prefix' => 'user', 'middleware' => 'auth', 'as' => 'user.'], function () {

    Route::get('user/dash', function () {
        return 'dash';
        return view('main');
    })->name('user.home');

    Route::get('client/account', function () {
        return 'account';
        return view('main');
    })->name('account');

    Route::get('user/{id}', function ($id) {
        return view('main')->with('key', $id);
    })->whereNumber('id')->name('profile');

});

Route::get('info', [App\Http\Controllers\MainController::class, 'info']);
Route::post('info', [App\Http\Controllers\MainController::class, 'infoPost']);
