<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    echo 'welcoome';
});

Route::get('introduction', function() {
    $name = 'AZ';
    $age = 90;
    $firstname = 'Marina';
    return view('introduction', ['name' => $name, 'age' => $age, 'firstname' => $firstname]);
});

//Route::get('students', 'StudentController@index');
Route::get('students', [StudentsController:: class, 'index' ]);
Route::get('students/create', [StudentsController:: class, 'create']);
Route::post('students', [StudentsController:: class, 'store']);
