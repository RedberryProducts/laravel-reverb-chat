<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{room}', [RoomsController::class, 'show'])->name('rooms.show');
Route::post('/rooms/{roomId}/message', [ChatController::class, 'postMessage'])->name('api.rooms.message.post');
