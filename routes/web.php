<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PacienteController;
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
    return view('auth.login');
});

// Admin ALl Route
Route::controller(AdminController::class)->group(function () {
    Route::get('admin/logout', 'destroy')->name('admin.logout');
});

// Rutas Pacientes
Route::controller(PacienteController::class)->group(function () {
    Route::get('admin/pacientes', 'index')->name('pacientes.index');
    Route::get('admin/pacientes/create', 'create')->name('pacientes.create');
    Route::post('admin/pacientes/store', 'store')->name('pacientes.store');
});

// Rutas Doctores
Route::controller(DoctorController::class)->group(function () {
    Route::get('admin/doctores', 'index')->name('doctores.index');
    Route::get('admin/doctores/create', 'create')->name('doctores.create');
    Route::post('admin/doctores/store', 'store')->name('doctores.store');
});

// Rutas Citas
Route::controller(CitaController::class)->group(function () {
    Route::get('admin/citas', 'index')->name('citas.index');
    Route::get('admin/citas/create', 'create')->name('citas.create');
    Route::post('admin/citas/store', 'store')->name('citas.store');
    Route::get('admin/citas/show/{cita}', 'show')->name('citas.show');
});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
