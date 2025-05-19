@extends('layouts.app')

@section('content')
<main class="main">
    <!-- Beranda -->
    <section id="hero" class="hero section dark-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8 d-flex flex-column justify-content-center align-items text-center text-md-start" data-aos="fade-up">
            <h2>Memahami Penyakit Jantung Melalui Klasifikasi, Langkah Awal Menuju Hidup Sehat</h2>
            <div class="d-flex mt-4 justify-content-center justify-content-md-start">
              <a href="{{ route('klasifikasi.create') }}#classification" class="download-btn"><span>Jelajahi</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Tentang -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
          <div class="col-xl-5 content">
            <h2>Apa itu Penyakit Jantung?</h2>
            <p>Penyakit Jantung adalah kondisi ketika jantung mengalami gangguan. 
              Masalah pada jantung bisa disebabkan akibat peradangan pada pembuluh darah jantung, sumbatan, infeksi, hingga kelainan bawaan. 
              Menurut <a href="https://world-heart-federation.org/world-heart-report-2023" target="_blank" style="color: #7886C7;">World Health Federation (WHF)</a> pada tahun 2023, penyakit jantung adalah penyebab utama kematian global. 
              Lebih dari 20,5 juta orang meninggal karena penyakit jantung dan jumlah tersebut diperkirakan akan terus meningkat setiap tahunnya.
            </p>
          </div>
          <div class="col-xl-7">
            <div class="icon-box">
              <img src="{{ asset('assets/assets/img/doctor.jpg') }}">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="featured" class="featured section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Jenis - Jenis Penyakit Jantung</h2>
        <p>Beberapa jenis penyakit jantung yang dapat mempengaruhi kesehatan seseorang</p>
      </div>

      <div class="container">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-md-4">
            <div class="card">
              <div class="img">
                <img src="assets/assets/img/1.png" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-hospital"></i></div>
              </div>
              <h2 class="title">Penyakit Jantung Koroner</h2>
              <p>Terjadi ketika pembuluh darah yang membawa darah ke jantung (arteri koroner) menyempit atau tersumbat, umumnya akibat penumpukan kolesterol dan plak lemak (aterosklerosis).</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="img">
                <img src="assets/assets/img/2.png" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
              </div>
              <h2 class="title">Serangan Jantung</h2>
              <p>Terjadi ketika aliran darah ke bagian otot jantung terhenti akibat penyumbatan pembuluh darah koroner, menyebabkan kerusakan atau kematian pada jaringan jantung.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="img">
                <img src="assets/assets/img/3.png" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-clipboard-pulse"></i></div>
              </div>
              <h2 class="title">Gagal Jantung</h2>
              <p>Terjadi ketika jantung tidak mampu memompa darah dengan cukup efisien untuk memenuhi kebutuhan tubuh.</p>
            </div>
          </div>
          
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="img">
                <img src="assets/assets/img/4.png" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-clipboard-pulse"></i></div>
              </div>
              <h2 class="title">Aritmia</h2>
              <p>Gangguan pada irama jantung yang menyebabkan jantung berdetak terlalu cepat (takikardia), terlalu lambat (bradikardia), atau tidak teratur.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="img">
                <img src="assets/assets/img/5.png" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
              </div>
              <h2 class="title">Penyakit Katup Jantung</h2>
              <p>Katup jantung yang rusak dapat menyebabkan darah mengalir tidak dengan baik melalui jantung. Kerusakan ini bisa disebabkan oleh infeksi, kelainan bawaan, atau degenerasi pada usia lanjut.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="img">
                <img src="assets/assets/img/6.png" alt="" class="img-fluid">
                <div class="icon"><i class="bi bi-hospital"></i></div>
              </div>
              <h2 class="title">Kardiomiopati</h2>
              <p>Kelainan pada otot jantung yang membuatnya lebih lemah dan kurang efektif dalam memompa darah. Ini bisa disebabkan oleh genetika, infeksi, atau kondisi lain.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Layanan -->
    <section id="cards" class="cards section">
      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Proses Klasifikasi Penyakit Jantung</h2>
          <p>Ikuti langkah-langkah berikut untuk melakukan klasifikasi dan mengetahui hasilnya terkait dengan kondisi penyakit jantung</p>
        </div>
        <div class="text-center mb-4 steps-img" data-aos="zoom-out">
          <img src="assets/assets/img/7.png" alt="">
        </div>

        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <span>01</span>
              <h4><a href="" class="stretched-link">Masuk/Daftar</a></h4>
              <p>Masuk atau daftar akun untuk mengakses halaman klasifikasi.</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <span>02</span>
              <h4><a href="" class="stretched-link">Klasifikasi</a></h4>
              <p>Masuk ke halaman klasifikasi dan mengisi semua inputan yang diperlukan untuk melakukan klasifikasi.</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <span>03</span>
              <h4><a href="" class="stretched-link">Hasil Klasifikasi</a></h4>
              <p>Menerima hasil klasifikasi melalui website dan dapat digunakan untuk melakukan konsultasi ke dokter.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="faq section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Temukan jawaban atas pertanyaan-pertanyaan umum mengenai penyakit jantung</p>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-container">
              <div class="faq-item">
                <h3>Apa yang menjadi penyebab utama penyakit jantung?</h3>
                <div class="faq-content">
                  <p>Penyakit jantung biasanya disebabkan oleh penumpukan plak di dalam pembuluh darah arteri (aterosklerosis) yang menghambat aliran darah ke jantung. 
                    Beberapa faktor yang dapat meningkatkan risiko seseorang terkena penyakit jantung antara lain tekanan darah tinggi, kolesterol tinggi, diabetes, obesitas, kebiasaan merokok, dan gaya hidup yang tidak sehat.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Apa saja gejala umum yang sering dialami oleh penderita penyakit jantung?</h3>
                <div class="faq-content">
                  <p>Beberapa gejala umum penyakit jantung yaitu nyeri dada, sesak napas, kelelahan, pusing, dan detak jantung yang tidak teratur. 
                    Namun, beberapa orang mungkin tidak menunjukkan gejala awal.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Bagaimana cara melakukan pengobatan pada penderita penyakit jantung?</h3>
                <div class="faq-content">
                  <p>Pengobatan penyakit jantung antara lain perubahan gaya hidup seperti diet sehat, berolahraga secara teratur, dan berhenti merokok.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Bagaimana cara mencegah penyakit jantung?</h3>
                <div class="faq-content">
                  <p>Pencegahan penyakit jantung dapat dilakukan dengan menjaga pola makan sehat, rutin berolahraga, mengendalikan tekanan darah dan kadar kolesterol, menghindari merokok, serta mengelola stres dengan baik. 
                    Selain itu, menjaga berat badan dan menghindari konsumsi alkohol berlebihan juga dapat mengurangi risiko terkena penyakit jantung.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Kontak -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Menjelajahi pandangan dan pemahaman mengenai Penyakit Jantung untuk menciptakan kesadaran dan memberikan dukungan bagi mereka yang terkena Penyakit Jantung</p>
      </div>

      <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jember, Jawa Timur, Indonesia</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>No. Telepon</h3>
                <p>+62 812-3456-7890</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>dokter@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <form method="POST" action="{{ route('contact.send') }}" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Sedang memuat...</div>
                  <div class="error-message">Terjadi kesalahan ketika mengirim pesan.</div>
                  <div class="sent-message">Pesan telah terkirim.</div>
                  <button type="submit"><span>Kirim</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</main>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
@endsection
