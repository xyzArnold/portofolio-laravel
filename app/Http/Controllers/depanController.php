<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\riwayat;
use Illuminate\Http\Request;

class depanController extends Controller
{
    public function index()
    {
        $about_id = get_meta_value('_halamanAbout');
        $about_data = halaman::where('id', $about_id)->first();

        $interest_id = get_meta_value('_halamanInterest');
        $interest_data = halaman::where('id', $interest_id)->first();

        $awards_id = get_meta_value('_halamanAwards');
        $awards_data = halaman::where('id', $awards_id)->first();

        $experience_data = riwayat::where('tipe', 'experience')->get();
        $education_data = riwayat::where('tipe', 'education')->orderBy('tgl_mulai')->get();

        return view('depan.index')->with([
            'about' => $about_data,
            'interest' => $interest_data,
            'awards' => $awards_data,
            'experience' => $experience_data,
            'education' => $education_data
        ]);
    }
    
}