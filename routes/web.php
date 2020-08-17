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
//Frontend
Route::get('/', 'FrontendController@home')->name('homepage');

Route::get('/filteritem', 'FrontendController@filteritem')->name('items');

Route::get('detail/{id}', 'FrontendController@detailitem')->name('detailpage');

Route::get('/login', 'FrontendController@login')->name('loginpage');

Route::get('/checkout', 'FrontendController@checkout')->name('checkoutpage');

Route::get('/register', 'FrontendController@register')->name('registerpage');

Route::get('/about', 'FrontendController@about')->name('aboutpage');

Route::get('/profile', 'FrontendController@profile')->name('profilepage');
//End Frontend

Route::resource('/orders','OrderController');


//Backend
Route::middleware(['role:admin'])->group(function (){

Route::get('/dashboard', 'BackendController@dashboard')->name('dashboard');

Route::resource('items','ItemController');
	// get- 4 / post -1 / put -1 / del -1

Route::resource('brands','BrandController');

Route::resource('categories','CategoryController');

Route::resource('subcategories','SubcategoryController');

});

//End Backend




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/getitems', 'FrontendController@getItems')->name('getitems');



