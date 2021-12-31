<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ElementController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReportController;
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
Route::get('paquetes/ayer', [PackageController::class, 'yesterdayReport'])->name('admin.packages.ayer');
Route::get('paquetes/ticket/{paquete}', [PackageController::class, 'ticket'])->name('admin.packages.ticket');
Route::get('report/date', [ReportController::class, 'searchPackageDate'])->name('admin.reports.date');
Route::get('report/user', [ReportController::class, 'searchPackageUser'])->name('admin.reports.user');
Route::get('report/some', [ReportController::class, 'somePackage'])->name('admin.reports.some');
Route::post('reports/reportUser', [ReportController::class, 'returnReportUser'])->name('admin.reports.reportUser');
Route::post('reports/reportDate', [ReportController::class, 'returnreportDate'])->name('admin.reports.reportDate');
Route::post('reports/reportSome', [ReportController::class, 'reportSome'])->name('admin.reports.reportSome');



