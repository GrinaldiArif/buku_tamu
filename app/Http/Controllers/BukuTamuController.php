<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuTamu;

class BukuTamuController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('bukutamu.create');

    }
    public function store(Request $request)
    {
// Validasi input
$request->validate([
'nama_pengunjung' => 'required|max:255',
'komentar' => 'required',
]);
// Simpan data ke database
BukuTamu::create([
'nama_pengunjung' => $request->nama_pengunjung,
'komentar' => $request->komentar,
]);
// Redirect ke halaman melihat komentar
return redirect()->route('bukutamu.show');
}
// Menampilkan komentar dari para tamu
public function show()
{
$data = BukuTamu::latest()->get();
return view('bukutamu.show', compact('data'));
}

}