<?php

use \admin\blogController;
use \admin\pageController;
use \admin\sliderController;
use \admin\corparateController;
use \admin\colorController;
use App\Http\Controllers\admin\defaultController;
use \website\contactController;
// use App\Http\Controllers\website\contactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\admin\blogController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['loginAuth'])->group(function () {
    Route::get('/panel', 'admin\defaultController@index')->name('panelIndex'); //yönetim paneli anasayfası
    Route::get('/panel/settings', 'admin\defaultController@settings')->name('panelSettings'); //setting sayfasına git
    Route::post('/panel/sortable', 'admin\defaultController@settingSortable')->name('settingSortable'); //setting dosyası tablo sıralama
    Route::get('/panel/settings/delete/{id}', 'admin\defaultController@destroy')->name('settingDestroy'); //setting tablo verilerinden delete verisi 1 olanları silme
    Route::get('/panel/settings/edit/{id}', 'admin\defaultController@edit')->name('settingEdit'); // setting tablo verilerini düzenleme
    Route::post('/panel/settings/update/{id}', 'admin\defaultController@editUpdate')->name('editUpdate'); //setting tablo verilerini editleme

});
Route::post('/panel/login', 'admin\defaultController@auth')->name('loginAuth'); //login giriş yapmak için
Route::get('/panel/login', 'admin\defaultController@loginA')->name('loginA'); //login giriş sayfası

//blog sayfaları için 
Route::middleware(['loginAuth'])->group(function () {
    Route::resource('/panel/blog', blogController::class);
    Route::post('/panel/blog/blogsortable', 'admin\blogController@blogSortable')->name('blogSortable'); //blog sayfalarını sıralama
    //Route::post('/panel/blog/blogsortable', [blogController::class, 'blogSortable'])->name('blogSortable'); //blog sayfalarını sıralama bu yöntem çalışmıyor ama bak
});


//yeni sayfalar için
Route::middleware(['loginAuth'])->group(function () {
    Route::resource('/panel/page', pageController::class);
    Route::post('/panel/page/pagesortable', 'admin\pageController@pagesortable')->name('pagesortable'); //blog sayfalarını sıralama
});

//slider için
Route::middleware(['loginAuth'])->group(function () {
    Route::resource('panel/slider', sliderController::class);
    Route::post('/panel/slider/sliderSortable', 'admin\sliderController@sliderSortable')->name('sliderSortable'); //blog sayfalarını sıralama
});
//kurumsal
Route::middleware(['loginAuth'])->group(function () {
    Route::resource('/panel/corparate', corparateController::class);
});
//Galeri
Route::middleware(['loginAuth'])->group(function () {
    Route::get('/panel/gallery', 'admin\galleryController@gallery')->name('panel.gallery'); // Anasayfa
    Route::post('/panel/deleteall', 'admin\galleryController@deleteAll')->name('delete.all'); // Çoklu Resim Silme
    Route::post('/panel/gallery/gallerysortable', 'admin\galleryController@galeriSortable')->name('galeriSortable'); //Resim Sıralama
    Route::post('/panel/galleryCorparate/{pageSlug}/{pageTitle}', 'admin\galleryController@corparate')->name('gallery.corparate'); //Çoklu Resim Ekleme
});
//İletişim
Route::middleware(['loginAuth'])->group(function () {
    Route::get('/panel/contact', 'admin\defaultController@contact')->name('panel.contact');
    Route::post('/panel/contact/update', 'admin\defaultController@contactUpdate')->name('contactUpdate');
});
//color
Route::middleware(['loginAuth'])->group(function () {
    Route::resource('panel/color', colorController::class);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Website için root lar 
Route::get('/', 'website\defaultController@index')->name('Website.Index');
Route::get('/blog', 'website\defaultController@blog')->name('Website.Blog');
Route::get('/blog/{detail}', 'website\defaultController@detail')->name('Blog.Detail');
Route::get('/kurumsal', 'website\aboutController@about')->name('Website.About');
//Contact
Route::resource('/contact', contactController::class);
Route::post('/contact', 'website\contactController@sendMail')->name('contact.mail');
// Route::post('/mailsender', [contactController::class, 'sendMail'])->name('contact.mail');

Route::get('/{page}', 'website\defaultController@page')->name('Website.Page');
