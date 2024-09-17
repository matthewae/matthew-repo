<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/index', [BookController::class, 'index'])->name('books.index');

Route::get('/books', [BookController::class, 'create'])->name('books.create');

Route::post('/store', [BookController::class, 'store'])->name('books.store');
