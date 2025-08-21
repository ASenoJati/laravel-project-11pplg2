<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        return view("beranda");
    }

    public function kontak()
    {
        return view("kontak");
    }

    public function profil()
    {
        $data = [
            "nama" => "A. Seno Jati",
            "kelas" => "11 PPLG 2",
            "sekolah" => "SMK Raden Umar Said Kudus"
        ];

        return view("profil", $data);
    }
}
