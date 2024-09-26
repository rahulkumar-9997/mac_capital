<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontHomeController;
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

Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::get('about-us', [FrontHomeController::class, 'aboutUs'])->name('about-us');
Route::get('financial-services', [FrontHomeController::class, 'financialServices'])->name('financial-services');
Route::group(['prefix'=>'financial-services'], function()
{
    Route::get('multi-facetedstyle', [FrontHomeController::class, 'multiFacetedStyle'])->name('multi-facetedstyle');
    Route::get('capital-raising', [FrontHomeController::class, 'capitalRaising'])->name('capital-raising');
    Route::get('privateequity-placement', [FrontHomeController::class, 'privateEquityPlacement'])->name('privateequity-placement');
    Route::get('internationaldebt-solution', [FrontHomeController::class, 'internationalDebtSolution'])->name('internationaldebt-solution');
    Route::get('internationalstructured-solution', [FrontHomeController::class, 'internationalStructuredSolutions'])->name('internationalstructured-solution');
    Route::get('international-m-and-s-services', [FrontHomeController::class, 'internationalMAandSservices'])->name('international-m-and-s-services');
});

Route::get('corporate-advisory', [FrontHomeController::class, 'corporateAdvisory'])->name('corporate-advisory');
Route::group(['prefix'=>'corporate-advisory'], function()
{
    Route::get('mergers', [FrontHomeController::class, 'mergersAquisitions'])->name('mergers');
    Route::get('divestitures', [FrontHomeController::class, 'divestitures'])->name('divestitures');
    Route::get('capital-structuring', [FrontHomeController::class, 'capitalStructuring'])->name('capital-structuring');
    Route::get('indications-of-value', [FrontHomeController::class, 'indicationOfValue'])->name('indications-of-value');
    Route::get('project-structured-finance', [FrontHomeController::class, 'projectStrFinance'])->name('project-structured-finance');
    Route::get('transaction-support', [FrontHomeController::class, 'transactionSupport'])->name('transaction-support');
});

Route::get('partnerships', [FrontHomeController::class, 'partnerships'])->name('partnerships');
Route::get('contact-us', [FrontHomeController::class, 'contactUs'])->name('contact-us');
Route::POST('contact-us/store', [FrontHomeController::class, 'contactUsSubmit'])->name('contact-us.store');
