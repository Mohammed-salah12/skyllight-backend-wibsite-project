<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GallreryController;
use App\Http\Controllers\MainController;
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

        Route::resource('service_images' , Service_ImageController::class);
        Route::post('update-service_images/{id}' , [Service_ImageController::class , 'update'])->name('update-service_images');

        Route::resource('service_descriptions' , Service_descriptionController::class);
        Route::post('update-service_descriptions/{id}' , [Service_descriptionController::class , 'update'])->name('update-service_descriptions');

        Route::resource('partners' , PartnerController::class);
        Route::post('update-partners/{id}' , [PartnerController::class , 'update'])->name('update-partners');

        Route::resource('contacts' , ContactController::class);
        Route::post('update-contacts/{id}' , [ContactController::class , 'update'])->name('update-contacts');

        Route::resource('galleries' , GalleryController::class);
        Route::post('update-galleries/{id}' , [GalleryController::class , 'update'])->name('update-galleries');

        Route::resource('abouts' , AboutController::class);
        Route::post('update-abouts/{id}' , [AboutController::class , 'update'])->name('update-abouts');

        Route::resource('mains' , MainController::class);
        Route::post('update-mains/{id}' , [MainController::class , 'update'])->name('update-mains');

        Route::resource('messages' , MessageController::class);
    Route::post('update-messages/{id}' , [MessageController::class , 'update'])->name('update-messages');

    Route::resource('partners_images' , PartnerImageController::class);
    Route::post('update-partners_images/{id}' , [PartnerImageController::class , 'update'])->name('partners-images');

    Route::resource('main_images' , MainImageController::class);
    Route::post('update-main_images/{id}' , [MainImageController::class , 'update'])->name('main-images');

    Route::resource('users' , UserController::class);
    Route::post('update-users/{id}' , [UserController::class , 'update'])->name('users');
    });