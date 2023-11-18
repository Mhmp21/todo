<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
=======
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\todocontroller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
>>>>>>> 34415bd (yrexuytifvyuhuih)

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
<<<<<<< HEAD
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/p', function () {
    return view('green' , ["name" => "<u>hi mohammad hosin</u>"]);
});
=======
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
// Route::get('index', function () {
//     return view('todos.index');
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::get('/', [todocontroller::class, 'index'])->name('todos.index');

Route::get('/todos/create', [todocontroller::class, 'create'])->name('todos.create');

Route::get('/todos/{todo}', [todocontroller::class, 'show'])->name('todos.show');

Route::post('/todos', [todocontroller::class,'store'])->name('todos.store');

Route::get('/todos/{todo}/edit', [todocontroller::class,'edit'])->name('todos.edit');

Route::post('/todos/{todo}', [todocontroller::class,'update'])->name('todos.update');

Route::delete('/todos/{todo}', [todocontroller::class,'delete'])->name('todos.delete');

Route::get('/todos/{todo}/complate', [todocontroller::class,'complate'])->name('todos.complate');

>>>>>>> 34415bd (yrexuytifvyuhuih)
