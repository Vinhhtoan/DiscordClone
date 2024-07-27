<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loginpage');
});
Route::get('/loginform', [AuthController::class, 'LoginView']);
Route::get('/registerform', [AuthController::class, 'RegisterView']);
Route::post('/registerform', [AuthController::class, 'postRegister']);
Route::post('/loginform', [AuthController::class, 'postLogin']);

Route::middleware(['checklog'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/servers/{serverId}/{channelId}',[ChannelController::class,'index'])->name('index');
    Route::get('/servers/{serverId}', [ServerController::class, 'index'])->name('servers.index');
    Route::delete('/servers/{serverId}/{channelId}', [ChannelController::class, 'delete'])->name('channel.delete');
    Route::post('/servers', [ServerController::class, 'store'])->name('server.store');
    Route::put('/servers/{serverId}', [ServerController::class, 'update']);
    Route::post('/servers/{serverId}', [ChannelController::class, 'storage'])->name('channels.storage');

});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

