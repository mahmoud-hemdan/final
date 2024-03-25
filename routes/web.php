<?php

use Illuminate\Support\Facades\Auth;
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
//HomePage
Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('homepage');
//MenuPage
Route::get('/menu', function () {
    return view('menu');
})->name('menu')->middleware('auth');
//AboutPage
Route::get('/about', function () {
    return view('about');
})->name('about')->middleware('auth');
//ReservationPage
Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation')->middleware('auth');
//StuffPage
Route::get('/stuff', function () {
    return view('stuff');
})->name('stuff')->middleware('auth');
//GalleryPage
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery')->middleware('auth');
//BlogPage
Route::get('/blog', function () {
    return view('blog');
})->name('blog')->middleware('auth');
//BlogdetailsPage
Route::get('/blogdetails', function () {
    return view('blogdetails');
})->name('blogdetails')->middleware('auth');
//ContactPage
Route::get('/contact', function () {
    return view('contact');
})->name('contact')->middleware('auth');


//home
Route::get('/home', 'HomeController@index')->name('home')->middleware('ChickAdmin');
//savetable

Route::post('/savetable','ReservationController@store')->name('savetable');
//message
Route::post('/message','MessageController@update')->name('message');
//comment
Route::post('/savecallme','CallmeController@edit')->name('savecallme');
//customers
Route::get('/customers','CustomersController@index')->name('customers');
//customer.show
Route::get('/customer/show/{id}','CustomersController@show')->name('customer.show');
//customer.delete
Route::get('/customer/delete/{id}','CustomersController@delete')->name('customer.delete');
//customer.create
Route::get('/customer/create','CustomersController@create')->name('customer.create');
Route::post('/customer/savenew','CustomersController@savenew')->name('customer.savenew');
//customer.edit
Route::get('/customer/edit/{id}','CustomersController@edit')->name('customer.edit');
Route::post('customer/saveupdate','CustomersController@store')->name('customer.saveupdate');

//products
Route::get('/products','ProdustController@index')->name('products');

//produst.show
Route::get('/produst/show/{id}','ProdustController@show')->name('produst.show');
//produst.delete
Route::get('/produst/delete/{id}','ProdustController@delete')->name('produst.delete');
//productcreate
Route::get('/produst/create','ProdustController@create')->name('produst.create');
Route::post('/product/savenew','ProdustController@store')->name('product.savenew');
//produst.edit
Route::get('/produst/edit/{id}','ProdustController@edit')->name('produst.edit');

Route::post('produst/saveupdate','ProdustController@update')->name('produst.saveupdate');

//Reservations
Route::get('/Reservations/view','ReservationController@index')->name('Reservations.view');
//Reservations.show
Route::get('/Reservations/show/{id}','ReservationController@show')->name('Reservations.show');
//Reservations.delete
Route::get('/Reservations/delete/{id}','ReservationController@delete')->name('Reservations.delete');

//comments.view
Route::get('/comments/view','MessageController@index')->name('comments.view');

//comments.show 
Route::get('/comments/show/{id}','MessageController@show')->name('comments.show');

//comments.delete
Route::get('/comments/delete/{id}','MessageController@delete')->name('comments.delete');

//Contact.view
Route::get('/Contact/view','CallmeController@index')->name('Contact.view');
//Contact.show
Route::get('/Contact/show/{id}','CallmeController@show')->name('Contact.show');
//Contact.delete
Route::get('/Contact/delete/{id}','CallmeController@delete')->name('Contact.delete');

//order
Route::get('/order','OrderController@index')->name('order');
Route::get('/order/show/{id}','OrderController@show')->name('order.show');
Route::get('/order/delete/{id}','OrderController@delete')->name('order.delete');

Route::get('/order/edit/{id}','OrderController@edit')->name('order.edit');
Route::post('/order/saveupdate','OrderController@update')->name('order.saveupdate');

Route::get('/order/create','OrderController@create')->name('order.create');
Route::post('/order/savenew','OrderController@store')->name('order.savenew');

//order_customer
Route::get('/order_customer/create','Order_Customer_pivot@index')->name('order_customer.create');

Route::get('/order_customer/view','Order_Customer_pivot@view')->name('order_customer.view');


Route::post('/order_customer/savenew','Order_Customer_pivot@store')->name('order_customer.savenew');
Route::get('/order_customer/delete/{id}','Order_Customer_pivot@delete')->name('order_customer.delete');
Route::get('/order_customer/show/{id}','Order_Customer_pivot@show')->name('order_customer.show');

