<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    if(Auth::user()->role=="admin"){
        return view("admin.index");
    }
    else{
        return view('dashboard');
    }
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::middleware(['auth', 'role:admin'])->group(function(){

    Route::get("/admin/dashboard", [AdminController::class, 'AdminDashboard'])->name("admin.dashboard");
    Route::get("/admin/dashboard/email/inbox", [AdminController::class, 'AdminDashboardInbox'])->name("admin.dashboard.inbox");
    Route::get("/admin/logout", [AuthenticatedSessionController::class, 'Admindestroy'])->name("admin.logout");
    Route::get("/admin/profile", [AdminController::class, 'AdminProfile'])->name('admin.profile');

});

Route::get("/admin/login", [AuthenticatedSessionController::class, 'AdminLogin'])->name("admin.login");

Route::middleware(['auth', 'role:agent'])->group(function(){
    Route::get("/agent/dashboard", [AgentController::class, 'AgentDashboard'])->name("agent.dashboard");
});