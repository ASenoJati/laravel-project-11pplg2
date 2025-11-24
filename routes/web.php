<?php

use App\Exports\ClassroomsExport;
use App\Exports\GuardiansExport;
use App\Exports\StudentsExport;
use App\Exports\SubjectsExport;
use App\Exports\TeachersExport;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/student', [StudentController::class, 'index']);
// Route::get('/profil', [ProfileController::class, 'index']);
// Route::get('/kontak', [KontakController::class, 'index']);
// Route::get('/guardian', [GuardianController::class, 'index']);
// Route::get('/classroom', [ClassroomController::class, 'index']);
// Route::get('/teacher', [TeacherController::class, 'index']);
// Route::get('/subject', [SubjectController::class, 'index']);

Route::get('/dashboard', [HomeController::class, 'index']);

Route::resource('/dashboard/student', StudentController::class);
Route::resource('/dashboard/guardian', GuardianController::class);
Route::resource('/dashboard/classroom', ClassroomController::class);
Route::resource('/dashboard/teacher', TeacherController::class);
Route::resource('/dashboard/subject', SubjectController::class);

// Exports Data
Route::get('/export/student', function () {
    return Excel::download(new StudentsExport, 'Students Data.xlsx');
});

Route::get('/export/guardian', function () {
    return Excel::download(new GuardiansExport, 'Guardians Data.xlsx');
});

Route::get('/export/classroom', function () {
    return Excel::download(new ClassroomsExport, 'Classrooms Data.xlsx');
});

Route::get('/export/teacher', function () {
    return Excel::download(new TeachersExport, 'Teachers Data.xlsx');
});

Route::get('/export/subject', function () {
    return Excel::download(new SubjectsExport, 'Subject Data.xlsx');
});
