<?php

use App\Http\Controllers\Admin\MemberCategoryController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/admin/school', SchoolController::class)->names('school');
    Route::resource('/admin/notice', NoticeController::class)->names('notice');
    Route::resource('/admin/membercategory', MemberCategoryController::class)->names('membercategory');
    Route::resource('/admin/member', MemberController::class)->names('member');
});


require __DIR__ . '/auth.php';
