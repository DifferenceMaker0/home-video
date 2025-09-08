<?php 
// If modifications are desired to the Fortify routing/params.... the file is published in routes and the modified routing should be included.  I'm not sure the entire file needs included but it was described as such.
// include_once 'fortify.php';

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\HomeController;
use Fortify\Fortify;

Route::get('/users/{user}', function (User $user) {
    return $user->email;
    // return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/reset-password/{token}', [App\Http\Controllers\HomeController::class, 'index'])->name('password.reset'); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
