<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\ProjectToolController;
use App\Http\Controllers\ProjectOrderController;
use App\Http\Controllers\ProjectScreenshotController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details/{project:slug}', [FrontController::class, 'details'])->name('front.details');
Route::get('/booking', [FrontController::class, 'booking'])->name('front.booking');
Route::post('/booking/save', [FrontController::class, 'store'])->name('front.booking.store');

Route::get('/services', [FrontController::class, 'services'])->name('front.services');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('projects', ProjectController::class);

        Route::resource('tools', ToolController::class);
        
        Route::resource('project_orders', ProjectOrderController::class);

        Route::resource('project_tools', ProjectToolController::class);
        Route::get('/tools/assign/{project}', [ProjectToolController::class, 'create'])->name('project.assign.tool');
        Route::post('/tools/assign/save/{project}', [ProjectToolController::class, 'store'])->name('project.assign.tool.store');
        
        Route::resource('project_screenshots', ProjectScreenshotController::class);
        Route::get('/screenshot/{project}', [ProjectScreenshotController::class, 'create'])->name('project_screenshots.create');
        Route::post('/screenshot/save/{project}', [ProjectScreenshotController::class, 'store'])->name('project_screenshots.store');

    });
    
});

require __DIR__.'/auth.php';
