<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\FinanceController;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
Route::get('/', function () {
    $totalBooks = Book::count(); 
    return view('welcome', compact('totalBooks'));
})->name('welcome');
Route::resource('books', BookController::class)->only(['index', 'store', 'destroy']);
Route::resource('authors', AuthorController::class)->only(['store', 'destroy']);
Route::resource('categories', CategoryController::class)->only(['store', 'destroy']);
Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/issue', [IssueController::class, 'index'])->name('issue.index');
Route::get('/finances', [FinanceController::class, 'index'])->name('finances.index');
