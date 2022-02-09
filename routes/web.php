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

Route::get('/', function () {

    // Comics 
    $comics_array = config('comics');

    // Pre Footer Items 
    $pre_footer_items = [
        [
            'img_src' => 'comics-digital-comics.png',
            'text' => 'digital comics'
        ],
        [
            'img_src' => 'comics-merchandise.png',
            'text' => 'dc merchandise'
        ],
        [
            'img_src' => 'comics-subscriptions.png',
            'text' => 'subscription'
        ],
        [
            'img_src' => 'comics-shop-locator.png',
            'text' => 'comic shop locator'
        ],
        [
            'img_src' => 'dc-power-visa.svg',
            'text' => 'dc power visa'
        ],
    ];

    $data = [
        'comics' => $comics_array,
        'items' => $pre_footer_items
    ];
    
    return view('home', $data);
})->name('home');
