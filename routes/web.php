<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ExcelController;

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

// Imports
Route::post('import/array', [ImportController::class, 'array'])->name('import.array');
Route::post('import/excel', [ImportController::class, 'excel'])->name('import.excel');
Route::post('import/spatie', [ImportController::class, 'spatie'])->name('import.spatie');
Route::post('import/fast-excel', [ImportController::class, 'fastExcel'])->name('import.fast-excel');

// Exports
Route::get('export/array', [ExportController::class, 'array'])->name('export.array');
Route::get('export/excel', [ExportController::class, 'excel'])->name('export.excel');
Route::get('export/spatie', [ExportController::class, 'spatie'])->name('export.spatie');
Route::get('export/fast-excel', [ExportController::class, 'fastExcel'])->name('export.fast-excel');

Route::middleware('auth')->group(function () {

    Route::get('/', function () { return view('home'); })->name('home');
    
    Route::get('upload1', function () { return view('upload1'); })->name('upload1');
    Route::get('upload2', function () { return view('upload2'); })->name('upload2');
    Route::get('upload3', function () { return view('upload3'); })->name('upload3');
    Route::get('upload4', function () { return view('upload4'); })->name('upload4');
    Route::get('upload5', function () { return view('upload5'); })->name('upload5');
    Route::get('upload0', function () { return view('upload0'); })->name('upload0');
    Route::get('uploadEx1', function () { return view('uploadEx1')->with('file_type','csv'); })->name('uploadEx1');

    Route::post('excel/upload1', [ExcelController::class, 'upload1']);
    Route::post('excel/upload2', [ExcelController::class, 'upload2']);
    Route::post('excel/upload3', [ExcelController::class, 'upload3']);
    Route::post('excel/upload4', [ExcelController::class, 'upload4']);
    Route::post('excel/upload5', [ExcelController::class, 'upload5']);
    Route::post('excel/upload0', [ExcelController::class, 'upload0']);
    Route::post('excel/uploadEx1', [ExcelController::class, 'uploadEx1'])->name('uploadEx1_post');

    
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__ . '/auth.php';
