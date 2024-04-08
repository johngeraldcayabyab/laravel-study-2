<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/message", function (Request $request) {
    $message = $_POST['message'];
    $mqService = new \App\Services\RabbitMQService();
    $mqService->publish($message);
    return view('welcome');
});
