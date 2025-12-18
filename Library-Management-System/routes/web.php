<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\FinanceController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/books', [BookController::class, 'index'])->name('books.index');


Route::get('/members', [MemberController::class, 'index'])->name('members.index');


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');


Route::get('/issue', [IssueController::class, 'index'])->name('issue.index');


Route::get('/finances', [FinanceController::class, 'index'])->name('finances.index');


Route::resource('books', BookController::class)->only(['index', 'store', 'destroy']);