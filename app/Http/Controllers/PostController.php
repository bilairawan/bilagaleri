<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
        return view('post');
    }

    public function store(Request $request)
    {
        return $request->file('image')->store('foto');
        // Validasi, 3 field ini diperlukan
        // Jika ada yang kurang, di redirect ke halaman sebelumnya dengan error
        $validated = $request->validate([
            'judul_foto' => ['required'],
            'deskripsi_foto' => ['required'],
            'tanggal_unggah' => ['required'],
            'lokasi_file' => ['required'],
        ]);

        // Acak nama gambar
        // Alasan acak nama gambar agar tidak ada 2 gambar dengan nama yang sama
        $foto = $request->file('image')->hashName();

        // Taruh nama gambar baru ke array validated untuk nanti disimpan ke database
        $validated['image'] = $foto;
        
        // Simpan gambar di folder public/news dengan nama yang diacak tadi
        $fotoDirectory = public_path() . '/foto';
        $request->file('image')->move($fotoDirectory, $foto);
        
        // insert row baru di table news dengan data didalam validated
        post::create($validated);

        // Redirect ke halaman index
        return redirect()->route('foto')->with('success', 'Foto berhasil diunggah.');
    }

}
