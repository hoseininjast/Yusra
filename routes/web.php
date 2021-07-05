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

Route::group(['as' => 'Dashboard.' , 'middleware' => ['auth']] , function (){
    Route::get('/' , [\App\Http\Controllers\UserController::class , 'index'])->name('index');
    Route::group([/*'middleware' => 'Admin'*/], function () {
        Route::group(['prefix' => 'Role' , 'as' => 'Role.'] , function () {
            Route::get('All' , [\App\Http\Controllers\RolesController::class , 'All'])->name('All');
            Route::get('Add' , [\App\Http\Controllers\RolesController::class , 'Add'])->name('Add');
            Route::post('Create' , [\App\Http\Controllers\RolesController::class , 'Create'])->name('Create');
            Route::get('Edit/{ID}' , [\App\Http\Controllers\RolesController::class , 'Edit'])->name('Edit');
            Route::put('Update/{ID}' , [\App\Http\Controllers\RolesController::class , 'Update'])->name('Update');
            Route::get('Delete/{ID}' , [\App\Http\Controllers\RolesController::class , 'Delete'])->name('Delete');
        });
        Route::group(['prefix' => 'Users' , 'as' => 'Users.'] , function () {
            Route::get('All' , [\App\Http\Controllers\UserController::class , 'All'])->name('All');
            Route::get('Add' , [\App\Http\Controllers\UserController::class , 'Add'])->name('Add');
            Route::post('Create' , [\App\Http\Controllers\UserController::class , 'Create'])->name('Create');
            Route::get('Edit/{ID}' , [\App\Http\Controllers\UserController::class , 'Edit'])->name('Edit');
            Route::put('Update/{ID}' , [\App\Http\Controllers\UserController::class , 'Update'])->name('Update');
            Route::get('Delete/{ID}' , [\App\Http\Controllers\UserController::class , 'Delete'])->name('Delete');
        });
        Route::group(['prefix' => 'Work' , 'as' => 'Work.'] , function () {
            Route::get('All' , [\App\Http\Controllers\WorksController::class , 'All'])->name('All');
            Route::get('Add' , [\App\Http\Controllers\WorksController::class , 'Add'])->name('Add');
            Route::get('View/{ID}' , [\App\Http\Controllers\WorksController::class , 'View'])->name('View');
            Route::post('Create' , [\App\Http\Controllers\WorksController::class , 'Create'])->name('Create');
            Route::get('Edit/{ID}' , [\App\Http\Controllers\WorksController::class , 'Edit'])->name('Edit');
            Route::put('Update/{ID}' , [\App\Http\Controllers\WorksController::class , 'Update'])->name('Update');
            Route::get('Delete/{ID}' , [\App\Http\Controllers\WorksController::class , 'Delete'])->name('Delete');
            Route::get('Done/{ID}' , [\App\Http\Controllers\PartsController::class , 'Done'])->name('Done');
            Route::get('Report/{ID}' , [\App\Http\Controllers\ReportController::class , 'Add'])->name('Report');
            Route::post('SaveReport' , [\App\Http\Controllers\ReportController::class , 'Create'])->name('SaveReport');
        });
        Route::group(['prefix' => 'User' , 'as' => 'User.'] , function () {
            Route::get('Setting' , [\App\Http\Controllers\AuthController::class , 'Setting'])->name('Setting');
            Route::post('SettingUpdate' , [\App\Http\Controllers\AuthController::class , 'SettingUpdate'])->name('SettingUpdate');
            Route::post('ImageUpdate' , [\App\Http\Controllers\AuthController::class , 'ImageUpdate'])->name('ImageUpdate');
        });
        /*Route::group(['prefix' => 'Part' , 'as' => 'Part.'] , function () {
            Route::get('All' , [\App\Http\Controllers\PartsController::class , 'All'])->name('All');
            Route::get('Add' , [\App\Http\Controllers\PartsController::class , 'Add'])->name('Add');
            Route::post('Create' , [\App\Http\Controllers\PartsController::class , 'Create'])->name('Create');
            Route::get('Edit/{ID}' , [\App\Http\Controllers\PartsController::class , 'Edit'])->name('Edit');
            Route::put('Update/{ID}' , [\App\Http\Controllers\PartsController::class , 'Update'])->name('Update');
            Route::get('Delete/{ID}' , [\App\Http\Controllers\PartsController::class , 'Delete'])->name('Delete');
        });*/
    });
   /*Route::group(['middleware' => 'Employee'], function () {
        Route::group(['prefix' => 'Role' , 'as' => 'Role.'] , function () {
            Route::get('All' , [\App\Http\Controllers\RolesController::class , 'All'])->name('All');
            Route::get('Add' , [\App\Http\Controllers\RolesController::class , 'Add'])->name('Add');
            Route::post('Create' , [\App\Http\Controllers\RolesController::class , 'Create'])->name('Create');
            Route::get('Edit/{ID}' , [\App\Http\Controllers\RolesController::class , 'Edit'])->name('Edit');
            Route::put('Update/{ID}' , [\App\Http\Controllers\RolesController::class , 'Update'])->name('Update');
            Route::get('Delete/{ID}' , [\App\Http\Controllers\RolesController::class , 'Delete'])->name('Delete');
        });
        Route::group(['prefix' => 'Users' , 'as' => 'Users.'] , function () {
            Route::get('All' , [\App\Http\Controllers\UserController::class , 'All'])->name('All');
            Route::get('Add' , [\App\Http\Controllers\UserController::class , 'Add'])->name('Add');
            Route::post('Create' , [\App\Http\Controllers\UserController::class , 'Create'])->name('Create');
            Route::get('Edit/{ID}' , [\App\Http\Controllers\UserController::class , 'Edit'])->name('Edit');
            Route::put('Update/{ID}' , [\App\Http\Controllers\UserController::class , 'Update'])->name('Update');
            Route::get('Delete/{ID}' , [\App\Http\Controllers\UserController::class , 'Delete'])->name('Delete');
        });
        Route::group(['prefix' => 'Work' , 'as' => 'Work.'] , function () {
            Route::get('All' , [\App\Http\Controllers\WorksController::class , 'All'])->name('All');
            Route::get('Add' , [\App\Http\Controllers\WorksController::class , 'Add'])->name('Add');
            Route::post('Create' , [\App\Http\Controllers\WorksController::class , 'Create'])->name('Create');
            Route::get('Edit/{ID}' , [\App\Http\Controllers\WorksController::class , 'Edit'])->name('Edit');
            Route::put('Update/{ID}' , [\App\Http\Controllers\WorksController::class , 'Update'])->name('Update');
            Route::get('Delete/{ID}' , [\App\Http\Controllers\WorksController::class , 'Delete'])->name('Delete');
        });
    });*/

});
