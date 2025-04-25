<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Health</title>
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

{{-- Sidebar Start --}}
<aside class="sidebar">
  <button type="button" class="sidebar-close-btn">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="index.html" class="sidebar-logo">
      <img src="assets/images/logo.png" alt="site logo" class="light-logo">
      <img src="assets/images/logo-light.png" alt="site logo" class="dark-logo">
      <img src="assets/images/logo-icon.png" alt="site logo" class="logo-icon">
    </a>
  </div>
  <div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu">
      <li>
        <a href="/index">
          <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="sidebar-menu-group-title">Application</li>

      <li>
        <a href="/klasifikasi">
          <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
          <span>Klasifikasi</span>
        </a>
      </li>

      <li>
        <a href="/riwayat">
          <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
          <span>Riwayat</span>
        </a>
      </li>
      
    </ul>
  </div>
</aside>
{{-- Sidebar End --}}

{{-- Dashboard-Main Start --}}
<main class="dashboard-main">
  {{-- Navbar Start --}}
<div class="navbar-header">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-4">
        <button type="button" class="sidebar-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
          <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
        </button>
        <button type="button" class="sidebar-mobile-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
        </button>
        <form class="navbar-search">
          <input type="text" name="search" placeholder="Search">
          <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
        </form>
      </div>
    </div>
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-3">
        <button type="button" data-theme-toggle class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
        
        <div class="dropdown">
          <button class="d-flex justify-content-center align-items-center rounded-circle" type="button" data-bs-toggle="dropdown">
            <img src="assets/images/user.png" alt="image" class="w-40-px h-40-px object-fit-cover rounded-circle">
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-2">Shaidul Islam</h6>
                <span class="text-secondary-light fw-medium text-sm">Admin</span>
              </div>
              <button type="button" class="hover-text-danger">
                <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon> 
              </button>
            </div>
            <ul class="to-top-list">
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="view-profile.html"> 
                <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>  My Profile</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="email.html"> 
                <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>  Inbox</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3" href="company.html"> 
                <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon>  Setting</a>
              </li>
              <li>
                <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3" href="javascript:void(0)"> 
                <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out</a>
              </li>
            </ul>
          </div>
        </div><!-- Profile dropdown end -->
      </div>
    </div>
  </div>
