<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guardians = Guardian::paginate(10);

        return view("admin.guardian.guardian", [
            "title" => "Guardian",
            "guardians" => $guardians
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
        $guardian = Guardian::create($request->all());
        return back()->with('success-create', "Guardian Data Berhasil di Ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Guardian $guardian)
    {
        return response()->json($guardian);
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
        Guardian::find($id)->update($request->all());
        return back()->with('success-update', "Guardian Data Berhasil di Update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guardian $guardian)
    {
        $guardian->delete();
        return back()->with('success-delete', "Guardian Data Berhasil di Hapus");
    }
}
