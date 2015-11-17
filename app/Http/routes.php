<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get("/","ImageController@welcome");
Route::resource("image","ImageController",["names"=>["index"=>"images_path","show"=>"image_path","create"=>"image_create","store"=>"image_store","update"=>"image_update","edit"=>"image_edit","destroy"=>"image_destroy"],"except"=>["destroy","edit"]]);


