<?php
/*
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BookController;
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

//Route::get('/', function () {
//    dd("test");
//    return view('welcome');
//});
/*
Route::get('/',[\App\Http\Controllers\FrontendController::class,'home']);

Route::get('/about',[\App\Http\Controllers\FrontendController::class,'about']);

Route::get('/login',function (){
    return view('user.login');
})->name('login');

Route::post('login/verify',[\App\Http\Controllers\UserController::class,'verifyUser'])->name('login.verification');
Route::get('logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');

Route::get('/backend/dashboard',function (){
    return view('backend.dashboard');
})->name('backend.dashboard')->middleware('auth');

//routes for loading student create form
Route::get('backend/book/create',[BookController::class,'create'])->name('backend.book.create')->middleware('auth');
Route::post('backend/book',[BookController::class,'store'])->name('backend.book.store')->middleware('auth');


Route::get('/backend/setting/create',function (){
    return view('backend.setting.create');
})->name('backend.setting.create');


Route::get('/backend/setting',function (){
    return view('backend.setting.index');
})->name('backend.setting.index');

Route::get('backend/book',[BookController::class,'index'])->name('backend.book.index');


Route::get('backend/book/{id}',[BookController::class,'show'])->name('backend.book.show');
Route::get('backend/book/{id}/edit',[BookController::class,'edit'])->name('backend.book.edit');
Route::put('backend/book/{id}/update',[BookController::class,'update'])->name('backend.book.update');


Route::delete('backend/book/{id}',[BookController::class,'destroy'])->name('backend.book.destroy');

route::get('/user/register',function()
{
    return view('user.register');
})->name('backend.user.register');
Route::post('backend/user/register',[\App\Http\Controllers\UserController::class,'register'])->name('register.verification');

Route::get('/register', [\App\Http\Controllers\UserController::class, 'showRegistrationForm']);
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
*/

/* Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/backend/setting/dashboard', [UserController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/about', [UserController::class, 'userDashboard'])->name('user.dashboard');
}); */ 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact_us', [FrontendController::class, 'contact_us']);
  /* Route::get('/welcome', [FrontendController::class, 'welcome']);  */
 Route::get('/user_home', [FrontendController::class, 'user_home']);
 Route::get('/brances', [FrontendController::class, 'brances']);


/* Route::get('/about', function()
{
    return view('about');
})->name('about'); */

Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::post('login/verify', [UserController::class, 'verifyUser'])->name('login.verification');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/backend/dashboard', [UserController::class, 'dashboard'])->name('backend.dashboard');
    Route::get('/backend/admin-dashboard', [UserController::class, 'adminDashboard'])->name('backend.admin.dashboard');
    Route::get('/backend/user-dashboard', [UserController::class, 'userDashboard'])->name('backend.user.dashboard');

    // Other authenticated routes
    Route::get('backend/book/create', [BookController::class, 'create'])->name('backend.book.create');
    Route::post('backend/book', [BookController::class, 'store'])->name('backend.book.store');
    Route::get('backend/book', [BookController::class, 'index'])->name('backend.book.index');
    Route::get('backend/book/{id}', [BookController::class, 'show'])->name('backend.book.show');
    Route::get('backend/book/{id}/edit', [BookController::class, 'edit'])->name('backend.book.edit');
    Route::put('backend/book/{id}/update', [BookController::class, 'update'])->name('backend.book.update');
    Route::delete('backend/book/{id}', [BookController::class, 'destroy'])->name('backend.book.destroy');
});

route::get('/user/register', function () {
    return view('user.register');
})->name('backend.user.register');
Route::post('backend/user/register', [UserController::class, 'register'])->name('register.verification');

/* Route::post('/upload', 'BookController@store')->name('backend.book.store');
  /*Route::post('/upload', [BookController::class, 'store'])->name('backend.book.store');*/

