<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsuarioController;

//URL Index
Route::view('/', 'index')->name('index');
//URL Product
Route::view('/products', 'productos')->name('products');
//URL Brands
Route::view('/brands', 'marcas')->name('brands');
//URL AboutUs
Route::view('/aboutus', 'aboutus')->name('aboutus');
//URL Product Form
Route::view('/productForm', 'productForm')->name('productForm');
//URL LogIn
Route::view('/login', 'login')->name('login');
//URL SignUp
Route::view('/signup', 'signUp')->name('signUp');



Route::get('/addProduct', [ProductController::class, 'create']);
Route::get('/productList', [ProductController::class, 'index']);

Route::get('/login', [UsuarioController::class, 'index']);
Route::get('/signup', [UsuarioController::class, 'create']);



// Route::get('brands', fn() => view('marcas')) -> name ('brands');

/* Route::get('/', function () {
    return view('welcome');
});
*/