<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartGuard - Dashboard</title>
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
    {{-- Sidebar Start --}}
    <x-navbar></x-navbar>
    {{-- Sidebar End --}}

    {{-- Dashboard-Main Start --}}
    <main class="dashboard-main">
        {{-- Navbar Start --}}
        <x-header></x-header>
        {{-- Navbar End --}}
        {{-- Dashboard-Main End --}}

        <div class="dashboard-main-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <h6 class="fw-semibold mb-0">Dashboard</h6>
                <ul class="d-flex align-items-center gap-2">
                    <li class="fw-medium">
                        <a href="/index" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>-</li>
                    <li class="fw-medium">AI</li>
                </ul>
            </div>

            <div class="row gy-4 mt-1">
                <div class="col-xxl-3 col-sm-12">
                    <div class="card h-100 radius-8 border-0 overflow-hidden">
                        <div class="card-body p-24">
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                <h6 class="mb-2 fw-bold text-lg">Data Target Model</h6>
                            </div>

                            <div class="d-flex flex-wrap align-items-center mt-3">
                                <ul class="flex-shrink-0">
                                    <li class="d-flex align-items-center gap-2 mb-28">
                                        <span class="w-12-px h-12-px rounded-circle bg-success-main"></span>
                                        <span class="text-secondary-light text-sm fw-medium">Tidak ada penyakit: {{ $target_0 }}</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 mb-28">
                                        <span class="w-12-px h-12-px rounded-circle bg-warning-main"></span>
                                        <span class="text-secondary-light text-sm fw-medium">Ada penyakit: {{ $target_1 }}</span>
                                    </li>
                                </ul>
                                <div id="donutChart"
                                    class="flex-grow-1 apexcharts-tooltip-z-none title-style circle-none"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card h-100 radius-8 border-0 overflow-hidden">
                        <div class="card-body p-24">
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                <h6 class="mb-2 fw-bold text-lg">Data Tipe Penyakit Jantung Model</h6>
                            </div>


                            <div id="chartTipe" class="apexcharts-tooltip-z-none"></div>

                            <ul class="d-flex flex-wrap align-items-center justify-content-between mt-3 gap-3">
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px radius-2" style="background-color: #3498db"></span>
                                    <span class="text-secondary-light text-sm fw-normal">Typical Angina:
                                        <span class="text-primary-light fw-semibold">{{ $typical }}</span>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px radius-2" style="background-color: #2ecc71"></span>
                                    <span class="text-secondary-light text-sm fw-normal">Atypical Angina:
                                        <span class="text-primary-light fw-semibold">{{ $atypical }}</span>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px radius-2" style="background-color: #f1c40f"></span>
                                    <span class="text-secondary-light text-sm fw-normal">Non-anginal:
                                        <span class="text-primary-light fw-semibold">{{ $non_anginal }}</span>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="w-12-px h-12-px radius-2" style="background-color: #e74c3c"></span>
                                    <span class="text-secondary-light text-sm fw-normal">asymptomatic:
                                        <span class="text-primary-light fw-semibold">{{ $asymptomatic }}</span>
                                    </span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card h-100 radius-8 border">
                        <div class="card-body p-24">
                            <h6 class="mb-12 fw-semibold text-lg mb-16">Data Hasil Klasifikasi</h6>
                            <div class="d-flex align-items-center gap-2 mb-20">
                                <h6 class="fw-semibold mb-0">{{ $klasifikasi_ada + $klasifikasi_tidak }}</h6>
                                {{-- <p class="text-sm mb-0">
                                    <span
                                        class="bg-danger-focus border br-danger px-8 py-2 rounded-pill fw-semibold text-danger-main text-sm d-inline-flex align-items-center gap-1">
                                        10%
                                        <iconify-icon icon="iconamoon:arrow-down-2-fill"
                                            class="icon"></iconify-icon>
                                    </span>
                                    - 20 Per Day
                                </p> --}}
                            </div>

                            <div id="chartHasilKlasifikasi" class="barChart"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer Start --}}
        <x-footer></x-footer>
        {{-- Footer End --}}

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

    <script src="assets/js/homeOneChart.js"></script>

    {{-- Tipe Penyakit Jantung --}}
    <script>
        var opsi = {
            series: {!! json_encode([$typical, $atypical, $non_anginal, $asymptomatic]) !!},
            colors: ['#3498db', '#2ecc71', '#f1c40f', '#e74c3c'],


            labels: ['Typical Angina', 'Atypical Angina', 'Non-anginal', 'Asymptomatic'],
            legend: {
                show: false
            },
            chart: {
                type: 'donut',
                height: 270,
                sparkline: {
                    enabled: true // Remove whitespace
                },
                margin: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                }
            },
            stroke: {
                width: 0,
            },
            dataLabels: {
                enabled: false
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
        };

        var chart = new ApexCharts(document.querySelector("#chartTipe"), opsi);
        chart.render();
    </script>
    {{-- Tipe Penyakit Jantung --}}

    {{-- Grafik Target Model --}}
    <script>
        var options = {
            series: {!! json_encode([$target_0, $target_1]) !!},
            colors: ['#45B369', '#487FFF'],
            labels: ['Ada Penyakit', 'Tidak Ada Penyakit'],
            legend: {
                show: false
            },
            chart: {
                type: 'donut',
                height: 300,
                sparkline: {
                    enabled: true // Remove whitespace
                },
                margin: {
                    top: -100,
                    right: -100,
                    bottom: -100,
                    left: -100
                },
                padding: {
                    top: -100,
                    right: -100,
                    bottom: -100,
                    left: -100
                }
            },
            stroke: {
                width: 0,
            },
            dataLabels: {
                enabled: false
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 90,
                    offsetY: 10,
                    customScale: 0.8,
                    donut: {
                        size: '70%',
                        labels: {
                            show: true,
                            total: {
                                showAlways: true,
                                show: true,
                                label: 'Target Model',
                                // formatter: function (w) {
                                //     return w.globals.seriesTotals.reduce((a, b) => {
                                //         return a + b;
                                //     }, 0);
                                // }
                            }
                        },
                    }
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#donutChart"), options);
        chart.render();
    </script>
    {{-- Grafik Target Model --}}

    {{-- Grafik Hasil Klasifikasi --}}
    <script>
      var options = {
      series: [{
          name: "Hasil",
          data: [{
              x: 'Punya Penyakit Jantung',
              y: {{ $klasifikasi_ada }},
          }, {
              x: 'Tidak Punya Penyakit Jantung',
              y: {{ $klasifikasi_tidak }},
          }]
      }],
      chart: {
          type: 'bar',
          height: 235,
          toolbar: {
              show: false
          },
      },
      plotOptions: {
          bar: {
            borderRadius: 6,
            horizontal: false,
            columnWidth: 24,
            columnWidth: '52%',
            endingShape: 'rounded',
          }
      },
      dataLabels: {
          enabled: false
      },
      fill: {
          type: 'gradient',
          colors: ['#dae5ff'], // Set the starting color (top color) here
          gradient: {
              shade: 'light', // Gradient shading type
              type: 'vertical',  // Gradient direction (vertical)
              shadeIntensity: 0.5, // Intensity of the gradient shading
              gradientToColors: ['#dae5ff'], // Bottom gradient color (with transparency)
              inverseColors: false, // Do not invert colors
              opacityFrom: 1, // Starting opacity
              opacityTo: 1,  // Ending opacity
              stops: [0, 100],
          },
      },
      grid: {
          show: false,
          borderColor: '#D1D5DB',
          strokeDashArray: 4, // Use a number for dashed style
          position: 'back',
          padding: {
            top: -10,
            right: -10,
            bottom: -10,
            left: -10
          }
      },
      xaxis: {
          type: 'kategori',
          categories: ['Punya Penyakit Jantung', 'Tidak Punya Penyakit Jantung']
      },
      yaxis: {
        show: false,
      },
  };

  var chart = new ApexCharts(document.querySelector("#chartHasilKlasifikasi"), options);
  chart.render();
    </script>
    {{-- Grafik Hasil Klasifikasi --}}
</body>

</html>
