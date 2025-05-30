@extends('layouts.app')

@section('content')
<main class="main">
    <!-- Beranda -->
    <section id="hero" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8 d-flex flex-column justify-content-center align-items text-center text-md-start" data-aos="fade-up">
            <h2>Memahami Penyakit Jantung Melalui Klasifikasi, Langkah Awal Menuju Hidup Sehat</h2>
          </div>
        </div>
      </div>
    </section>

    <!-- Klasifikasi -->
    <section id="classification" class="classification section">
        <div class="container">
            <div class="container section-title" data-aos="fade-up">
                <h2>Klasifikasi Penyakit Jantung</h2>
                <p>Masukkan semua inputan yang diperlukan untuk melakukan klasifikasi</p>
            </div>

            <form method="POST" action="{{ route('klasifikasi.store') }}" class="row g-4" data-aos="fade-up" data-aos-delay="100">
                @csrf
                <div class="col-md-6">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control class-input" id="name" name="name" value="{{ Auth::user()->name }}" readonly>
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                <div class="col-md-6">
                    <label for="age" class="form-label">Usia</label>
                    <input type="number" class="form-control class-input" id="age" name="age" required>
                </div>

                <div class="col-md-6">
                    <label for="sex" class="form-label">Jenis Kelamin</label>
                    <select class="form-select class-input" id="sex" name="sex" required>
                        <option value="" disabled selected>Pilih</option>
                        <option value="1">Laki-laki</option>
                        <option value="0">Perempuan</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="cp" class="form-label">Tipe Nyeri Dada
                        <span class="info-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="
                            <strong>Typical Angina:</strong> Nyeri dada yang terjadi ketika beraktivitas fisik atau stres, biasanya hilang dengan istirahat.<br>
                            <strong>Atypical Angina:</strong> Nyeri dada yang tidak mengikuti pola umum, bisa terjadi pada saat istirahat atau beraktivitas ringan.<br>
                            <strong>Non-anginal:</strong> Nyeri dada yang tidak disebabkan oleh masalah jantung, tetapi bisa disebabkan oleh masalah lain seperti gangguan pencernaan atau kram otot.<br>
                            <strong>Asymptomatic:</strong> Tidak ada gejala nyeri dada, namun tes medis menunjukkan adanya masalah pada jantung.
                        ">
                            <i class="far fa-question-circle"></i>
                        </span>
                    </label>
                    <select class="form-select class-input" id="cp" name="cp" required>
                        <option value="" disabled selected>Pilih</option>
                        <option value="0">Typical Angina</option>
                        <option value="1">Atypical Angina</option>
                        <option value="2">Non-anginal</option>
                        <option value="3">Asymptomatic</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="trestbps" class="form-label">Tekanan Darah Saat Istirahat (mm Hg)</label>
                    <input type="number" class="form-control class-input" id="trestbps" name="trestbps" required>
                </div>

                <div class="col-md-6">
                    <label for="chol" class="form-label">Kadar Kolesterol (mg/dl)</label>
                    <input type="number" class="form-control class-input" id="chol" name="chol" required>
                </div>

                <div class="col-md-6">
                    <label for="thalach" class="form-label">Detak Jantung Maksimum (bpm)</label>
                    <input type="number" class="form-control class-input" id="thalach" name="thalach">
                </div>

                <div class="col-md-6">
                    <label for="exang" class="form-label">Nyeri Dada Saat Olahraga</label>
                    <select class="form-select class-input" id="exang" name="exang" required>
                        <option value="" disabled selected>Pilih</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>

                <div class="col-12 text-center mt-4">
                    <button type="submit" class="class-btn">Mulai Klasifikasi</button>
                </div>
            </form>
        </div>
    </section>
</main>

{{-- @if(session('classification'))
<div class="popup-container">
    <div class="popup-box">
        <h1>Hasil Klasifikasi</h1>
        <p>{{ session('classification') }}</p>
        <button class="close-btn">Cek</button>
    </div>
</div>
@endif --}}
@if(session('classification'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            title: 'Hasil Klasifikasi',
            text: '{{ session('classification') }}',
            icon: 'info',
            confirmButtonText: 'Konsultasi'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '{{ route('user.home') }}#contact';
            }
        });
    });
</script>
@endif

@endsection
