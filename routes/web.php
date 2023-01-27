<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anoController;
use Illuminate\Support\Facades\DB;


///////////   IMPORT CSV   //////////////
Route::get('/', function () {
    return view('import');
});
Route::match(['get','post'],'importFile',[anoController::class,'import']);
Route::get('/excelview',[anoController::class,'excelview']);
Route::get('pdfex',[anoController::class,'generatepdfex']);