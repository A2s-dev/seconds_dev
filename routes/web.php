<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\DeactiveController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TermsOfServiceController;

/*-- Auth --*/

Auth::routes();

# Login
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
# Guest Login
Route::get('/guest', [LoginController::class, 'guestLogin'])->name('guest.login');
# Register
Route::prefix('/register')->group(function () {
    Route::get('', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/exe', [RegisterController::class, 'register'])->name('register.exe');
});

# Terms of Service
Route::get('/terms', [TermsOfServiceController::class, 'index'])->name('terms');


# Contact
Route::prefix('/contact')->group(function () {
    Route::get('', [ContactController::class, 'index'])->name('contact.index');
    # content store
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
});


/*-- Only at Login --*/

Route::group(['middleware' => ['auth']], function () {
    /*-- Home --*/
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    # Show bookmarked novels
    Route::get('/home/mybook', [BookmarkController::class, 'index'])->name('myBook');
    # Delete Users
    Route::get('/deactive', [DeactiveController::class, 'showDeactiveForm'])->name('deactive');
    Route::post('/deactive/exe', [DeactiveController::class, 'deactive'])->name('deactive.exe');
    # Logout
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    # News Postings
    Route::get('/news_seconds', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news_seconds/store', [NewsController::class, 'store'])->name('news.store');

    /*-- Editer --*/
    Route::prefix('/post')->group(function () {
        Route::get('', [PostController::class, 'index'])->name('post.index');
        # Add posts
        Route::get('/add', [PostController::class, 'add'])->name('post.add');
        # Select posts
        Route::get('/select', [PostController::class, 'select'])->name('post.select');
        # Update posts
        Route::post('/update', [PostController::class, 'update'])->name('post.update');
        # Delete posts
        Route::post('/delete', [PostController::class, 'delete'])->name('post.delete');
        # Toggle the release flag
        Route::post('/release', [PostController::class, 'toggleStatus'])->name('post.release');

        # Search posts
        Route::get('/search', [SearchController::class, 'index'])->name('post.search');
    });

    /* Review */
    # List of released novels
    Route::prefix('/review')->group(function () {
        Route::get('', [ReviewController::class, 'index'])->name('review.index');
        # Read or review the selected novels
        Route::get('/{id}', [ReviewController::class, 'showNovel'])->name('review.show');

        # Registering and Deleting Bookmarks
        Route::get('/bookmark/{post}', [BookmarkController::class, 'bookmark'])->name('bookmark');
        Route::get('/unBookmark/{post}', [BookmarkController::class, 'unBookmark'])->name('unBookmark');

        # Show Comment
        Route::get('/comment/{post_id}', [CommentController::class, 'index'])->name('comment.index');
        # Create Comment
        Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
        # delete Comment
        Route::post('/comment/delete', [CommentController::class, 'delete'])->name('comment.delete');

        # PDF Export
        Route::get('/pdf/{post_id}/horizontal/{status}', [PDFController::class, 'exportHorizontal'])->name('pdf.horizontal')->middleware('pdf');
        #Route::get('/pdf/{post_id}/vertical/{status}', [PDFController::class, 'exportVertical'])->name('pdf.vertical')->middleware('pdf');
    });
});
