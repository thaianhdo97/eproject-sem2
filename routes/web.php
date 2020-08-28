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


//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


<<<<<<< HEAD
Route::get('/test', function (){
   return view(('admin.business'));
=======
Route::get('/test', function () {
    return view(('layout.admin-layout'));
>>>>>>> 9fcefc60d6a618e3e30b298fb6cf18c4495b7de6
});

// admin route
Route::get('/admin', 'ControllerByAdmin@adminHome');
Route::get('/admin/customers', 'ControllerByAdmin@listCustomers');


Route::get('/admin/tourGuides', 'ControllerByAdmin@listTourGuides');

Route::get('/admin/tourGuides', 'ControllerByAdmin@listTourGuides');

Route::get('/admin/areas', 'ControllerByAdmin@listAreas');


//route to navigate the web site
Route::get("/", "CustomerPageController@index");
Route::get("/about", "CustomerPageController@about");
Route::get("/login", "CustomerPageController@login");
Route::get("/register", "CustomerPageController@register");
Route::get("/contact", "CustomerPageController@contact");

//test mail
Route::get('/test', 'ControllerByAdmin@sendMail');


// Login & register
//Route::get('/login', 'AccountController@login');
//Route::post('/login', 'AccountController@processLogin');
//Route::get('/register', 'AccountController@register');
//Route::post('/register', 'AccountController@processRegister');

