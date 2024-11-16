<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\ArticleController;



Route::get('/', function () {
    return view('welcome');
});


Route::post('/register', [UserAccountController::class,'register'] );

Route::post('/Article', [ArticleController::class,'CreateArticle'] );

Route::get('/Article', [ArticleController::class,'ShowArticle'] );

Route::put('/edit/{article_id}', [ArticleController::class,'EditArticle'] );

Route::delete('/delete/{article_id}', [ArticleController::class,'DeleteArticle'] );

Route::get('/create-article', function(){
    $data = DB::table('articles')->get();

    return view('/api-ui/sdg-create-article',[
        'data'=>$data

    ]);

});
Route::get('/create-project', function(){

    return view('/api-ui/sdg-create-project');

});

