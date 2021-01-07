<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;

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

Route::prefix(config('app.admin_prefix'))->group(function () // sample 'admin'
{
	Auth::routes(['register' => false]);

	Route::middleware(['auth'])->group(function () {
		Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

		// change password
		Route::get('profile/change-password', [ProfileController::class, 'changePasswordForm'])
			->name('change-password.show');
    	Route::post('profile/change-password', [ProfileController::class, 'changePassword'])
    		->name('change-password');

		Route::resource('users', UserController::class);
	});
});


