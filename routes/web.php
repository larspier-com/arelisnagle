<?php

use App\Http\Livewire\Profile;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\UserProfile;
use App\Http\Livewire\FilesUploaded;
use App\Http\Livewire\MedicalProfile;
use App\Http\Livewire\UserManagement;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\PersonalReferences;
use App\Http\Controllers\ProfileController;

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
})->name('welcome');

Route::get('/tall-crud', function () {
    return view('vendor.tall-crud-generator.tall-crud-generator');
})->name('tall-crud');

Route::get('dragonesamarillos', function () {
    return view('dragonesamarillos');
})->name('dragonesamarillos');

Route::get('/prueba', function () {
    return view('prueba');
})->middleware(['auth', 'verified'])->name('prueba');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/user-management', UserManagement::class)->name('user-management');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/files-uploaded', FilesUploaded::class)->name('files-uploaded');
    Route::get('/user-profile', UserProfile::class)->name('user-profile');
    Route::get('/personal-references', PersonalReferences::class)->name('personal-references');
    Route::get('/medical-profile', MedicalProfile::class)->name('medical-profile');
    Route::get('/profile-edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile-destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
