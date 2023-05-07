<?php

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
    return view('home', ['name' => 'riyan', 'role' => 'admin']);
});

// Route::get('/about', function () {
//     return view('about', ['name' => 'riyan', 'phone' => '0812xxxxx']`);
// });

Route::view('/about', 'about', ['name' => 'riyan', 'phone' => '0812xxxxx']);

// route with paramater
Route::get('/product/{id}', function ($id) {
    return view('product.detail', ['id' => $id]);
});

// lebih mudah menggunakan prefix (pengelompokan url)
// Route::get('admin/profile-admin', function () {
//     return ('profile admin');
// });

// Route::get('admin/about-admin', function () {
//     return ('about admin');
// });

// Route::get('admin/contact-admin', function () {
//     return ('contact admin');
// });


// berikut penggunakan prefix 
Route::prefix('administrator')->group(function () {
    Route::get('/profile admin', function () {
        return ('profile admin');
    });

    Route::get('/about-admin', function () {
        return ('about admin');
    });

    Route::get('/contact-admin', function () {
        return ('contact admin');
    });
});
