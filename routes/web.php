<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\EvidenceController;
use App\Http\Controllers\HypothesisController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoryController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::group(['middleware' => ['level:manager,user', 'auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/evidence', EvidenceController::class);
    Route::resource('/hypothesis', HypothesisController::class);
    Route::get('/rule', [RuleController::class, 'index'])->name('rule.index');
    Route::post('/store-rule', [RuleController::class, 'store'])->name('rule.store');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/setting', [SettingController::class, 'save'])->name('setting.save');
    Route::post('/value', [SettingController::class, 'saveValue'])->name('value.save');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::patch('/profile/{user}', [DashboardController::class, 'profile_update'])->name('profile.update');
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
    Route::post('/history/update-accuracy', [DashboardController::class, 'updateAccuracy'])->name('history.update-accuracy');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['level:manager', 'auth']], function () {
    Route::resource('/user', UserController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [DashboardController::class, 'login'])->name('login');
    Route::post('/login-process', [DashboardController::class, 'login_process'])->name('login_process');
});

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/expert-system', [DashboardController::class, 'expert_system'])->name('expert-system');
Route::post('/expert-system', [DashboardController::class, 'expert_system_post'])->name('expert-system-post');