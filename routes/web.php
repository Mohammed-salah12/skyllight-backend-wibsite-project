<?php

use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Service_descriptionController;
use App\Http\Controllers\Service_ImageController;
use App\Http\Controllers\ServiceController;
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
    return view('welcome');
});


    Route::prefix('cms/admin/')->group(function(){
        Route::view('' , 'cms.parent');
        Route::view('temp' , 'cms.temp');

        Route::resource('services' , ServiceController::class);
        Route::post('update-services/{id}' , [ServiceController::class , 'update'])->name('update-services');

        Route::resource('service_images' , Service_ImageController::class);
        Route::post('update-service_images/{id}' , [Service_ImageController::class , 'update'])->name('update-service_images');

        Route::resource('service_descriptions' , Service_descriptionController::class);
        Route::post('update-service_descriptions/{id}' , [Service_descriptionController::class , 'update'])->name('update-service_descriptions');

        Route::resource('partners' , PartnerController::class);
        Route::post('update-partners/{id}' , [PartnerController::class , 'update'])->name('update-partners');
    });