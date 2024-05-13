<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PetController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\Auth\Admin\LoginAdminController;
use App\Http\Controllers\Auth\Admin\ResetPasswordAdminController;
use App\Http\Controllers\Auth\Admin\ForgotPasswordAdminController;

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

// Route::get('/', function () {
//     return view('home');
// });

/*****************************
 * PAGES ROUTES
 ****************************/
Route::get('/', [PageController::class, 'index'])->name('page.home');
Route::get('/sobre', [PageController::class, 'sobre'])->name('page.sobre');
Route::get('/contato', [PageController::class, 'contato'])->name('page.contato');
Route::get('/busca/abrigos', [PageController::class, 'shelters'])->name('page.shelters');
Route::get('/voluntarios', [PageController::class, 'voluntaries'])->name('page.voluntaries');
Route::get('/termos-de-uso', [PageController::class, 'terms'])->name('page.terms');



// People Routes
Route::get('/cadastro/pessoas', [PersonController::class, 'create'])->name('person.create');
Route::post('/cadastro/pessoas', [PersonController::class, 'store'])->name('person.store');
Route::get('/busca/pessoas', [PersonController::class, 'index'])->name('person.index');


// Pet Routes
Route::get('/cadastro/animais', [PetController::class, 'create'])->name('pet.create');
Route::post('/cadastro/animais', [PetController::class, 'store'])->name('pet.store');
Route::get('/busca/animais', [PetController::class, 'index'])->name('pet.index');
Route::get('/doacao/animais', [PetController::class, 'donation'])->name('pet.donation');


/***************************
 * ADMIN ROUTES
 **************************/
Route::get('admin', [LoginAdminController::class, 'index'])->name('admin.home')->middleware("auth:web");
Route::get('admin/login', [LoginAdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [LoginAdminController::class, 'handleLogin'])->name('admin.handleLogin');
Route::get('admin/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');
Route::get('admin/forget-password', [ForgotPasswordAdminController::class, 'getEmail'])->name('admin.forget.pasword');
Route::post('admin/forget-password', [ForgotPasswordAdminController::class, 'postEmail'])->name('admin.forget.pasword.post');
Route::get('admin/reset-password/{token}', [ResetPasswordAdminController::class, 'getPassword']);
Route::post('admin/reset-password', [ResetPasswordAdminController::class, 'updatePassword']);


Route::middleware('auth:web')->group(function () {

/*************************
 * USER ROUTES
 *************************/
Route::get('admin/user', [UserController::class, 'index'])->name('admin.user.index');
Route::get('admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::post('admin/user/store', [UserController::class, 'store'])->name('admin.user.store');
Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('admin/user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
Route::get('admin/user/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');


// Person Routes
Route::get('admin/person', [PersonController::class, 'index'])->name('admin.person.index');
Route::get('admin/person/create', [PersonController::class, 'create'])->name('admin.person.create');
Route::post('admin/person/store', [PersonController::class, 'store'])->name('admin.person.store');
Route::get('admin/person/edit/{id}', [PersonController::class, 'edit'])->name('admin.person.edit');
Route::put('admin/person/update/{id}', [PersonController::class, 'update'])->name('admin.person.update');
Route::get('admin/person/delete/{id}', [PersonController::class, 'destroy'])->name('admin.person.delete');


// Pet Routes
Route::get('admin/pet', [PetController::class, 'index'])->name('admin.pet.index');
Route::get('admin/pet/create', [PetController::class, 'create'])->name('admin.pet.create');
Route::post('admin/pet/store', [PetController::class, 'store'])->name('admin.pet.store');
Route::get('admin/pet/edit/{id}', [PetController::class, 'edit'])->name('admin.pet.edit');
Route::put('admin/pet/update/{id}', [PetController::class, 'update'])->name('admin.pet.update');
Route::get('admin/pet/delete/{id}', [PetController::class, 'destroy'])->name('admin.pet.delete');


});

