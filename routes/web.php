<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

     $filename = public_path('images/');
        if (is_dir($filename))
        {
            $i=0;
            $files = File::allFiles(public_path('images/'));
            $j=count($files)-1;
            return view('welcome', compact('files','i','j'));
        }else{
            $files = null;
        }
    return view('welcome');
});
