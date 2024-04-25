<?php

namespace App\Http\Controllers;
use App\Models\Komentar;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Date;

class KomentarController extends Controller
{
    public function index() {
        $komens = Komentar::all();
        return view('album', [
            "komens" => $komens
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'isi_komentar' => 'required',
            'foto_id' => 'required'

        ]);
        $validated['tanggal_komentar'] = Date::now();
        $validated['users_id'] = auth()->user()->id;

        Komentar::create($validated);

        return redirect()->route('foto');
    }
}
