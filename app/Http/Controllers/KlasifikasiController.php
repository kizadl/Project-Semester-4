<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KlasifikasiController extends Controller
{
    public function index()
    {
        // Tampilkan halaman daftar klasifikasi jika diperlukan.
        return view('user.klasifikasi'); // Jika Anda memiliki index view.
    }

    public function create()
    {
        // Menampilkan form untuk input klasifikasi
        return view('user.klasifikasi'); // Menyesuaikan dengan folder user/klasifikasi.blade.php
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'sex' => 'required|in:0,1',
            'cp' => 'required|in:0,1,2,3',
            'trestbps' => 'required|integer',
            'chol' => 'required|integer',
            'thalach' => 'nullable|integer',
            'exang' => 'required|in:0,1',
        ]);

        // Mengirim data ke API Python untuk prediksi
        $response = Http::post('http://127.0.0.1:5000/user/klasifikasi', $validated);

        // Menangani respons dari API
        if ($response->successful()) {
            $result = $response->json()['prediction'];
            
            // Menyimpan hasil klasifikasi ke session
            return redirect()->route('klasifikasi.create')->with('classification', $result);
        } else {
            $error = $response->json()['error'] ?? 'Terjadi kesalahan pada server prediksi.';
            return back()->withErrors(['api_error' => $error]);
        }
    }

    public function show($id)
    {
        // Menampilkan data prediksi berdasarkan ID jika diperlukan
        return view('user.klasifikasi.show', ['id' => $id]); // Menyesuaikan dengan folder user/klasifikasi.blade.php
    }

    public function edit($id)
    {
        // Formulir untuk mengedit data
        return view('user.klasifikasi.edit', ['id' => $id]); // Menyesuaikan dengan folder user/klasifikasi.blade.php
    }

    public function update(Request $request, $id)
    {
        // Validasi data dan mengirimkan data untuk diperbarui
        $validated = $request->validate([
            'usia' => 'required|numeric',
            'jenis_kelamin' => 'required|numeric',
            'tipe_nyeri_dada' => 'required|numeric',
            'tekanan_darah_istirahat' => 'required|numeric',
            'kadar_kolesterol' => 'required|numeric',
            'detak_jantung_maksimum' => 'required|numeric',
            'nyeri_dada_olahraga' => 'required|numeric',
        ]);

        // Mengirimkan data yang telah diperbarui ke API Python untuk prediksi ulang
        $response = Http::post('http://127.0.0.1:5000/user/klasifikasi', $validated);

        // Menangani response dari API
        if ($response->successful()) {
            $result = $response->json()['prediction'];
            return view('user.klasifikasi.result', compact('result'));
        } else {
            $error = $response->json()['error'] ?? 'Terjadi kesalahan pada server prediksi.';
            return back()->withErrors(['api_error' => $error]);
        }
    }

    public function destroy($id)
    {
        // Menghapus data atau reset status jika diperlukan
        return redirect()->route('klasifikasi.index');
    }
}