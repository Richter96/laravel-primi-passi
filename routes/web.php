<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'title' => 'Bianchi in strada'
    ];

    return view('home', $data);
})->name('home');


Route::get('/about', function () {
    $data = [
        'title' => 'About history Bianchi ',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat consequatur quis porro laboriosam sed, expedita officia libero repudiandae asperiores itaque, fugiat similique odio, tempora nisi eligendi ipsa id voluptatibus tempore!'

    ];
    return view('about', $data);
})->name('about');

Route::get('/e_bike', function () {
    $data = [
        'title' => 'About history Bianchi ',
        'cards' => [
            'E-OMNIAE',
            'ROADE',
            'GRAVELE',
            'MTBE',
            'TOURERE',
            'URBAN',
        ],

    ];
    return view('e_bike', $data);
})->name('e_bike');
