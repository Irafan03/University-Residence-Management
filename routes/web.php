<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});
