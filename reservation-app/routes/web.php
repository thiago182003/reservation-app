<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return redirect()->route('reservations.index');
});

Route::resource('reservations', ReservationController::class);
