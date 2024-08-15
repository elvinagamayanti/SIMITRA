<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        return view('pegawai', compact('user')); // Mengirim data ke view
    }

    public function add()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang login
        return view('addpegawai', compact('user')); // Mengirim data ke view
    }

    public function edit()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang login
        return view('editpegawai', compact('user')); // Mengirim data ke view
    }
}

