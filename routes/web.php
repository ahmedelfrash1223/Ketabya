<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

#------------------------------------ views Routes ------> 

Route::get('/thebest', [ViewController::class, 'about'])->name('thebest');
Route::get('/blog', [ViewController::class, 'blog'])->name('blog');
Route::get('/contact', [ViewController::class, 'contact'])->name('contact');
Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/categories', [ViewController::class, 'categories'])->name('categories');

Route::get('/users', [ViewController::class, 'users'])->name('users');
Route::post('/profile/{id}/photo', [UserController::class, 'profile'])->name('profile.photo');

Route::get('/add', [ViewController::class, 'add'])->name('add')->middleware('auth');

Route::get('/prof', [ViewController::class, 'profile'])->name('prof')->middleware('auth');

Route::get('/book/{id}/details', [ViewController::class, 'details'])->name('book.details')->middleware('auth');
Route::get('/category/{id}/book', [ViewController::class, 'category'])->name('book.category');
Route::get('/author/{user_id}/book', [ViewController::class, 'author'])->name('book.author');
#-------------------------------------------------------> 

#------------------------------------ contact us Route ---------------------------------> 
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
#---------------------------------------------------------------------------------------> 

#------------------------------------ Subscribe Route ---------------------------------> 
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe');
#---------------------------------------------------------------------------------------> 




#------------------------------------ Reviewer Route ---------------------------------> 
Route::get('/reviewerdashboard', [viewController::class, 'reviewer'])->name('reviewer')->middleware('reviewer');

Route::get('/book/{id}/review', [BookController::class, 'review'])->name('review.book')->middleware('reviewer');
Route::post('/book/{id}/update', [BookController::class, 'update'])->name('review.update')->middleware('reviewer');

#---------------------------------------------------------------------------------------> 


#------------------------------------ Admin Route ---------------------------------> 
Route::get('/admindashboard', [viewController::class, 'admin'])->name('admin')->middleware('admin');

Route::get('/users/{id}/edit', [UserController::class, 'editusers'])->name('edit.users')->middleware('admin');
Route::post('/users/{id}/update', [UserController::class, 'updateusers'])->name('update.users')->middleware('admin');
Route::post('/users/{id}/delete', [UserController::class, 'deleteusers'])->name('delete.users')->middleware('admin');

Route::get('/category', [CategoryController::class, 'get'])->name('category')->middleware('admin');
Route::post('/category/add', [CategoryController::class, 'add'])->name('add.category')->middleware('admin');
Route::post('/category/{id}/delete', [CategoryController::class, 'delete'])->name('delete.category')->middleware('admin');

Route::get('/book', [BookController::class, 'index'])->name('index.book')->middleware('admin');
Route::post('/book/{id}/delete', [BookController::class, 'delete'])->name('delete.book')->middleware('admin');

#---------------------------------------------------------------------------------------> 

#------------------------------------ Add book Route ---------------------------------> 
Route::post('/upload', [BookController::class, 'upload'])->name('book.upload');
#---------------------------------------------------------------------------------------> 






Route::get('/d', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
