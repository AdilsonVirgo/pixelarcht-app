<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotographyController;

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
/**/
 
Route::controller(PhotographyController::class)->group(function () {
    Route::get('/photos', 'index');
    Route::get('/photos/{id}', 'show');
    Route::get('/upload', 'create');
    Route::post('/photos', 'store');
}); 


/**/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*
GET/contacts, mapped to the index() method,
GET /contacts/create, mapped to the create() method,
POST /contacts, mapped to the store() method,
GET /contacts/{contact}, mapped to the show() method,
GET /contacts/{contact}/edit, mapped to the edit() method,
PUT/PATCH /contacts/{contact}, mapped to the update() method,
DELETE /contacts/{contact}, mapped to the destroy() method.
*/
