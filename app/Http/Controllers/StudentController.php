<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(10);
        $classrooms = Classroom::all();

        return view("admin.student.student", [
            "title" => "Student",
            "students" => $students,
            "classrooms" => $classrooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return back()->with('success-create', "Student Data Berhasil di Ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::find($id)->update($request->all());
        return back()->with('success-update', "Student Data Berhasil di Update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back()->with('success-delete', "Student Data Berhasil di Hapus");
    }
}
