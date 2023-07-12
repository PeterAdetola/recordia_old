<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InstantRecordController;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
    // return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// --------------| Instant Records |----------------------------------------

Route::get('/instant_records', [InstantRecordController::class, 'show'])->name('instantRecords');

Route::post('/save/donation', [InstantRecordController::class, 'saveDonation'])->name('save.donation');
Route::post('/save/expense', [InstantRecordController::class, 'saveExpense'])->name('save.expense');

Route::post('/update/transaction', [InstantRecordController::class, 'updateTransaction'])->name('update.transaction');

// --------------| About Testimonial |----------------------------------------

Route::controller(TestimonialController::class)->group(function () 
{
    Route::get('/view/testimonials', 'GetTestimonials')->name('view.testimonials');
    Route::get('/create/testimonial', 'CreateTestimonial')->name('create.testimonial');
    Route::post('/save/testimonial', 'SaveTestimonial')->name('save.testimonial');
    Route::get('/edit/testimonial/{id}', 'EditTestimonial')->name('edit.testimonial'); 
    Route::post('/update/testimonial', 'UpdateTestimonial')->name('update.testimonial'); 
    Route::get('/delete/testimonial/{id}', 'DeleteTestimonial')->name('delete.testimonial');   
});

Route::get('/allrecords', function () {
    return view('admin.records.allrecords');
})->name('allrecords');

// Route::get('/instant_records', function () {
//     return view('admin.records.instant_records');
// })->name('instant_records');

// Route::resource('instant_record', 'InstantRecordController');

require __DIR__.'/auth.php';
