<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ArgentController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\UrgenceController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;



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



Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/temoignages', [TemoignageController::class, 'index'])->name('temoignages.index');
Route::get('/temoignages/create', [TemoignageController::class, 'create'])->name('temoignages.create');
Route::post('/temoignages', [TemoignageController::class, 'store'])->name('temoignages.store');
Route::delete('/temoignages/{id}', [TemoignageController::class, 'destroy'])->name('temoignages.destroy');


Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::post('/services/{service}/donors', [ServiceController::class, 'addDonor'])->name('services.addDonor');


Route::get('/urgences', [UrgenceController::class, 'index'])->name('urgences.index');
Route::get('/urgences/{urgence}/donate', [UrgenceController::class, 'show'])->name('urgences.show');
Route::post('/urgences/{urgence}/process-payment', [UrgenceController::class, 'processPayment'])->name('urgences.processPayment');
Route::post('/urgences/{id}/pay', [UrgenceController::class, 'pay'])->name('urgences.pay');


// Route::get('/urgences', [UrgenceController::class, 'index'])->name('urgence.index');
// Route::get('/urgences/create', [UrgenceController::class, 'create'])->name('urgence.create');
// Route::post('/urgencddes', [UrgenceController::class, 'store'])->name('urgence.store');
// Route::get('/urgences/{urgence}/donate', [UrgenceController::class, 'donate'])->name('urgence.donate');
// Route::post('/urgences/{urgence}/charge', [UrgenceController::class,'charge'])->name('urgence.charge');

// Route::get('/urgences/{urgence}', [UrgenceController::class, 'show'])->name('urgences.show');
// Route::get('/urgences/{urgence}/edit', [UrgenceController::class, 'edit'])->name('urgences.edit');
// Route::put('/urgences/{urgence}', [UrgenceController::class, 'update'])->name('urgences.update');
// Route::delete('/urgences/{urgence}', [UrgenceController::class, 'destroy'])->name('urgences.destroy');



Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');
Route::get('/donations/argents/index', [ArgentController::class, 'index'])->name('donations.argents.index');
Route::get('/argents', [DonationController::class, 'create'])->name('argents.create');
Route::post('/donations', [DonationController::class, 'storeArgent'])->name('donations.storeArgent');
Route::post('/donations', [DonationController::class, 'storeDon'])->name('donations.storeDon');

Route::get('/donations/argents/create', function () {
    return view('donations.argents.create');
})->name('argent');

Route::get('/paiement/create', [DonationController::class, 'create'])->name('paiement.create');
Route::post('/paiement',[DonationController::class,'storePayment'])->name('paiement.storePayment');

Route::post('/organisations',[DonationController::class,'storeLivraison'])->name('donations.storeLivraison');

Route::post('/donations/paiement', [DonationController::class, 'storeDon'])->name('paiement.storeDon');



Route::get('/donations/alimentations/create', function () {
    return view('donations.alimentations.create');
})->name('alimentations');

Route::get('/donations/meubles/create', function () {
    return view('donations.meubles.create');
})->name('meubles');

Route::get('/donations/scolaires/create', function () {
    return view('donations.scolaires.create');
})->name('scolaires');

Route::get('/donations/vetements/create', function () {
    return view('donations.vetements.create');
})->name('vetements');
// Affiche le formulaire pour faire un don de vêtements
Route::get('/vetements/create', [DonationController::class, 'createVetement'])->name('vetements.create');
// Enregistre un don de vêtements dans la base de données
Route::post('/donations/vetements', [DonationController::class, 'storeDon'])->name('vetements.storeDon');
Route::post('/donations/alimentations', [DonationController::class, 'storeDon'])->name('alimentations.storeDon');
Route::post('/donations/meubles', [DonationController::class, 'storeDon'])->name('meubles.storeDon');
Route::post('/donations/scolaires', [DonationController::class, 'storeDon'])->name('scolaires.storeDon');

// Route::post('/organisation', [DonationController::class, 'storeDon'])->name('paiement.create');
Route::post('/lui-meme', [DonationController::class, 'storeDon'])->name('methodes.lui-meme');

Route::get('/donations/argents', [DonationController::class, 'create'])->name('paiement.create');
// Route::post('/donations/argents', [DonationController::class, 'storeArgent'])->name('paiement.create');
Route::post('/donations/vetements', [DonationController::class, 'storeDon'])->name('vetements.storeDon');
Route::get('/donations/vetements', [DonationController::class, 'create'])->name('vetements.create');
Route::get('/donations/alimentations', [DonationController::class, 'create'])->name('alimentations.create');
Route::get('/donations/meubles', [DonationController::class, 'create'])->name('meubles.create');
Route::get('/donations/scolaires', [DonationController::class, 'create'])->name('scolaires.create');
Route::get('/donations/argents', [DonationController::class, 'create'])->name('argents.create');



// Route pour la méthode de donation "Occupez vous de la livraison"
Route::get('/methodes/lui-meme', function () {
    return view('methodes.lui-meme');
})->name('methodes.lui-meme');

// Route pour la méthode de donation "Nous nous occupons!"
Route::post('/methodes/organisation', function () {
    return view('methodes.organisation');
})->name('methodes.organisation');



Route::get('/donations/autres/create', function () {
    return view('donations.autres.create');
})->name('autres');



Route::get('/evenements', [EvenementController::class, 'index'])->name('evenements.index');
Route::get('/evenements/create', [EvenementController::class, 'create'])->name('evenements.create');
Route::post('/evenements', [EvenementController::class, 'store'])->name('evenements.store');
Route::post('evenements/like/{id}', [EvenementController::class, 'like'])->name('like');
Route::post('evenements/comment/{id}', [EvenementController::class, 'comment'])->name('comment');
Route::get('evenements/share/{id}', [EvenementController::class, 'share'])->name('evenements.share');







Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('admin/donations', [AdminController::class, 'indexDonations'])->name('admin.donations.index');

    Route::get('/admin/evenements', [AdminController::class, 'indexEvenements'])->name('admin.evenements.index');
    Route::get('admin/evenements/create', [AdminController::class, 'createEvenement'])->name('admin.evenements.create');
    Route::post('admin/evenements', [AdminController::class, 'storeEvenement'])->name('admin.evenements.store');
    Route::get('admin/evenements/{id}/edit', [AdminController::class, 'editEvenement'])->name('admin.evenements.edit');
    Route::put('admin/evenements/{id}', [AdminController::class, 'updateEvenement'])->name('admin.evenements.update');
    Route::delete('admin/evenements/{id}', [AdminController::class, 'destroyEvenement'])->name('admin.evenements.destroy');


    Route::get('/admin/urgences', [AdminController::class, 'indexUrgences'])->name('admin.urgences.index');
    Route::get('/admin/urgences/create', [AdminController::class, 'createUrgences'])->name('admin.urgences.create');
    Route::post('/admin/urgences', [AdminController::class, 'storeUrgences'])->name('admin.urgences.store');
    Route::get('/admin/urgences/{urgence}/edit', [AdminController::class, 'editUrgences'])->name('admin.urgences.edit');
    Route::put('/admin/urgences/{urgence}', [AdminController::class, 'updateUrgences'])->name('admin.urgences.update');
    Route::delete('/admin/urgences/{urgence}', [AdminController::class, 'destroyUrgences'])->name('admin.urgences.destroy');
});

Route::middleware(['auth','client'])->group(function () {
    Route::get('/clients/index', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/clients', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/clients', [ClientController::class, 'destroy'])->name('clients.destroy');
});


require __DIR__.'/auth.php';