</div> 
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

    <div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-1 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Users</p>
                <h6 class="mb-0">20,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="gridicons:multiple-users" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +5000</span> 
              Last 30 days users
            </p>
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-2 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Subscription</p>
                <h6 class="mb-0">15,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="fa-solid:award" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-danger-main"><iconify-icon icon="bxs:down-arrow" class="text-xs"></iconify-icon> -800</span> 
              Last 30 days subscription
            </p>
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-3 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Free Users</p>
                <h6 class="mb-0">5,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-info rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="fluent:people-20-filled" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +200</span> 
              Last 30 days users
            </p>
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-4 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Income</p>
                <h6 class="mb-0">$42,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-success-main rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="solar:wallet-bold" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$20,000</span> 
              Last 30 days income
            </p>
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-5 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Expense</p>
                <h6 class="mb-0">$30,000</h6>
              </div>
              <div class="w-50-px h-50-px bg-red rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="fa6-solid:file-invoice-dollar" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +$5,000</span> 
              Last 30 days expense
            </p>
          </div>
        </div><!-- card end -->
      </div>
    </div>

    <div class="row gy-4 mt-1">
      <div class="col-xxl-6 col-xl-12">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
              <h6 class="text-lg mb-0">Sales Statistic</h6>
              <select class="form-select bg-base form-select-sm w-auto">
                <option>Yearly</option>
                <option>Monthly</option>
                <option>Weekly</option>
                <option>Today</option>
              </select>
            </div>
            <div class="d-flex flex-wrap align-items-center gap-2 mt-8">
              <h6 class="mb-0">$27,200</h6>
              <span class="text-sm fw-semibold rounded-pill bg-success-focus text-success-main border br-success px-8 py-4 line-height-1 d-flex align-items-center gap-1">
                10% <iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon>
              </span>
              <span class="text-xs fw-medium">+ $1500 Per Day</span>
            </div>
            <div id="chart" class="pt-28 apexcharts-tooltip-style-1"></div>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-6">
        <div class="card h-100 radius-8 border">
          <div class="card-body p-24">
              <h6 class="mb-12 fw-semibold text-lg mb-16">Total Subscriber</h6>
              <div class="d-flex align-items-center gap-2 mb-20">
                  <h6 class="fw-semibold mb-0">5,000</h6>
                  <p class="text-sm mb-0">
                      <span class="bg-danger-focus border br-danger px-8 py-2 rounded-pill fw-semibold text-danger-main text-sm d-inline-flex align-items-center gap-1">
                          10%
                          <iconify-icon icon="iconamoon:arrow-down-2-fill" class="icon"></iconify-icon>  
                      </span> 
                    - 20 Per Day 
                  </p>
              </div>

              <div id="barChart" class="barChart"></div>
            
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-6">
        <div class="card h-100 radius-8 border-0 overflow-hidden">
          <div class="card-body p-24">
            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
              <h6 class="mb-2 fw-bold text-lg">Users Overview</h6>
              <div class="">
                <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                  <option>Today</option>
                  <option>Weekly</option>
                  <option>Monthly</option>
                  <option>Yearly</option>
                </select>
              </div>
            </div>


            <div id="userOverviewDonutChart" class="apexcharts-tooltip-z-none"></div>

            <ul class="d-flex flex-wrap align-items-center justify-content-between mt-3 gap-3">
              <li class="d-flex align-items-center gap-2">
                  <span class="w-12-px h-12-px radius-2 bg-primary-600"></span>
                  <span class="text-secondary-light text-sm fw-normal">New: 
                      <span class="text-primary-light fw-semibold">500</span>
                  </span>
              </li>
              <li class="d-flex align-items-center gap-2">
                  <span class="w-12-px h-12-px radius-2 bg-yellow"></span>
                  <span class="text-secondary-light text-sm fw-normal">Subscribed:  
                      <span class="text-primary-light fw-semibold">300</span>
                  </span>
              </li>
            </ul>
            
          </div>
        </div>
      </div>
      <div class="col-xxl-9 col-xl-12">
        <div class="card h-100">
            <div class="card-body p-24">

              <div class="d-flex flex-wrap align-items-center gap-1 justify-content-between mb-16">
                <ul class="nav border-gradient-tab nav-pills mb-0" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link d-flex align-items-center active" id="pills-to-do-list-tab" data-bs-toggle="pill" data-bs-target="#pills-to-do-list" type="button" role="tab" aria-controls="pills-to-do-list" aria-selected="true">
                      Latest Registered 
                      <span class="text-sm fw-semibold py-6 px-12 bg-neutral-500 rounded-pill text-white line-height-1 ms-12 notification-alert">35</span>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link d-flex align-items-center" id="pills-recent-leads-tab" data-bs-toggle="pill" data-bs-target="#pills-recent-leads" type="button" role="tab" aria-controls="pills-recent-leads" aria-selected="false" tabindex="-1">
                      Latest Subscribe 
                      <span class="text-sm fw-semibold py-6 px-12 bg-neutral-500 rounded-pill text-white line-height-1 ms-12 notification-alert">35</span>
                    </button>
                  </li>
                </ul>
                <a href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                  View All
                  <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                </a>
              </div>

              <div class="tab-content" id="pills-tabContent">   
                <div class="tab-pane fade show active" id="pills-to-do-list" role="tabpanel" aria-labelledby="pills-to-do-list-tab" tabindex="0">
                  <div class="table-responsive scroll-sm">
                    <table class="table bordered-table sm-table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">Users </th>
                          <th scope="col">Registered On</th>
                          <th scope="col">Plan</th>
                          <th scope="col" class="text-center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Dianne Russell</h6>
                                <span class="text-sm text-secondary-light fw-medium">redaniel@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Free</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user2.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Wade Warren</h6>
                                <span class="text-sm text-secondary-light fw-medium">xterris@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Basic</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user3.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Albert Flores</h6>
                                <span class="text-sm text-secondary-light fw-medium">seannand@mail.ru</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Standard</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user4.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Bessie Cooper </h6>
                                <span class="text-sm text-secondary-light fw-medium">igerrin@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Business</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user5.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                <span class="text-sm text-secondary-light fw-medium">fellora@mail.ru</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Enterprise </td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-recent-leads" role="tabpanel" aria-labelledby="pills-recent-leads-tab" tabindex="0">
                  <div class="table-responsive scroll-sm">
                    <table class="table bordered-table sm-table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">Users </th>
                          <th scope="col">Registered On</th>
                          <th scope="col">Plan</th>
                          <th scope="col" class="text-center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Dianne Russell</h6>
                                <span class="text-sm text-secondary-light fw-medium">redaniel@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Free</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user2.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Wade Warren</h6>
                                <span class="text-sm text-secondary-light fw-medium">xterris@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Basic</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user3.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Albert Flores</h6>
                                <span class="text-sm text-secondary-light fw-medium">seannand@mail.ru</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Standard</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user4.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Bessie Cooper </h6>
                                <span class="text-sm text-secondary-light fw-medium">igerrin@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Business</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user5.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                                <span class="text-sm text-secondary-light fw-medium">fellora@mail.ru</span>
                              </div>
                            </div>
                          </td>
                          <td>27 Mar 2024</td>
                          <td>Enterprise </td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-12">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
              <h6 class="mb-2 fw-bold text-lg mb-0">Top Performer</h6>
              <a href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                View All
                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
              </a>
            </div>

            <div class="mt-32">

              <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                <div class="d-flex align-items-center">
                  <img src="assets/images/users/user1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                  <div class="flex-grow-1">
                    <h6 class="text-md mb-0 fw-medium">Dianne Russell</h6>
                    <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                  </div>
                </div>
                <span class="text-primary-light text-md fw-medium">$20</span>
              </div>

              <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                <div class="d-flex align-items-center">
                  <img src="assets/images/users/user2.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                  <div class="flex-grow-1">
                    <h6 class="text-md mb-0 fw-medium">Wade Warren</h6>
                    <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                  </div>
                </div>
                <span class="text-primary-light text-md fw-medium">$20</span>
              </div>

              <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                <div class="d-flex align-items-center">
                  <img src="assets/images/users/user3.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                  <div class="flex-grow-1">
                    <h6 class="text-md mb-0 fw-medium">Albert Flores</h6>
                    <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                  </div>
                </div>
                <span class="text-primary-light text-md fw-medium">$30</span>
              </div>

              <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                <div class="d-flex align-items-center">
                  <img src="assets/images/users/user4.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                  <div class="flex-grow-1">
                    <h6 class="text-md mb-0 fw-medium">Bessie Cooper</h6>
                    <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                  </div>
                </div>
                <span class="text-primary-light text-md fw-medium">$40</span>
              </div>

              <div class="d-flex align-items-center justify-content-between gap-3 mb-24">
                <div class="d-flex align-items-center">
                  <img src="assets/images/users/user5.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                  <div class="flex-grow-1">
                    <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                    <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                  </div>
                </div>
                <span class="text-primary-light text-md fw-medium">$10</span>
              </div>

              <div class="d-flex align-items-center justify-content-between gap-3">
                <div class="d-flex align-items-center">
                  <img src="assets/images/users/user1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                  <div class="flex-grow-1">
                    <h6 class="text-md mb-0 fw-medium">Arlene McCoy</h6>
                    <span class="text-sm text-secondary-light fw-medium">Agent ID: 36254</span>
                  </div>
                </div>
                <span class="text-primary-light text-md fw-medium">$10</span>
              </div>

            </div>
            
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-12">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
              <h6 class="mb-2 fw-bold text-lg mb-0">Top Countries</h6>
                <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                  <option>Today</option>
                  <option>Weekly</option>
                  <option>Monthly</option>
                  <option>Yearly</option>
                </select>
            </div>

            <div class="row gy-4">
              <div class="col-lg-6">
                <div id="world-map" class="h-100 border radius-8"></div>
              </div>

              <div class="col-lg-6">
                <div class="h-100 border p-16 pe-0 radius-8">
                  <div class="max-h-266-px overflow-y-auto scroll-sm pe-16">
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                      <div class="d-flex align-items-center w-100">
                          <img src="assets/images/flags/flag1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                        <div class="flex-grow-1">
                          <h6 class="text-sm mb-0">USA</h6>
                          <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-2 w-100">
                        <div class="w-100 max-w-66 ms-auto">
                          <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary-600 rounded-pill" style="width: 80%;"></div>
                          </div>
                        </div>
                        <span class="text-secondary-light font-xs fw-semibold">80%</span>
                      </div>
                    </div>
      
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                      <div class="d-flex align-items-center w-100">
                          <img src="assets/images/flags/flag2.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                        <div class="flex-grow-1">
                          <h6 class="text-sm mb-0">Japan</h6>
                          <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-2 w-100">
                        <div class="w-100 max-w-66 ms-auto">
                          <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-orange rounded-pill" style="width: 60%;"></div>
                          </div>
                        </div>
                        <span class="text-secondary-light font-xs fw-semibold">60%</span>
                      </div>
                    </div>
      
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                      <div class="d-flex align-items-center w-100">
                          <img src="assets/images/flags/flag3.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                        <div class="flex-grow-1">
                          <h6 class="text-sm mb-0">France</h6>
                          <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-2 w-100">
                        <div class="w-100 max-w-66 ms-auto">
                          <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-yellow rounded-pill" style="width: 49%;"></div>
                          </div>
                        </div>
                        <span class="text-secondary-light font-xs fw-semibold">49%</span>
                      </div>
                    </div>
      
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                      <div class="d-flex align-items-center w-100">
                          <img src="assets/images/flags/flag4.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                        <div class="flex-grow-1">
                          <h6 class="text-sm mb-0">Germany</h6>
                          <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-2 w-100">
                        <div class="w-100 max-w-66 ms-auto">
                          <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success-main rounded-pill" style="width: 100%;"></div>
                          </div>
                        </div>
                        <span class="text-secondary-light font-xs fw-semibold">100%</span>
                      </div>
                    </div>
      
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-12 pb-2">
                      <div class="d-flex align-items-center w-100">
                          <img src="assets/images/flags/flag5.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                        <div class="flex-grow-1">
                          <h6 class="text-sm mb-0">South Korea</h6>
                          <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-2 w-100">
                        <div class="w-100 max-w-66 ms-auto">
                          <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info-main rounded-pill" style="width: 30%;"></div>
                          </div>
                        </div>
                        <span class="text-secondary-light font-xs fw-semibold">30%</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between gap-3">
                      <div class="d-flex align-items-center w-100">
                          <img src="assets/images/flags/flag1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12">
                        <div class="flex-grow-1">
                          <h6 class="text-sm mb-0">USA</h6>
                          <span class="text-xs text-secondary-light fw-medium">1,240 Users</span>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-2 w-100">
                        <div class="w-100 max-w-66 ms-auto">
                          <div class="progress progress-sm rounded-pill" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-primary-600 rounded-pill" style="width: 80%;"></div>
                          </div>
                        </div>
                        <span class="text-secondary-light font-xs fw-semibold">80%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-xxl-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
              <h6 class="mb-2 fw-bold text-lg mb-0">Generated Content</h6>
              <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                <option>Today</option>
                <option>Weekly</option>
                <option>Monthly</option>
                <option>Yearly</option>
              </select>
            </div>

            <ul class="d-flex flex-wrap align-items-center mt-3 gap-3">
              <li class="d-flex align-items-center gap-2">
                  <span class="w-12-px h-12-px rounded-circle bg-primary-600"></span>
                  <span class="text-secondary-light text-sm fw-semibold">Word: 
                      <span class="text-primary-light fw-bold">500</span>
                  </span>
              </li>
              <li class="d-flex align-items-center gap-2">
                  <span class="w-12-px h-12-px rounded-circle bg-yellow"></span>
                  <span class="text-secondary-light text-sm fw-semibold">Image:  
                      <span class="text-primary-light fw-bold">300</span>
                  </span>
              </li>
            </ul>

            <div class="mt-40">
              <div id="paymentStatusChart" class="margin-16-minus"></div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="d-footer">
  <div class="row align-items-center justify-content-between">
    <div class="col-auto">
      <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
    </div>
    <div class="col-auto">
      <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
    </div>
  </div>
</footer>
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

</body>
</html>