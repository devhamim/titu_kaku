<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\TermAndConditionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/contect', [FrontendController::class, 'contect'])->name('contect');
Route::get('/our/stories', [FrontendController::class, 'blogs'])->name('our.stories');
Route::get('/our/videos', [FrontendController::class, 'our_videos'])->name('our.videos');
Route::get('/stories/details/{slug}', [FrontendController::class, 'stories_details'])->name('stories.details');
Route::post('/message/store', [FrontendController::class, 'message_store'])->name('message.store');


// addtional page
Route::get('/aboutus', [FrontendController::class, 'about_us'])->name('about.us');
Route::get('/privacy/policy', [FrontendController::class, 'privacy_policy'])->name('privacy.policy');
Route::get('/terms/condition', [FrontendController::class, 'terms_condition'])->name('terms.condition');
// login
Route::group(['prefix' => 'admin'], function(){
    // login route
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('gallerys', CategoryController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('collection', ReviewController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('stories', StoresController::class);
    Route::resource('videos', VideoController::class);

    // addtional page
    Route::resource('about', AboutController::class);
    Route::resource('privacypolicy', PrivacyPolicyController::class);
    Route::resource('termandcondition', TermAndConditionController::class);
});

