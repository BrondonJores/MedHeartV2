<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recuperation_compte_controller;

Route::view('/', 'login')->name("Connection à MedHeart");

Route::prefix('/recuperation')->name("Récuperation")->controller(Recuperation_compte_controller::class)->group(function () {
    Route::get('/', 'index')->name(" de compte");

    Route::post('/', 'store')->name("compte.recup");
});

Route::get("/test", function () {
    return view("testView");
});




Route::resource("/recuperation_compte_controller", Recuperation_compte_controller::class);
