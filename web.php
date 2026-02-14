<?php




use App\Http\Controllers\AuthController; // ← TAMBAHKAN INI
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController; 
use App\Http\Controllers\RoomMasterController; // <-- TAMBAHAN: Import ini wajib ada!


Route::get('/inventory/scan', [InventoryController::class, 'scanForm'])->name('inventory.scan');
Route::post('/inventory/scan', [InventoryController::class, 'scanStore'])->name('inventory.scan.store');

Route::get('/', function () {
    return view('welcome');
});

//Dashboard
Route::get('/admindashboard', function () {
    return view('AdminDashboard');
})->middleware('auth')->name('admin.dashboard');

// Login
Route::get('/login', function () {
    return view('login'); // sesuaikan dengan nama file kamu
})->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::resource('inventory', InventoryController::class)
    ->middleware('auth');


 // profil
Route::get('/profil', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('profil');





