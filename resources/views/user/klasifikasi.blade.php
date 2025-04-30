@extends('layouts.app')

@section('content')

<main class="main" style="margin-top: 100px;">
    <section class="section">
      <div class="container">
        <div class="section-title text-center">
          <h2>Formulir Klasifikasi Penyakit Jantung</h2>
          <p>Silakan isi data berikut untuk mendapatkan hasil klasifikasi</p>
        </div>
        <!-- <form action="hasil_klasifikasi.php" method="POST" class="row g-3"> -->

          <div class="col-md-6">
            <label for="inputDate" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="inputDate" name="inputDate" required>
          </div>

          <div class="col-md-6">
            <label for="age" class="form-label">Usia</label>
            <input type="number" class="form-control" id="age" name="age" required>
          </div>

          <div class="col-md-6">
            <label for="sex" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="sex" name="sex" required>
              <option value="">-- Pilih --</option>
              <option value="1">Laki-laki</option>
              <option value="0">Perempuan</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="cp" class="form-label">Tipe Nyeri Dada</label>
            <select class="form-select" id="cp" name="cp" required>
              <option value="">-- Pilih --</option>
              <option value="0">Typical Angina</option>
              <option value="1">Atypical Angina</option>
              <option value="2">Non-anginal Pain</option>
              <option value="3">Asymptomatic</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="trestbps" class="form-label">Tekanan Darah Ketika Istirahat (mm Hg)</label>
            <input type="number" class="form-control" id="trestbps" name="trestbps" required>
          </div>

          <div class="col-md-6">
            <label for="chol" class="form-label">Kadar Kolesterol (mg/dl)</label>
            <input type="number" class="form-control" id="chol" name="chol" required>
          </div>

          <div class="col-md-6">
            <label for="thalach" class="form-label">Detak Jantung Maksimum</label>
            <input type="number" class="form-control" id="thalach" name="thalach">
          </div>

          <div class="col-md-6">
            <label for="exang" class="form-label">Nyeri Dada Ketika Olahraga</label>
            <select class="form-select" id="exang" name="exang" required>
              <option value="">-- Pilih --</option>
              <option value="1">Ya</option>
              <option value="0">Tidak</option>
            </select>
          </div>

          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Mulai Klasifikasi</button>
          </div>
        </form>
      </div>
    </section>
  </main>
  @endsection