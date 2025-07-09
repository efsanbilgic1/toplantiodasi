<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingRoomController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', [MeetingRoomController::class, 'index']);

Route::get('/reservations/create', [ReservationController::class, 'create']);
Route::post('/reservations', [ReservationController::class, 'store']);
