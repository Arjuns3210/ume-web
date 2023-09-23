<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\MediaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",'HomeController@index');
Route::get("sitemap",'HomeController@sitemap');
Route::get("fund_raising",'SectorsController@fundRaising');
Route::get("ipo_consulting",'SectorsController@ipoConsulting');
Route::get("contact_us",'ContactusController@contact');
Route::post('contact_us','ContactusController@saveContacts')->name('contact_us.saveContacts');
Route::get("careers",'CareersController@career');
Route::post("careers",'CareersController@addData')->name('careers.addData');
Route::get("corporate_treasury",'SectorsController@corporateTreasur');
Route::get("fund_investment",'SectorsController@fundInvestment');
Route::get("legal_consulting",'SectorsController@legalConsulting');
Route::get("technology_system",'SectorsController@technologySystem');
Route::get("about",'AboutUsController@aboutUs');
Route::get("our_history",'AboutUsController@ourHistory');
Route::get("awards",'AboutUsController@awardsAndRecognition');
Route::get("csr",'AboutUsController@csrOfCompany');
Route::get("gallery",'MediaController@gallery');
Route::get("events",'MediaController@event');
Route::get("blogs",'MediaController@blog');
Route::get("terms",'HomeController@terms');
Route::get("privacy",'HomeController@policy');
Route::get("disclaimer",'HomeController@disclaimer');
Route::get("scam",'HomeController@scam');
Route::post("subscribe",'HomeController@subscribe')->name('subscribe');
