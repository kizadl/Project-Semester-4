<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
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
    <div>
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
  
          <li class="sidebar-menu-group-title">Data Master</li>
  
          <li>
          <a href="/profile">
              <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
              <span>Profile</span>
          </a>
          </li>
          
      </ul>
      </div>
  </aside>
  {{-- Sidebar End --}}
  </div>

<main class="dashboard-main">
  <x-header></x-header>
</div> 
    
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">View Profile</h6>
  <ul class="d-flex align-items-center gap-2">
    <li class="fw-medium">
      <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
        Data Master
      </a>
    </li>
    <li>-</li>
    <li class="fw-medium">Profile</li>
  </ul>
</div>

        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="user-grid-card position-relative border radius-16 overflow-hidden bg-base h-100">
                    <img src="assets/images/user-grid/user-grid-bg1.png" alt="" class="w-100 object-fit-cover">
                    <div class="pb-24 ms-16 mb-24 me-16  mt--100">
                        <div class="text-center border border-top-0 border-start-0 border-end-0">
                            <img src="assets/images/user-grid/user-grid-img14.png" alt="" class="border br-white border-width-2-px w-200-px h-200-px rounded-circle object-fit-cover">
                            <h6 class="mb-0 mt-16">Jacob Jones</h6>
                            <span class="text-secondary-light mb-16">ifrandom@gmail.com</span>
                        </div>
                        <div class="mt-24">
                            <h6 class="text-xl mb-16">Personal Info</h6>
                            <ul>
                                <li class="d-flex align-items-center gap-1 mb-12">
                                    <span class="w-30 text-md fw-semibold text-primary-light">Full Name</span>
                                    <span class="w-70 text-secondary-light fw-medium">: Will Jonto</span>
                                </li>
                                <li class="d-flex align-items-center gap-1 mb-12">
                                    <span class="w-30 text-md fw-semibold text-primary-light"> Email</span>
                                    <span class="w-70 text-secondary-light fw-medium">: willjontoax@gmail.com</span>
                                </li>
                                <li class="d-flex align-items-center gap-1 mb-12">
                                    <span class="w-30 text-md fw-semibold text-primary-light"> Phone Number</span>
                                    <span class="w-70 text-secondary-light fw-medium">: (1) 2536 2561 2365</span>
                                </li>
                                <li class="d-flex align-items-center gap-1 mb-12">
                                    <span class="w-30 text-md fw-semibold text-primary-light"> Department</span>
                                    <span class="w-70 text-secondary-light fw-medium">: Design</span>
                                </li>
                                <li class="d-flex align-items-center gap-1 mb-12">
                                    <span class="w-30 text-md fw-semibold text-primary-light"> Designation</span>
                                    <span class="w-70 text-secondary-light fw-medium">: UI UX Designer</span>
                                </li>
                                <li class="d-flex align-items-center gap-1 mb-12">
                                    <span class="w-30 text-md fw-semibold text-primary-light"> Languages</span>
                                    <span class="w-70 text-secondary-light fw-medium">: English</span>
                                </li>
                                <li class="d-flex align-items-center gap-1">
                                    <span class="w-30 text-md fw-semibold text-primary-light"> Bio</span>
                                    <span class="w-70 text-secondary-light fw-medium">: Lorem Ipsum is simply dummy text of the       printing and typesetting industry.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card h-100">
                    <div class="card-body p-24">
                        <ul class="nav border-gradient-tab nav-pills mb-20 d-inline-flex" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link d-flex align-items-center px-24 active" id="pills-edit-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-edit-profile" type="button" role="tab" aria-controls="pills-edit-profile" aria-selected="true">
                                Edit Profile 
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link d-flex align-items-center px-24" id="pills-change-passwork-tab" data-bs-toggle="pill" data-bs-target="#pills-change-passwork" type="button" role="tab" aria-controls="pills-change-passwork" aria-selected="false" tabindex="-1">
                                Change Password 
                              </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">   
                            <div class="tab-pane fade show active" id="pills-edit-profile" role="tabpanel" aria-labelledby="pills-edit-profile-tab" tabindex="0">
                                <h6 class="text-md text-primary-light mb-16">Profile Image</h6>
                                <!-- Upload Image Start -->
                                <div class="mb-24 mt-16">
                                    <div class="avatar-upload">
                                            <div class="avatar-edit position-absolute bottom-0 end-0 me-24 mt-16 z-1 cursor-pointer">
                                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" hidden>
                                                <label for="imageUpload" class="w-32-px h-32-px d-flex justify-content-center align-items-center bg-primary-50 text-primary-600 border border-primary-600 bg-hover-primary-100 text-lg rounded-circle">
                                                    <iconify-icon icon="solar:camera-outline" class="icon"></iconify-icon>
                                                </label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Upload Image End -->
                                <form action="#">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Full Name <span class="text-danger-600">*</span></label>
                                                <input type="text" class="form-control radius-8" id="name" placeholder="Enter Full Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label for="email" class="form-label fw-semibold text-primary-light text-sm mb-8">Email <span class="text-danger-600">*</span></label>
                                                <input type="email" class="form-control radius-8" id="email" placeholder="Enter email address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label for="number" class="form-label fw-semibold text-primary-light text-sm mb-8">Phone</label>
                                                <input type="email" class="form-control radius-8" id="number" placeholder="Enter phone number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label for="depart" class="form-label fw-semibold text-primary-light text-sm mb-8">Department <span class="text-danger-600">*</span> </label>
                                                <select class="form-control radius-8 form-select" id="depart">
                                                    <option>Enter Event Title </option>
                                                    <option>Enter Event Title One </option>
                                                    <option>Enter Event Title Two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label for="desig" class="form-label fw-semibold text-primary-light text-sm mb-8">Designation <span class="text-danger-600">*</span> </label>
                                                <select class="form-control radius-8 form-select" id="desig">
                                                    <option>Enter Designation Title </option>
                                                    <option>Enter Designation Title One </option>
                                                    <option>Enter Designation Title Two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-20">
                                                <label for="Language" class="form-label fw-semibold text-primary-light text-sm mb-8">Language <span class="text-danger-600">*</span> </label>
                                                <select class="form-control radius-8 form-select" id="Language">
                                                    <option> English</option>
                                                    <option> Bangla </option>
                                                    <option> Hindi</option>
                                                    <option> Arabic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-20">
                                                <label for="desc" class="form-label fw-semibold text-primary-light text-sm mb-8">Description</label>
                                                <textarea name="#0" class="form-control radius-8" id="desc" placeholder="Write description..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center gap-3">
                                        <button type="button" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-md px-56 py-11 radius-8"> 
                                            Cancel
                                        </button>
                                        <button type="button" class="btn btn-primary border border-primary-600 text-md px-56 py-12 radius-8"> 
                                            Save
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="pills-change-passwork" role="tabpanel" aria-labelledby="pills-change-passwork-tab" tabindex="0">
                                <div class="mb-20">
                                    <label for="your-password" class="form-label fw-semibold text-primary-light text-sm mb-8">New Password <span class="text-danger-600">*</span></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control radius-8" id="your-password" placeholder="Enter New Password*">
                                        <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-password"></span>
                                    </div>
                                </div>
                                <div class="mb-20">
                                    <label for="confirm-password" class="form-label fw-semibold text-primary-light text-sm mb-8">Confirmed Password <span class="text-danger-600">*</span></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control radius-8" id="confirm-password" placeholder="Confirm Password*">
                                        <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#confirm-password"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
    // ======================== Upload Image Start =====================
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    // ======================== Upload Image End =====================

    // ================== Password Show Hide Js Start ==========
    function initializePasswordToggle(toggleSelector) {
        $(toggleSelector).on('click', function() {
            $(this).toggleClass("ri-eye-off-line");
            var input = $($(this).attr("data-toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    }
    // Call the function
    initializePasswordToggle('.toggle-password');
  // ========================= Password Show Hide Js End ===========================
</script>

</body>
</html>
