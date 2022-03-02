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
    $links = [
        "home" => "/",
        "about" => "/about",
        "contacts" => "/contacts",
    ];
    return view('home', ['name' => 'Word'], ['links' => $links]);
});

Route::get('/about', function () {
    $data = [
        "name" => "Cezar",
        "surname" => "Lantos",
        "mail" => "cezar@yahoo.com",
    ];
    $links = [
        "home" => "/",
        "about" => "/about",
        "contacts" => "/contacts",
    ];

    return view('about', $data, ['links' => $links]);
});

Route::get('/contacts', function () {
    $contacts = [
        "parents" => [
            "Mimmo",
            "Pasquale",
            "Zio Enzo",
            "Zia Concetta",
            "Mario",
            "Pluto",
        ]
    ];
    $links = [
        "home" => "/",
        "about" => "/about",
        "contacts" => "/contacts",
    ];

    return view('contacts', $contacts, ['links' => $links]);
});
