<?php

namespace App\Http\Controllers;
use App\Models\peserta;
use App\Models\Normalisasi;
use App\Models\Hasil;




use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $data = Hasil::with('peserta')->get();
        return view('admin.dashboard', [
            'hasil'=>$data
        ]);
    }
    public function normalisasi(){
        $data = Normalisasi::get() ;
        return view('admin.normalisasi', [
            'hasil'=>$data
        ]);
    }
}
