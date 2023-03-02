<?php

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminDepartment;
use App\Http\Livewire\Admin\AdminEmploye;
use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

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

Route::get('/', AdminDashboard::class)->name('dashboard');
Route::get('/department', AdminDepartment::class)->name('department');
Route::get('/employe', AdminEmploye::class)->name('employe');
