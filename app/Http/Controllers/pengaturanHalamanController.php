<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class pengaturanHalamanController extends Controller
{
    public function index()
    {
        $dataHalaman = halaman::orderBy('judul', 'asc')->get();
        return view('dashboard.pengaturanHalaman.index')->with('dataHalaman', $dataHalaman);
    }

    public function update(Request $request)
    {
        metadata::updateOrCreate(['meta_key' => '_halamanAbout' ], ['meta_value' => $request->_halamanAbout]);
        metadata::updateOrCreate(['meta_key' => '_halamanInterest' ], ['meta_value' => $request->_halamanInterest]);
        metadata::updateOrCreate(['meta_key' => '_halamanAwards' ], ['meta_value' => $request->_halamanAwards]);
        return redirect()->route('pengaturanHalaman.index')->with('success', 'Berhasil Update Data Pengaturan Halaman');
    }
}