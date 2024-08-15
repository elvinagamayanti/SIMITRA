<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitraController extends Controller
{
    public function index()
    {
        $user = Auth::user(); 
        return view('mitra', compact('user')); // Mengirim data ke view
    }

    public function add()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang login
        return view('addmitra', compact('user')); // Mengirim data ke view
    }
    public function edit()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang login
        return view('editmitra', compact('user')); // Mengirim data ke view
    }

}

