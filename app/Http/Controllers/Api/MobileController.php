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
                'user_id' => $request['user_id'],
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

    public function riwayat(Request $request)
    {
        $riwayat = Klasifikasi::where('user_id', $request['user_id'])->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->nama,
                'age' => $item->usia,
                'sex' => $item->jenis_kelamin,
                'cp' => $item->tipe_nyeri_dada,
                'trestbps' => $item->tekanan_darah_istirahat,
                'chol' => $item->kadar_kolesterol,
                'thalach' => $item->detak_jantung_maksimum,
                'exang' => $item->nyeri_dada_olahraga,
                'hasil' => $item->hasil_klasifikasi,
            ];
        });

        return response()->json([
            'status' => 'success',
            'message' => 'Riwayat berhasil diambil',
            'riwayat' => $riwayat,
        ], 200);
    }
    //hapus riwayat
    public function hapusRiwayat($id)
    {
        $deleted = Klasifikasi::find($id);
        if (!$deleted) {
            return response()->json([
                'status' => 'error',
                'message' => 'Riwayat tidak ditemukan'
            ], 404);
        }

        $deleted->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Riwayat berhasil dihapus'
        ], 200);
    }

}
