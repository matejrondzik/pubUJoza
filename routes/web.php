<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;

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


Route::get('/o-nas', [PageController::class, 'about'])->name('about');
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/dokumenty', [PageController::class, 'documents'])->name('documents');
Route::get('/kontakty', [PageController::class, 'contacts'])->name('contacts');
Route::get('/zaujem', [PageController::class, 'interest'])->name('interest');
Route::get('/klient', [PageController::class, 'client'])->name('client');
Route::get('/obchodnik', [PageController::class, 'trader'])->name('trader');
Route::get('/poradenstvo', [PageController::class, 'consulting'])->name('consulting');
Route::get('/vyvoz', [PageController::class, 'waste'])->name('waste');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/clanok', [PageController::class, 'articleblog'])->name('articleblog');


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'send'])->name('login');


Route::post('/form/client', [FormController::class, 'storeClient'])->name('form.client.store');
Route::get('/klient', [PageController::class, 'client'])->name('client');
Route::post('/form/trader', [FormController::class, 'storeTrader'])->name('form.trader.store');
Route::post('/contact/send', [FormController::class, 'sendContactEmail'])->name('send.contact.email');
Route::post('/client/store', [FormController::class, 'storeClient'])->name('store.client');
Route::post('/trader/store', [FormController::class, 'storeTrader'])->name('store.trader');


//ADMIN ROUTE
Route::prefix('/admin/')->middleware('auth')->group(function (){
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', function () {return view('backend.index');})->name('admin.index');

    Route::get('/database', [DatabaseController::class, 'index'])->name('admin.database');

    Route::resource('texts', TextController::class);
    Route::resource('photos', PhotoController::class);

    Route::prefix('/modules/')->group(function (){
        Route::resource('employees', EmployeesController::class);
        Route::resource('documents', DocumentController::class);
    });

    Route::prefix('/subpage/')->group(function (){
        Route::get('/domov', function(){ return view('backend.Subpages.domov'); });

        Route::get('/onas', function(){ return view('backend.Subpages.onas'); });
        Route::get('/dokumenty', function(){ return view('backend.Subpages.dokumenty'); });
        Route::get('/kontakt', function(){ return view('backend.Subpages.kontakt'); });
        Route::get('/paticka', function(){ return view('backend.Subpages.footer'); });

    });
});
