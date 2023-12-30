<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\bannerController;

// php -S 127.0.0.1:8000 -t public/
// Php artisan make:controller userController --resource --model=User
// https://generator.email/
// https://yopmail.com/en/email-generator
// https://www.fakenamegenerator.com/  
// https://textrapp.com/free-tools/textr-free-fake-phone-number-generator-tool
// https://www.blindtextgenerator.com/lorem-ipsum

// -------------Static Route--------------

Route::get('/', function () {
    return view('website.index_2');
});
Route::get('/home', function () {
    return view('website.index');
});
Route::get('/login', function () {
    return view('website.login');
});
Route::get('/home_2', function () {
    return view('website.index_2');
});
Route::get('/shop', function () {
    return view('website.shop');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/about', function () {
    return view('website.about');
});
Route::get('/cart', function () {
    return view('website.cart');
});
Route::get('/checkout', function () {
    return view('website.checkout');
});
Route::get('/news', function () {
    return view('website.news');
});

Route::get('/add_house',[houseController::class,'add_house']);  
Route::post('/add_contact',[contactController::class,'store']);
Route::get('/manage_house',[houseController::class,'alldata']);
Route::get('/delete_house/{id}',[houseController::class,'destroy']);
Route::get('/house_about/{id}',[houseController::class,'house_about']);
Route::get('/house',[houseController::class,'house']);
 



// -=-=-=-=-=-=-=-=-=-=-=-=-=-=ADMIN=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

    // HOME
Route::get('/index', function () {
    return view('admin.view.index');
});

    // CONTACT
Route::get('/contact_list',[contactController::class,'contact_list']);

    // BANNER
Route::get('/banner_addedit', function () {
    return view('admin.banner.banner_addedit');
});
Route::get('/banner_list', function () {
    return view('admin.banner.banner_list');
});
Route::get('/banner_list',[bannerController::class,'banner_list']);

Route::post('/banner_submit', [bannerController::class, 'store'])->name('banner_submit');
// Route::post('/banner_modal_submit', [bannerController::class, 'store'])->name('banner_modal_submit');

    // LOGIN
Route::get('/login', function () {
    return view('admin.view.login');
});