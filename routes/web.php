<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/appointment', [Homecontroller::class, 'appointment']);
Route::get('/blog', [Homecontroller::class, 'blog']);
Route::get('/case', [Homecontroller::class, 'case']);
Route::get('/about-us', [Homecontroller::class, 'aboutus']);
Route::get('/consulation', [Homecontroller::class, 'consulation']);
Route::get('/contact-us', [Homecontroller::class, 'contactus']);
Route::get('/practice-area', [Homecontroller::class, 'practicearea']);
Route::get('/price-plan', [Homecontroller::class, 'priceplan']);
Route::get('/business-law', [Homecontroller::class, 'businesslaw']);
Route::get('/family-law', [Homecontroller::class, 'familylaw']);
Route::get('/criminal-law', [Homecontroller::class, 'criminallaw']);
Route::get('/real-estate-law', [Homecontroller::class, 'realestate']);
Route::get('/personal-injury', [Homecontroller::class, 'personalinjury']);
Route::get('/juricial-law', [Homecontroller::class, 'juriciallaw']);
Route::get('/cyber-crime', [Homecontroller::class, 'cybercrime']);
Route::get('/social-work', [Homecontroller::class, 'socialwork']);
Route::get('/family-problem', [Homecontroller::class, 'familyproblem']);
Route::get('/varities-case', [Homecontroller::class, 'varitiescase']);
Route::get('/land-collected', [Homecontroller::class, 'landcollected']);
Route::get('/divorce-making', [Homecontroller::class, 'divorcemaking']);
Route::get('/category-real-state', [Homecontroller::class, 'categoryrealstate']);
Route::get('/category-criminal-offense', [Homecontroller::class, 'categorycriminaloffense']);
Route::get('/category-dispute-resoulation', [Homecontroller::class, 'categorydisputeresoulation']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
