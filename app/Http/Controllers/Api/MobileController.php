<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Klasifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MobileController extends Controller
{
    public function klasifikasi(Request $request)
    {
        // Menerima data dari request tanpa validasi
        $data = $request->all();

        // Mengambil data yang dikirimkan (jika ada)
        $data = [
            'name' => $data['name'],
            'age' => $data['age'],
            'sex' => $data['sex'],
            'cp' => $data['cp'],
            'trestbps' => $data['trestbps'],
            'chol' => $data['chol'],
            'thalach' => $data['thalach'],
            'exang' => $data['exang'],
        ];

        $response = Http::post('http://127.0.0.1:5000/user/klasifikasi', $data);

        if ($response->successful()) {
            $result = $response->json()['prediction'];
            Klasifikasi::create([
                'nama' => $request['name'],
                'usia' => $request['age'],
                'jenis_kelamin' => $request['sex'],
                'tipe_nyeri_dada' => $request['cp'],
                'tekanan_darah_istirahat' => $request['trestbps'],
                'kadar_kolesterol' => $request['chol'],
                'detak_jantung_maksimum' => $request['thalach'],
                'nyeri_dada_olahraga' => $request['exang'],
                'hasil_klasifikasi' => $result,
            ]);

            $responseData = [
                'status' => 'success',
                'message' => 'Prediksi berhasil dilakukan',
                'hasil' => $result,

            ];
            return response()->json($responseData, 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Prediksi gagal dilakukan',
            ], 500);
        }
    }
}
