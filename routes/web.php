<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth/register');
});




Route::get('register', [App\Http\Controllers\Auth\RegisterController::class,'register']);
Route::post('postregister', [App\Http\Controllers\Auth\RegisterController::class,'postregister'])->name('postregister');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class,'login']);
Route::post('postlogin', [App\Http\Controllers\Auth\LoginController::class,'postlogin'])->name('postlogin');

Route::get('profile', [App\Http\Controllers\Auth\LoginController::class,'profile'])->name('profile');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

//attendece
Route::get('attendence', [App\Http\Controllers\AttendanceController::class,'Index'])->name('attendence');
Route::get('CreateAttendence', [App\Http\Controllers\AttendanceController::class,'create'])->name('CreateAttendence');
Route::post('StoreAttendence', [App\Http\Controllers\AttendanceController::class,'store'])->name('StoreAttendence');
Route::get('ShowAttendence', [App\Http\Controllers\AttendanceController::class,'show'])->name('ShowAttendence');
Route::get('EditAttendence/{id}', [App\Http\Controllers\AttendanceController::class,'edit'])->name('EditAttendence');
Route::post('UpdateAttendence/{id}', [App\Http\Controllers\AttendanceController::class,'update'])->name('UpdateAttendence');
Route::delete('DeleteAttendence/{id}', [App\Http\Controllers\AttendanceController::class,'destory'])->name('DeleteAttendence');
Route::post('Approve', [App\Http\Controllers\AttendanceController::class,'Approve'])->name('approve.attendance');
Route::post('approve-attendance', [AttendanceController::class, 'approveAttendance'])->name('approve.attendance');


//Classroom

Route::get('classroom', [App\Http\Controllers\AttendanceController::class,'Index'])->name('classroom');
Route::get('classroom_create', [App\Http\Controllers\AttendanceController::class,'create'])->name('classroom_create');
Route::post('classroom_store', [App\Http\Controllers\AttendanceController::class,'store'])->name('classroom_store');
Route::get('classroom_show', [App\Http\Controllers\AttendanceController::class,'show'])->name('classroom_show');
Route::get('classroom_edit/{id}', [App\Http\Controllers\AttendanceController::class,'edit'])->name('classroom_edit');
Route::post('classroom_update/{id}', [App\Http\Controllers\AttendanceController::class,'update'])->name('classroom_update');
Route::delete('classroom_delete/{id}', [App\Http\Controllers\AttendanceController::class,'destory'])->name('classroom_delete');



//COURSE

Route::get('courses', [App\Http\Controllers\AttendanceController::class,'Index'])->name('courses');
Route::get('courses_create', [App\Http\Controllers\AttendanceController::class,'create'])->name('courses_create');
Route::post('courses_store', [App\Http\Controllers\AttendanceController::class,'store'])->name('courses_store');
Route::get('courses_show', [App\Http\Controllers\AttendanceController::class,'show'])->name('courses_show');
Route::get('courses_edit/{id}', [App\Http\Controllers\AttendanceController::class,'edit'])->name('courses_edit');
Route::post('courses_update/{id}', [App\Http\Controllers\AttendanceController::class,'update'])->name('courses_update');
Route::delete('courses_delete/{id}', [App\Http\Controllers\AttendanceController::class,'destory'])->name('courses_delete');


//EXAM

Route::get('exam', [App\Http\Controllers\AttendanceController::class,'Index'])->name('exam');
Route::get('exam_create', [App\Http\Controllers\AttendanceController::class,'create'])->name('exam_create');
Route::post('exam_store', [App\Http\Controllers\AttendanceController::class,'store'])->name('AddAttendencexam_store');
Route::get('exam_show', [App\Http\Controllers\AttendanceController::class,'show'])->name('exam_show');
Route::get('exam_edit/{id}', [App\Http\Controllers\AttendanceController::class,'edit'])->name('exam_edit');
Route::post('exam_update/{id}', [App\Http\Controllers\AttendanceController::class,'update'])->name('exam_update');
Route::delete('exam_delete/{id}', [App\Http\Controllers\AttendanceController::class,'destory'])->name('exam_delete');


//EXAMTYPE

Route::get('exam_type', [App\Http\Controllers\AttendanceController::class,'Index'])->name('exam_type');
Route::get('exam_type_create', [App\Http\Controllers\AttendanceController::class,'create'])->name('exam_type_create');
Route::post('exam_type_store', [App\Http\Controllers\AttendanceController::class,'store'])->name('exam_type_store');
Route::get('exam_type_show', [App\Http\Controllers\AttendanceController::class,'show'])->name('exam_type_show');
Route::get('exam_type_edit/{id}', [App\Http\Controllers\AttendanceController::class,'edit'])->name('exam_type_edit');
Route::post('exam_type_update/{id}', [App\Http\Controllers\AttendanceController::class,'update'])->name('exam_type_update');
Route::delete('exam_type_delete/{id}', [App\Http\Controllers\AttendanceController::class,'destory'])->name('exam_type_delete');



//GRADE

Route::get('grade', [App\Http\Controllers\AttendanceController::class,'Index'])->name('grade');
Route::get('grade_create', [App\Http\Controllers\AttendanceController::class,'create'])->name('grade_create');
Route::post('grade_store', [App\Http\Controllers\AttendanceController::class,'store'])->name('grade_store');
Route::get('grade_show', [App\Http\Controllers\AttendanceController::class,'show'])->name('grade_show');
Route::get('grade_edit/{id}', [App\Http\Controllers\AttendanceController::class,'edit'])->name('grade_edit');
Route::post('grade_update/{id}', [App\Http\Controllers\AttendanceController::class,'update'])->name('grade_update');
Route::delete('grade_delete/{id}', [App\Http\Controllers\AttendanceController::class,'destory'])->name('grade_delete');


//STUDENT

Route::get('student', [App\Http\Controllers\AttendanceController::class,'Index'])->name('student');
Route::get('student_create', [App\Http\Controllers\AttendanceController::class,'create'])->name('student_create');
Route::post('student_store', [App\Http\Controllers\AttendanceController::class,'store'])->name('student_store');
Route::get('student_show', [App\Http\Controllers\AttendanceController::class,'show'])->name('student_show');
Route::get('student_edit/{id}', [App\Http\Controllers\AttendanceController::class,'edit'])->name('student_edit');
Route::post('student_update/{id}', [App\Http\Controllers\AttendanceController::class,'update'])->name('student_update');
Route::delete('student_delete/{id}', [App\Http\Controllers\AttendanceController::class,'destory'])->name('student_delete');


//STUDENT CLASSROOM

Route::get('student_classroom', [App\Http\Controllers\AttendanceController::class,'Index'])->name('student_classroom');
Route::get('student_classroom_create', [App\Http\Controllers\AttendanceController::class,'create'])->name('student_classroom_create');
Route::post('student_classroom_store', [App\Http\Controllers\AttendanceController::class,'store'])->name('student_classroom_store');
Route::get('student_classroom_show', [App\Http\Controllers\AttendanceController::class,'show'])->name('student_classroom_show');
Route::get('student_classroom_edit/{id}', [App\Http\Controllers\AttendanceController::class,'edit'])->name('student_classroom_edit');
Route::post('student_classroom_update/{id}', [App\Http\Controllers\AttendanceController::class,'update'])->name('student_classroom_update');
Route::delete('student_classroom_delete/{id}', [App\Http\Controllers\AttendanceController::class,'destory'])->name('student_classroom_delete');
