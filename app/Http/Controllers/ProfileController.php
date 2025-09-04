<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        return view("beranda", [
            "title" => "dashboard",
        ]);
    }

    public function kontak()
    {
        return view("kontak", [
            "title" => "Kontak"
        ]);
    }

    public function profil()
    {
        return view("profil", [
            "nama" => "A. Seno Jati",
            "kelas" => "11 PPLG 2",
            "sekolah" => "SMK Raden Umar Said Kudus",
            "title" => "Profil"
        ]);
    }

    public function home()
    {
        return view("home", [
            "title" => "Home"
        ]);
    }
}
