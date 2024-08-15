<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang login
        return view('survey', compact('user')); // Mengirim data ke view
    }

    public function add()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang login
        return view('addsurvey', compact('user')); // Mengirim data ke view
    }

}
