<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ClassroomStudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\ExamResultController;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return "hello from api";
});

Route::apiResource('user', UserController::class);

// Students Routes
Route::apiResource('student', StudentController::class);

// Teachers Routes
Route::apiResource('teacher', TeacherController::class);

// Parents Routes
Route::apiResource('parent', ParentController::class);

// Courses Routes
Route::apiResource('course', CourseController::class);

// Grades Routes
Route::apiResource('grade', GradeController::class);

// Classrooms Routes
Route::apiResource('classroom', ClassroomController::class);

// Classroom_Student Routes
Route::apiResource('classroom_student', ClassroomStudentController::class);

// Attendance Routes
Route::apiResource('attendance', AttendanceController::class);

// Exams Routes
Route::apiResource('exam', ExamController::class);

// Exam Types Routes
Route::apiResource('exam_type', ExamTypeController::class);

// Exam Results Routes
Route::apiResource('exam_results', ExamResultController::class);

// Route::get('/user', [UserController::class, 'show']);
// Route::post('/user', [UserController::class, 'create']);
// Route::put('/user', [UserController::class, 'update']);
// Route::delete('/user', [UserController::class, 'delete']);

