<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	// menampilkan halaman menu admin 
	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');
	Route::get('tables', [BeasiswaController::class, 'tables'])->name('tables');

	Route::get('edit/{id}', [PublicController::class, 'edit'])->name('beasiswa.edit');
	Route::put('edit/{id}', [PublicController::class, 'update'])->name('beasiswa.update');
	Route::delete('delete/{id}', [PublicController::class, 'destroy'])->name('beasiswa.destroy');

	// Route::get('beasiswa/{beasiswa}/edit', [BeasiswaController::class, 'edit'])->name('beasiswa.edit');
	// Route::put('beasiswa/{beasiswa}', [BeasiswaController::class, 'update'])->name('beasiswa.update');
	// Route::delete('beasiswa/{beasiswa}', [BeasiswaController::class, 'destroy'])->name('beasiswa.destroy');





	// end

	// logout admin dan user
	Route::get('/logout', [SessionsController::class, 'destroy']);
	// end

	// login
	Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});
// end

// menuju halaman dashboard admin
Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware('role:admin')->name('dashboard');
// end
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('role:admin')->name('dashboard');

// menuju halaman register dan login
Route::get('/signup', function () {
	return view('auth.register');
});

Route::get('/login', function () {
	return view('auth/login');
})->name('login');
// end

// menuju halaman user
Route::get('/', [App\Http\Controllers\PublicController::class, 'awal'])->name('awal');
Route::get('/about', [App\Http\Controllers\PublicController::class, 'about'])->name('about');
Route::middleware('auth')->get('/menu', [App\Http\Controllers\PublicController::class, 'menu'])->name('menu');
Route::get('/tips', [App\Http\Controllers\PublicController::class, 'tips'])->name('tips');
Route::get('/detail', [App\Http\Controllers\PublicController::class, 'detail'])->name('detail');
Route::get('/motivasi', [App\Http\Controllers\PublicController::class, 'motivasi'])->name('motivasi');
Route::get('/s1', [App\Http\Controllers\PublicController::class, 's1'])->name('s1');
Route::get('/s2', [App\Http\Controllers\PublicController::class, 's2'])->name('s2');
Route::get('/s3', [App\Http\Controllers\PublicController::class, 's3'])->name('s3');
Route::get('/detail-tips', [App\Http\Controllers\PublicController::class, 'detail_tips'])->name('detail-tips');
Route::get('/detail-motivasi', [App\Http\Controllers\PublicController::class, 'detail_motivasi'])->name('detail-tips');
Route::get('/detail-s1', [App\Http\Controllers\PublicController::class, 'detail_s1'])->name('detail-tips');
Route::get('/detail-s2', [App\Http\Controllers\PublicController::class, 'detail_s2'])->name('detail-tips');
Route::get('/detail-s3', [App\Http\Controllers\PublicController::class, 'detail_s3'])->name('detail-tips');
Route::get('/profile', [App\Http\Controllers\PublicController::class, 'profile'])->name('profile');
Route::get('/simpan', [App\Http\Controllers\PublicController::class, 'simpan'])->name('simpan');
Route::get('/add', [App\Http\Controllers\PublicController::class, 'add'])->name('simpan');
// Contoh definisi rute untuk 'add' dan 'beasiswa.store'

Route::get('/detail/{id}', [PublicController::class, 'detail_beasiswa'])->name('detail');

Route::get('/add', [BeasiswaController::class, 'create'])->name('beasiswa.create');
Route::post('/add', [BeasiswaController::class, 'store'])->name('beasiswa.store');

Route::get('/keep', [App\Http\Controllers\PublicController::class, 'keep'])->name('simpan');
// end

// autentikasi login dan register
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
	return view('dashboard');
})->middleware('auth');
// end

// profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
// end

// sign in google
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('google.callback');
// end

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// rating
// web.php

Route::middleware(['auth'])->group(function () {
    Route::post('/beasiswa/{beasiswa}/rate', [BeasiswaController::class, 'storeRating'])->name('beasiswa.rate');
    Route::post('/beasiswa/{beasiswa}/comment', [BeasiswaController::class, 'storeComment'])->name('beasiswa.comment');
});

Route::put('/beasiswa/{beasiswa}/save-bookmark', [BeasiswaController::class, 'saveBookmark'])->name('saveBookmark');
Route::get('/beasiswa/{beasiswa}/remove-bookmark', [BeasiswaController::class, 'removeBookmark'])->name('removeBookmark');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');

