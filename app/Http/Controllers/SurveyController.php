<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    protected $user;
    protected $survey;

    public function __construct()
    {
        $this->user = Auth::user(); // Mendapatkan data pengguna yang login

        // Data dummy untuk detail survei
        $this->surveys = [
            [
                'name' => 'Survei Dummy',
                'kode' => '123',
                'ketua_tim' => 'Anna Dewanta',
                'tanggal_mulai' => '2024-01-01',
                'tanggal_berakhir' => '2024-01-31',
            ],
            [
                'name' => 'Survei Dummy 2',
                'kode' => '456',
                'ketua_tim' => 'Budi Santoso',
                'tanggal_mulai' => '2024-02-01',
                'tanggal_berakhir' => '2024-02-28',
            ]
        ];
    }

    public function index()
    {
        return view('survey', [
            'user' => $this->user,
            'surveys' => $this->surveys
        ]); // Mengirim data ke view
    }

    public function add()
    {
        return view('addsurvey', ['user' => $this->user]); // Mengirim data ke view
    }

    public function show($id)
    {
        $survey = $this->surveys[$id - 1] ?? null;

        return view('surveydetail', [
            'user' => $this->user,
            'survey' => $survey
        ]);
    }
}
