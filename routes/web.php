<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Auth;
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

// Welcome
Route::get('/',function() {
    return view('welcome');
});

// Praktik routing
Route::get('/routing', function () {
    return view('routing');
});

// Tugas Bootstrap Clone
Route::get('/bootstrap', function () {
    return view('bootstrap');
});

// 1. Basic Routing (Dia akan menampilkan 'Hello World' Ketika user meng klik basic route pada halaman routing)
Route::get('/basic_routing', function() {
    return 'Hello World';
});

// 2. View Route ()
Route::view('/view_route', 'view_route');
Route::view('/view_route', 'view_route', ['name' => 'DikaYuhuu']);

// 3. Controller Route
Route::get('/controller_route', [RouteController::class, 'index']);

// 4. Redirect Route (Ketika membuka halaman, maka web akan langsung redirect ke halaman /routing)
Route::redirect('/', '/routing');

// 5. Route Parameter
Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Post Id: ".$postId.", Comment Id: ".$commentId;
});

// 6. Optional Parameter
Route::get('username/{name?}', function($name = null) {
    return 'Username: '.$name;
});

// 7. Regular Experesion
Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title','[A-Za-z-_]+'); //saat dibuka web akan menampilkan 404 Not found

// 8. Named Route
Route::get('/profile/{profileId}', [RouteController::class, 'profile'])->name('profileRouteName');

// 9. Priority Route
// Route::get('/route_priority/{input}', function($input) {
//     return "This is Route One";
// }); //Prioritas 1, karena route tersebut dinamis.
Route::get('/route_priority/user', function() {
    return "This is Route 1";
}); //Prioritas 3,
Route::get('/route_priority/user', function() {
    return "This is Route 2";
}); //Prioritas 2, Karena pada dasarnya laravel akan meng eksekusi dari bawah ke atas kecuali terdapat route dinamis

// 10. Fallback Route
Route::fallback(function() {
    return 'This is Fallback Route Cuy';
});

// 11. Group Route
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function() {
        return "This is admin dashboard";
    })->name('dashboard');
    Route::get('/users', function() {
        return "This is user data on admin page";
    })->name('users');
    Route::get('/items', function() {
        return "This is item data on admin page";
    })->name('items');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
