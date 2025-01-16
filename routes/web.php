<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DonationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;


Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');




Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/nous_soutenir', function () {
    return view('soutenir');
})->name('nous_soutenir');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contactSend');

Route::get('/donate', [DonationController::class, 'showForm'])->name('donate.form');
Route::post('/donate', [DonationController::class, 'processPayment'])->name('donate.process');


// Route de succès après un paiement réussi
Route::get('/donation/success', function () {
    return view('donation');  // Vous pouvez créer une vue donation.success ou utiliser une vue existante
})->name('donation.success');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//routes CRUD nécessaires pour les pages

Route::prefix('pages')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('pages.index'); // Liste des pages
    Route::get('/create', [PageController::class, 'create'])->name('pages.create'); // Formulaire de création
    Route::post('/', [PageController::class, 'store'])->name('pages.store'); // Enregistrement de la page
    Route::get('/{page}/edit', [PageController::class, 'edit'])->name('pages.edit'); // Formulaire d'édition
    Route::put('/{page}', [PageController::class, 'update'])->name('pages.update'); // Mise à jour de la page
    Route::delete('/{page}', [PageController::class, 'destroy'])->name('pages.destroy'); // Suppression de la page
    Route::get('/pages/{slug}', [PageController::class, 'show'])->name('pages.show');
});




require __DIR__.'/auth.php';
