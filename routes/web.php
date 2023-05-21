<?php

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

Route::prefix('nova')->group(function () {
    Route::get('/abc', function () {
        echo "nova abc 1 ";
    });
    Route::get('/abcd', function () {
        echo "nova abcd 1 ";
    });
    Route::get('/product', function () {
        echo "nova product 1 ";
    });
    Route::get('/user', function () {
        echo "nova user 1 ";
    });

});
// Route::group(['prefix' => 'nova'], function () {
//     Route::group(['prefix' => '/'], function () {
//         Route::any('{all?}', function ($slug = null) {
//             dd($slug,12);
//         })->where(['all' => '.*']);
//     });
// });

// Route::prefix('nova')->group(function () {
//     Route::get('{any}', function () {
//         return redirect('/abc');
//     })->where('any', '.*');
// });

Route::get('/abc', function () {
    echo"roue 1 ";
});
Route::get('/abc', function () {
    echo"roue 2";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
