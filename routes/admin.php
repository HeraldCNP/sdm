<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\ElementController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Livewire\Admin\PackagesIndex;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

// Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');
Route::resource('posts', PostController::class)->except('show')->names('admin.posts');
Route::resource('companies', CompanyController::class)->except('show')->names('admin.companies');
Route::resource('elements', ElementController::class)->except('show')->names('admin.elements');
Route::resource('packages', PackageController::class)->names('admin.packages');
Route::get('paquetes/pdf/{paquete}', [PackageController::class, 'createPdf'])->name('admin.package.pdf');

