<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('/blog', 'BlogController', 
[
    'names' => [
        'index'     => 'blog.index',
        'create'    => 'blog.create',
        'store'     => 'blog.store',
        'show'      => 'blog.show',
        'edit'      => 'blog.edit',
        'update'    => 'blog.update',
        'destroy'   => 'blog.destroy'
    ]
]);

Route::resource('/volunteer', 'VolunteerController', 
[
    'names' => [
        'index'     => 'vol.index',
        'create'    => 'vol.create',
        'store'     => 'vol.store',
        'show'      => 'vol.show',
        'edit'      => 'vol.edit',
        'update'    => 'vol.update',
        'destroy'   => 'vol.destroy'
    ]
]);

Route::get('/gallery', function () {
    return view('other.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('other.contact');
})->name('contact');


Route::get('/about', function () {
    return view('other.about');
})->name('about');

Route::get('/volunteer', function () {
    return view('other.volunteer');
})->name('about');

Route::get('/admin', function() {
    return view('admin.home');
})->name('admin');
