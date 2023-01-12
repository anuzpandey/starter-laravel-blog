<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMS\CategoryController;

Route::group(['prefix' => 'cms', 'as' => 'cms.'], function () {

    // Categories routes [Route url is plural and name is singular]
    Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('category.store');
    Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('categories/{id}', [CategoryController::class, 'update'])->name('category.update');

});
