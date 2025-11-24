<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::paginate(10);

        return view("admin.subject.subject", [
            "title" => "Subject",
            "subjects" => $subjects
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
        $subject = Subject::create($request->all());
        return back()->with('success-create', "Subject Data Berhasil di Ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return response()->json($subject);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Subject::find($id)->update($request->all());
        return back()->with('success-update', "Subject Data Berhasil di Update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return back()->with('success-delete', "Student Data Berhasil di Hapus");
    }
}
