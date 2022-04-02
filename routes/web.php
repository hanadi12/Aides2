<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserhomeController;
use App\Http\Controllers\AdminController;
// ADD
use App\Http\Controllers\AddController;
use App\Http\Controllers\AddbooksController;
use App\Http\Controllers\AddclothesController;
use App\Http\Controllers\AddfurnituresController;
use App\Http\Controllers\AddmedicationsController;
// SEARCH
use App\Http\Controllers\SearchbooksController;
use App\Http\Controllers\SearchclothesController;
use App\Http\Controllers\SearchfurnituresController;
use App\Http\Controllers\SearchmedicationsController;

use App\Http\Controllers\SearchController;




use App\Models\book;
use App\Models\clothes;
use App\Models\furnitures;
use App\Models\medications;


# Book routes
Route::get('addbooks' ,[AddbooksController::class, 'index']);
Route::post('addbooks' ,[AddbooksController::class,'store']);
# Clothes routes
Route::get('addclothes' ,[AddclothesController::class, 'index']);
Route::post('addclothes' ,[AddclothesController::class,'store']);
# Furnitures routes
Route::get('addfurnitures' ,[AddfurnituressController::class, 'index']);
Route::post('addfurnitures' ,[AddfurnituresController::class,'store']);
# Medications routes
Route::get('addmedications' ,[AddmedicationsController::class, 'index']);
Route::post('addmedications' ,[AddmedicationsController::class,'store']);



//Admin
    // user
Route::get('/users', [AdminController::class, 'user']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
Route::get('card', [AdminController::class, 'card']);



    // book
Route::get('/books', [AdminController::class, 'book']);
Route::get('/deletebooks/{id}', [AdminController::class, 'deletebooks']);

    //clothes
Route::get('/clothes', [AdminController::class, 'clothes']);
Route::get('/deleteclothes/{id}', [AdminController::class, 'deleteclothes']);

    //furnitures
Route::get('/furnitures', [AdminController::class, 'furnitures']);
Route::get('/deletefurnitures/{id}', [AdminController::class, 'deletefurnitures']);

    //medications

    Route::get('/medications', [AdminController::class, 'medications']);
    Route::get('/deletemedications/{id}', [AdminController::class, 'deletemedications']);

Route::get('/adminhome', [AdminController::class, 'index']);


//home
Route::get('redirects', [HomeController::class, 'redirects']);
Route::get('/', [HomeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('contact',[HomeController::class,'aff']);
Route::get('about',[HomeController::class,'afff']);
// ADD
Route::get('add', [UserhomeController::class, 'add']);
Route::get('addbooks', [AddController::class, 'addbooks']);
Route::get('addclothes', [AddController::class, 'addclothes']);
Route::get('addfurnitures', [AddController::class, 'addfurnitures']);
Route::get('addmedications', [AddController::class, 'addmedications']);


// SEARCH
Route::get('search', [UserhomeController::class, 'search']);
Route::get('searchbooks', [SearchController::class, 'searchbooks']);
Route::get('searchclothes', [SearchController::class, 'searchclothes']);
Route::get('searchfurnitures', [SearchController::class, 'searchfurnitures']);
Route::get('searchmedications', [SearchController::class, 'searchmedications']);
Route::get('userhome', [UserhomeController::class, 'display']);

Route::get('displayBooks', [SearchbooksController::class, 'index']);
Route::get('displayClothes', [SearchclothesController::class, 'index']);
Route::get('displayFurnitures', [SearchfurnituresController::class, 'index']);
Route::get('displayMedications', [SearchmedicationsController::class, 'index']);













Route::get('/home', [UserhomeController::class, 'home']);
// Route::get('/userhome', [UserhomeController::class, 'userhome']);
Route::get('/home', [UserhomeController::class, 'home']);
Route::get('/reset-password', [UserhomeController::class, 'resetpassword']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/virtualReality', [UserhomeController::class, 'virtualReality']);
Route::get('/show', [UserhomeController::class, 'show']);






