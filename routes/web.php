<?php

use App\Http\Controllers\OfferController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/offers/create', [OfferController::class, 'index'])->name('offers.create');
    Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');
    Route::post('/offers/store', [OfferController::class, 'store'])->name('offers.store');

    Route::get('notifications', function() {
        $notification = auth()->user()->notifications()->get();
        dd($notification);
        return view('notifications.index');
    })->name('notifications');

});

require __DIR__.'/auth.php';
