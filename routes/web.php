<?php

use App\Http\Controllers\Author\AuthorController;
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Library\LibraryController;
use App\Http\Controllers\Publisher\PublisherController;

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

Route::prefix('book')->name('book.')->middleware('auth')->group(function () {
    Route::prefix('{language}')->middleware('lang')->group(function () {
        Route::get('/create-book/', [BookController::class, 'create'])->name('create');
        Route::get('/view-books', [BookController::class, 'index'])->name('index');
        Route::get('/edit/{id}/', [BookController::class, 'edit'])->name('edit');
    });


    Route::post('store', [BookController::class, 'store'])->name('store');
    Route::post('update/{id}', [BookController::class, 'update'])->name('update');
    Route::post('delete/{id}', [BookController::class, 'destroy'])->name('destroy');
});

Route::prefix('author')->name('author.')->middleware('auth')->group(function () {
    Route::prefix('/{language}/')->middleware('lang')->group(function () {
        Route::get('create-author/', [AuthorController::class,'create'])->name('create');
        Route::get('/view-authors', [AuthorController::class,'index'])->name('index');
        Route::get('edit/{id}/', [AuthorController::class,'edit'])->name('edit');
    });
    Route::post('store', [AuthorController::class,'store'])->name('store');
    Route::post('update/{id}', [AuthorController::class,'update'])->name('update');
    Route::post('delete/{id}', [AuthorController::class,'destroy'])->name('destroy');
});

Route::prefix('publisher')->name('publisher.')->middleware('auth')->group(function () {
    Route::prefix('/{language}/')->middleware('lang')->group(function () {
        Route::get('create-publisher/', [PublisherController::class,'create'])->name('create');
        Route::get('view-publishers', [PublisherController::class,'index'])->name('index');
        Route::get('edit/{id}/', [PublisherController::class,'edit'])->name('edit');
    });
    Route::post('store', [PublisherController::class,'store'])->name('store');
    Route::post('update/{id}', [PublisherController::class,'update'])->name('update');
    Route::post('delete/{id}', [PublisherController::class,'destroy'])->name('destroy');
});

Route::prefix('category')->name('category.')->middleware('auth')->group(function () {
    Route::prefix('/{language}/')->middleware('lang')->group(function () {
        Route::get('create-category', [CategoryController::class,'create'])->name('create');
        Route::get('view-categories', [CategoryController::class,'index'])->name('index');
        Route::get('edit/{id}', [CategoryController::class,'edit'])->name('edit');
    });
    Route::post('store', [CategoryController::class,'store'])->name('store');
    Route::post('update/{id}', [CategoryController::class,'update'])->name('update');
    Route::post('delete/{id}', [CategoryController::class,'destroy'])->name('destroy');
});

Route::prefix('browse/books/by')->name('browse/books/by.')->group(function () {
    Route::get('authors', [LibraryController::class,'book_authors'])->name('authors');
    Route::get('categories', [LibraryController::class,'book_categories'])->name('categories');
    Route::get('publishers', [LibraryController::class,'book_publishers'])->name('publishers');
});

Route::get('library', [LibraryController::class,'library']);

Route::get('authors', [LibraryController::class,'authors']);
Route::get('categories', [LibraryController::class,'categories']);
Route::get('publishers', [LibraryController::class,'publishers']);

Route::get('books/{id}',[LibraryController::class,'books']);
Route::get('books_authors', [LibraryController::class,'search_author2']);
Route::get('books_authors/{name}', [LibraryController::class,'search_author']);
Route::get('books_categories', [LibraryController::class,'search_category2']);
Route::get('books_categories/{name}', [LibraryController::class,'search_category']);
Route::get('books_publishers', [LibraryController::class,'search_publisher2']);
Route::get('books_publishers/{name}', [LibraryController::class,'search_publisher']);

Route::get('search', [LibraryController::class,'search']);
Route::post('search', [LibraryController::class,'search']);

Route::get('search_author', [LibraryController::class,'search_author']);
Route::get('search_category', [LibraryController::class,'search_category']);
Route::get('search_publisher', [LibraryController::class,'search_publisher']);

Auth::routes();

Route::get('dashboard/{language}', [LibraryController::class,'dashboard'])->middleware('auth')->middleware('lang')->name('dashboard');
//Route::get('/arabic', [LibraryController::class,'arabic'])->middleware('auth')->name('arabic');
//Route::get('/english', [LibraryController::class,'english'])->middleware('auth')->name('english');


Route::get('/download/{file}',[LibraryController::class,'download']);
Route::get('/view/{id}',[LibraryController::class,'view']);


// FOR IMPORTING DATA FROM EXCEL FILE
//Route::get('import/authors','Author\AuthorController@import');
//Route::get('import/books','Book\BookController@import');
//Route::get('import/categories', 'Category\CategoryController@import');
//Route::get('import/publishers', 'Publisher\PublisherController@import');
//
//Route::get('import/books_authors','Author\AuthorController@import2');
//Route::get('import/books_categories', 'Category\CategoryController@import2');
//Route::get('import/books_publishers', 'Publisher\PublisherController@import2');

