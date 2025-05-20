<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartGuard - Klasifikasi</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/assets/img/logo.png') }}">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="assets/css/lib/apexcharts.css">
    <!-- Data Table css -->
    <link rel="stylesheet" href="assets/css/lib/dataTables.min.css">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="assets/css/lib/editor-katex.min.css">
    <link rel="stylesheet" href="assets/css/lib/editor.atom-one-dark.min.css">
    <link rel="stylesheet" href="assets/css/lib/editor.quill.snow.css">
    <!-- Date picker css -->
    <link rel="stylesheet" href="assets/css/lib/flatpickr.min.css">
    <!-- Calendar css -->
    <link rel="stylesheet" href="assets/css/lib/full-calendar.css">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/css/lib/jquery-jvectormap-2.0.5.css">
    <!-- Popup css -->
    <link rel="stylesheet" href="assets/css/lib/magnific-popup.css">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="assets/css/lib/slick.css">
    <!-- prism css -->
    <link rel="stylesheet" href="assets/css/lib/prism.css">
    <!-- file upload css -->
    <link rel="stylesheet" href="assets/css/lib/file-upload.css">

    <link rel="stylesheet" href="assets/css/lib/audioplayer.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    @include('sweetalert::alert')

    {{-- Sidebar Start --}}
    <x-navbar></x-navbar>
    {{-- Sidebar End --}}

    <main class="dashboard-main">
        <x-header></x-header>
        </div>

        <div class="dashboard-main-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">Klasifikasi</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">Klasifikasi</li>
                </ul>
            </div>

            <div class="card basic-data-table">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tabel Riwayat Klasifikasi</h5>
                </div>
                <div class="card-body">
                    <div class="w-full overflow-x-auto">
                        <table class="table bordered-table mb-0 min-w-max" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Usia</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Tipe Nyeri Dada</th>
                                    <th scope="col">Tekanan Darah Saat Istirahat</th>
                                    <th scope="col">Kadar Kolesterol</th>
                                    <th scope="col">Detak Jantung Maksimum</th>
                                    <th scope="col">Nyeri Dada Saat Olahraga</th>
                                    <th scope="col">Hasil</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($riwayat as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->usia }}</td>
                                        <td>{{ $item->jenis_kelamin == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                                        <td>{{ $item->tipe_nyeri_dada == 0 ? 'Typical Angina' : ($item->tipe_nyeri_dada == 1 ? 'Atypical Angina' : ($item->tipe_nyeri_dada == 2 ? 'Non-anginal' : 'Asymptomatic')) }}
                                        </td>
                                        <td>{{ $item->tekanan_darah_istirahat }} mm Hg</td>
                                        <td>{{ $item->kadar_kolesterol }} mg/dL</td>
                                        <td>{{ $item->detak_jantung_maksimum }} bpm</td>
                                        <td>{{ $item->nyeri_dada_olahraga == 1 ? 'Ya' : 'Tidak' }}</td>
                                        <td>{{ $item->hasil_klasifikasi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->translatedFormat('d M Y H:i') }}
                                        </td>
                                        <td>
                                            <form action="{{ route('riwayat.delete', $item->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus riwayat ini?')">
                                                    <i class="ri-delete-bin-line"></i> Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <x-footer></x-footer>
    </main>

    <!-- jQuery library js -->
    <script src="assets/js/lib/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Apex Chart js -->
    <script src="assets/js/lib/apexcharts.min.js"></script>
    <!-- Data Table js -->
    <script src="assets/js/lib/dataTables.min.js"></script>
    <!-- Iconify Font js -->
    <script src="assets/js/lib/iconify-icon.min.js"></script>
    <!-- jQuery UI js -->
    <script src="assets/js/lib/jquery-ui.min.js"></script>
    <!-- Vector Map js -->
    <script src="assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Popup js -->
    <script src="assets/js/lib/magnifc-popup.min.js"></script>
    <!-- Slick Slider js -->
    <script src="assets/js/lib/slick.min.js"></script>
    <!-- prism js -->
    <script src="assets/js/lib/prism.js"></script>
    <!-- file upload js -->
    <script src="assets/js/lib/file-upload.js"></script>
    <!-- audioplayer -->
    <script src="assets/js/lib/audioplayer.js"></script>

    <!-- main js -->
    <script src="assets/js/app.js"></script>

    <script>
        let table = new DataTable('#dataTable');
    </script>

</body>

</html>
