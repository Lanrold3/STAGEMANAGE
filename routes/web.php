<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StageRequestController;
use App\Http\Controllers\RecoverReport;
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
    return view('index',["requestSend"=>0]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//STAGEMANAGE
//Route::get("",[EmailStageRequestValidatedController::class,""])->name("sendRequestValidateMail");
//Route::get("",[EmailStageRequestValidatedController::class,""])->name("sendMassiveRequestValidateMail");
Route::view("/home1","index",["requestSend"=>0])->name("home1");
Route::get("/stage/request",function(){return view("request_form");})->name("stageRequest_form");
Route::post("stage/request/store",[StageRequestController::class,"store"])->name("stageRequestSore");


//RECOVER
Route::get("/stage/report/get",function(){return view("report_form");})->name("stageReport_form");
Route::post("stage/report/store",[RecoverReport::class,"store"])->name("Report_store");


require __DIR__.'/auth.php';
