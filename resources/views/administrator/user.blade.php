<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyHealthy - Riwayat</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png" sizes="16x16">
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
{{-- Sidebar Start--}}
<x-navbar></x-navbar>
{{-- Sidebar End--}}

<main class="dashboard-main">
<x-header></x-header>
</div> 

  <div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">Riwayat</h6>
  <ul class="d-flex align-items-center gap-2">
    <li class="fw-medium">
      <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
        Application
      </a>
    </li>
    <li>-</li>
    <li class="fw-medium">Riwayat</li>
  </ul>
</div>

<div class="card basic-data-table">
  <div class="card-header">
    <h5 class="card-title mb-0">Default Datatables</h5>
  </div>
  <div class="card-body">
  <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
    <thead>
      <tr>
        <th scope="col">
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              S.L
            </label>
          </div>
        </th>
        <th scope="col">Invoice</th>
        <th scope="col">Name</th>
        <th scope="col">Issued Date</th>
        <th scope="col">Amount</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              01
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list1.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
          </div>
        </td>
        <td>25 Jan 2024</td>
        <td>$200.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              02
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#696589</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list2.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Annette Black</h6>
          </div>
        </td>
        <td>25 Jan 2024</td>
        <td>$200.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              03
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list3.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Ronald Richards</h6>
          </div>
        </td>
        <td>10 Feb 2024</td>
        <td>$200.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              04
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526587</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list4.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Eleanor Pena</h6>
          </div>
        </td>
        <td>10 Feb 2024</td>
        <td>$150.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              05
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#105986</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list5.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Leslie Alexander</h6>
          </div>
        </td>
        <td>15 March 2024</td>
        <td>$150.00</td>
        <td> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              06
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526589</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list6.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Albert Flores</h6>
          </div>
        </td>
        <td>15 March 2024</td>
        <td>$150.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              07
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526520</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list7.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Jacob Jones</h6>
          </div>
        </td>
        <td>27 April 2024</td>
        <td>$250.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              08
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list8.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Jerome Bell</h6>
          </div>
        </td>
        <td>27 April 2024</td>
        <td>$250.00</td>
        <td> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              09
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#200257</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list9.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Marvin McKinney</h6>
          </div>
        </td>
        <td>30 April 2024</td>
        <td>$250.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              10
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526525</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list10.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Cameron Williamson</h6>
          </div>
        </td>
        <td>30 April 2024</td>
        <td>$250.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              11
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526534</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list1.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
          </div>
        </td>
        <td>25 Jan 2024</td>
        <td>$200.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              12
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#696589</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list2.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Annette Black</h6>
          </div>
        </td>
        <td>25 Jan 2024</td>
        <td>$200.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              13
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list3.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Ronald Richards</h6>
          </div>
        </td>
        <td>10 Feb 2024</td>
        <td>$200.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              14
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526587</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list4.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Eleanor Pena</h6>
          </div>
        </td>
        <td>10 Feb 2024</td>
        <td>$150.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              15
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#105986</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list5.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Leslie Alexander</h6>
          </div>
        </td>
        <td>15 March 2024</td>
        <td>$150.00</td>
        <td> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              16
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526589</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list6.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Albert Flores</h6>
          </div>
        </td>
        <td>15 March 2024</td>
        <td>$150.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              17
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526520</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list7.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Jacob Jones</h6>
          </div>
        </td>
        <td>27 April 2024</td>
        <td>$250.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              18
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#256584</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list8.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Jerome Bell</h6>
          </div>
        </td>
        <td>27 April 2024</td>
        <td>$250.00</td>
        <td> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              19
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#200257</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list9.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Marvin McKinney</h6>
          </div>
        </td>
        <td>30 April 2024</td>
        <td>$250.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <div class="form-check style-check d-flex align-items-center">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">
              20
            </label>
          </div>
        </td>
        <td><a href="javascript:void(0)" class="text-primary-600">#526525</a></td>
        <td>
          <div class="d-flex align-items-center">
            <img src="assets/images/user-list/user-list10.png" alt="" class="flex-shrink-0 me-12 radius-8">
            <h6 class="text-md mb-0 fw-medium flex-grow-1">Cameron Williamson</h6>
          </div>
        </td>
        <td>30 April 2024</td>
        <td>$250.00</td>
        <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
        <td>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="lucide:edit"></iconify-icon>
          </a>
          <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
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