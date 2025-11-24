<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::paginate(10);
        $subjects = Subject::all();

        return view("admin.teacher.teacher", [
            "title" => "Teacher",
            "teachers" => $teachers,
            "subjects" => $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Teacher::create($request->all());
        return back()->with('success-create', "Teacher Data Berhasil di Ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return response()->json($teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Teacher::find($id)->update($request->all());
        return back()->with('success-update', "Teacher Data Berhasil di Update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back()->with('success-delete', "Teacher Data Berhasil di Hapus");
    }
}
