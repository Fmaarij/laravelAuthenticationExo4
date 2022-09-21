<?php

use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/role', [RoleController::class,'index'])->name('role');
Route::get('/createrole', [RoleController::class,'create'])->name('createrole');
Route::post('/storerole', [RoleController::class,'store']);
Route::delete('/del/{id}', [RoleController::class,'destroy']);





// Route::get('/', function () {
//     return view('welcome');
// });




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');




// Route::get('/role', [RoleController::class,'index'])->middleware(['auth'])->name('role');

// Route::get('/createrole', [RoleController::class,'create'])->name('createrole');
// Route::get('/storerole', [RoleController::class,'store']);

// require __DIR__.'/auth.php';
