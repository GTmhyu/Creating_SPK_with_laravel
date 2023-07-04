<?php

namespace App\Http\Controllers;

use App\Models\peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Unique;
use PhpParser\Node\Stmt\Return_;

class pesertaController extends Controller
{
    /** gggg
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci; 
        $jumlahbaris = 4;
        if (strlen($katakunci)) {
            $data = peserta::where('nik','like',"%$katakunci%")
            ->orWhere('nama','like',"%$katakunci%")
            ->orWhere('umur','like',"%$katakunci%")
            ->paginate($jumlahbaris);
        } else {
        $data = peserta::orderBy('nik','desc')->paginate($jumlahbaris);
        }
        return view ('peserta.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nik',$request->nik);
        Session::flash('nama',$request->nama);
        Session::flash('umur',$request->umur);
        Session::flash('kekuatan',$request->kekuatan);
        Session::flash('ketahanan',$request->ketahanan);
        Session::flash('kelenturan',$request->kelenturan);
        Session::flash('prestasi',$request->prestasi);

        $validasidata = $request->validate([
            'nik'=>'required|numeric|unique:peserta,nik',
            'nama'=>'required',
            'umur'=>'required',
            'kekuatan'=>'required',
            'ketahanan'=>'required',
            'kelenturan'=>'required',
            'prestasi'=>'required',
        ],[
            'nik.required'=>'Isi niknya bang messi!! ',
            'nik.numeric'=>'Harus angka! ',
            'nik.unique'=>'Nik Udah ada yg punya ',
            'nama.required'=>'mo gw kasih nama bang mesi?? ',
            'umur.required'=>'umur Di isi ya bambank ',
            'kekuatan.required'=>'Data wajib di isi',
            'ketahanan.required'=>'Data wajib di isi !',
            'kelenturan.required'=>'Data wajib di isi !',
            'prestasi.required'=>'Data wajib di isi !',
        ]
    );

         $data = [
             'nik'=>$request->nik,
             'nama'=>$request->nama,
             'umur'=>$request->umur,
             'kekuatan'=>$request->kekuatan,
             'ketahanan'=>$request->ketahanan,
             'kelenturan'=>$request->kelenturan,
             'prestasi'=>$request->prestasi,
         ];
        peserta::create($validasidata);
        return redirect('/create')->with('success','Berhasil menambahkan data !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = peserta::where('nik',$id)->first();
        return view('peserta.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'umur'=>'required',
            'kekuatan'=>'required',

        ],[
            'nama.required'=>'mo gw kasih nama bang mesi?? ',
            'umur.required'=>'umur Di isi ya bambank ',
        ]
    );

        $data = [
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'kekuatan'=>$request->kekuatan,
            'ketahanan'=>$request->ketahanan,
            'kelenturan'=>$request->kelenturan,
            'prestasi'=>$request->prestasi,
            
        ];
        peserta::where('nik',$id)->update($data);
        return redirect()->to('peserta')->with('success','Data berhasil di perbarui !');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         peserta::where('nik',$id)->delete();
         return redirect()->to('peserta')->with('success','Berhasil menghapus data');
    }
}
