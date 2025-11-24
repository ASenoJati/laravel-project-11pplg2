<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Guardian;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $angkatan = [
            '10' => Student::whereHas('classroom', function ($q) {
                $q->where('name', 'like', '10%');
            })->count(),

            '11' => Student::whereHas('classroom', function ($q) {
                $q->where('name', 'like', '11%');
            })->count(),

            '12' => Student::whereHas('classroom', function ($q) {
                $q->where('name', 'like', '12%');
            })->count(),
        ];

        return view("admin.dashboard", [
            "totalStudents" => Student::count(),
            "totalTeachers" => Teacher::count(),
            "totalClasses" => Classroom::count(),
            "totalGuardian" => Guardian::count(),
            "totalSubject" => Subject::count(),
            "studentByClass" => Classroom::withCount('students')->orderBy('id', 'asc')->get(),
            "angkatan" => $angkatan
        ]);
    }
}
