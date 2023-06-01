<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProfileController,
    UserController};

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

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * -----------------------------------------------
 *                  | Usuários |
 * -----------------------------------------------
 */
Route::get('/usuarios',[UserController::class, 'index'])
        ->name('usuario.index');

Route::get('/usuarios/novo',[UserController::class, 'create'])
        ->name('usuario.create');

Route::get('/usuarios/{id}',[UserController::class,'show'])
        ->name('usuario.show');

Route::post('/usuarios/cadastrar',[UserController::class, 'store'])
        ->name('usuario.store');



require __DIR__.'/auth.php';
