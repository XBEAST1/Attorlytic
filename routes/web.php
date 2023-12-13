<?php

use App\Http\Controllers\Formcontroller;
use App\Http\Controllers\Routecontroller;
use App\Http\Controllers\MultiUserAuthController;
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

Route::controller(Routecontroller::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/appointment', 'appointment');
    Route::get('/blog', 'blog');
    Route::get('/case', 'case');
    Route::get('/about-us', 'aboutus');
    Route::get('/consulation', 'consulation');
    Route::get('/contact-us', 'contactus');
    Route::get('/practice-area', 'practicearea');
    Route::get('/price-plan', 'priceplan');
    Route::get('/business-law', 'businesslaw');
    Route::get('/family-law', 'familylaw');
    Route::get('/criminal-law', 'criminallaw');
    Route::get('/real-estate-law', 'realestate');
    Route::get('/personal-injury', 'personalinjury');
    Route::get('/juricial-law', 'juriciallaw');
    Route::get('/cyber-crime', 'cybercrime');
    Route::get('/social-work', 'socialwork');
    Route::get('/family-problem', 'familyproblem');
    Route::get('/varities-case', 'varitiescase');
    Route::get('/land-collected', 'landcollected');
    Route::get('/divorce-making', 'divorcemaking');
    Route::get('/category-real-state', 'categoryrealstate');
    Route::get('/category-criminal-offense', 'categorycriminaloffense');
    Route::get('/category-dispute-resoulation', 'categorydisputeresoulation');
    Route::get('/price-plan-personal', 'priceplanpersonal');
    Route::get('/price-plan-professional', 'priceplanprofessional');
    Route::get('/price-plan-enterprise', 'priceplanenterprise');
    Route::get('/raise-your-voice', 'raiseyourvoice');
    Route::get('/allow-miles', 'allowmiles');
    Route::get('/to-sitting-subject', 'tosittingsubject');
    Route::get('/fancy-she-stuff', 'fancyshestuff');
    Route::get('/betty-doyle', 'bettydoyle');
    Route::get('/john-ierrante', 'johnierrante');
    Route::get('/rene-raniels', 'reneraniels');
    Route::get('/david-finch', 'davidfinch');
    Route::get('/ruth-christian', 'ruthchristian');
    Route::get('/gregory-kaster', 'gregorykaster');
});

Route::get('/home', [MultiUserAuthController::class, 'index'])->middleware('auth')->name('home');

Route::middleware('admin')->group(function () {
    Route::get('/updateprofile', [Routecontroller::class, 'updateprofile']);
    Route::post('/home', [Formcontroller::class, 'store_data']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
