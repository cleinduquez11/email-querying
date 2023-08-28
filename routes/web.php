<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobApplicationController;
use App\Models\JobApplication;
use Illuminate\Http\Request;


Route::get('/', function () {
    return redirect(route('JobApplication.index'));
  
});

Route::get('/jobs', function(){
  $data = JobApplication::all();
  
  return response()->json(["data" =>$data]);
});


Route::get('/delete', function(){
  $data = JobApplication::query()->delete();
  return redirect(route('JobApplication.index'))->with(
          'success', 'All Querries Deleted Successfully'
          );
})->name('delete');


Route::resource('JobApplication',JobApplicationController::class);