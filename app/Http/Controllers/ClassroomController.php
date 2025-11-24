<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = Classroom::withCount('students')->paginate(10);

        return view("admin.classroom.classroom", [
            "title" => "Classroom",
            "classrooms" => $classrooms
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
        $student = Classroom::create($request->all());
        return back()->with('success-create', "Classroom Data Berhasil di Ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Classroom $classroom)
    {
        return response()->json($classroom);
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
        Classroom::find($id)->update($request->all());
        return back()->with('success-update', "Classroom Data Berhasil di Update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {}
}
