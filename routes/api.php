<?php

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/student/token', function () {
    return ['token' => Student::findOrFail(1)?Student::findOrFail(1)->createToken('dev')->plainTextToken:null];
});
Route::post('/teacher/token', function () {
    return ['token' => Teacher::findOrFail(1)?Teacher::findOrFail(1)->createToken('dev')->plainTextToken:null];
});
Route::post('/admin/token', function () {
    return ['token' => Admin::findOrFail(1)?Admin::findOrFail(1)->createToken('dev')->plainTextToken:null];
});
Route::middleware('auth:students_api')->get('/students/me', fn () => request()->user());
Route::middleware('auth:teachers_api')->get('/teachers/me', fn () => request()->user());
Route::middleware('auth:admins_api')->get('/admins/me',   fn () => request()->user());

