<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAccountController;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [UserAccountController::class,'register'] );


Route::get('/create-article', function(){

    return view('/api-ui/sdg-create-article');

});
Route::get('/create-project', function(){

    return view('/api-ui/sdg-create-project');

});
