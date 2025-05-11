<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KlasifikasiController extends Controller
{
    public function index()
    {
        return view('user.klasifikasi');
    }

    public function create()
    {
        return view('user.klasifikasi');
    }

    public function store(Request $request)
    {
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

        $response = Http::post('http://127.0.0.1:5000/user/klasifikasi', $validated);

        if ($response->successful()) {
            $result = $response->json()['prediction'];

            Klasifikasi::create([
                'nama' => $validated['name'],
                'usia' => $validated['age'],
                'jenis_kelamin' => $validated['sex'],
                'tipe_nyeri_dada' => $validated['cp'],
                'tekanan_darah_istirahat' => $validated['trestbps'],
                'kadar_kolesterol' => $validated['chol'],
                'detak_jantung_maksimum' => $validated['thalach'] ?? null,
                'nyeri_dada_olahraga' => $validated['exang'],
                'hasil_klasifikasi' => $result,
]);
            return redirect()->route('klasifikasi.create')->with('classification', $result);
        } else {
            $error = $response->json()['error'] ?? 'Terjadi kesalahan pada server prediksi.';
            return back()->withErrors(['api_error' => $error]);
        }
    }

    public function show($id)
    {
        return view('user.klasifikasi.show', ['id' => $id]);
    }

    public function edit($id)
    {
        return view('user.klasifikasi.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'usia' => 'required|numeric',
            'jenis_kelamin' => 'required|numeric',
            'tipe_nyeri_dada' => 'required|numeric',
            'tekanan_darah_istirahat' => 'required|numeric',
            'kadar_kolesterol' => 'required|numeric',
            'detak_jantung_maksimum' => 'required|numeric',
            'nyeri_dada_olahraga' => 'required|numeric',
        ]);

        $response = Http::post('http://127.0.0.1:5000/user/klasifikasi', $validated);

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
        return redirect()->route('klasifikasi.index');
    }
}