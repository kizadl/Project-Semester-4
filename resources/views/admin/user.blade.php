<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartGuard - Pengguna</title>
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
                <h6 class="fw-semibold mb-0">User</h6>
            </div>

            <button class="btn btn-success mb-3" id="addUserBtn">Tambah Pengguna</button>

            <div class="card basic-data-table">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tabel Pengguna</h5>
                </div>
                <div class="card-body">
                    <div class="w-full overflow-x-auto">
                        <table class="table bordered-table mb-0 min-w-max" id="dataTable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>
                                            <form action="{{ route('user.delete', $item->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                                    <i class="ri-delete-bin-line"></i> Hapus
                                                </button>
                                            </form>
                                            <button class="btn btn-sm btn-warning editUserBtn"
                                                data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                data-email="{{ $item->email }}" data-role="{{ $item->role }}">
                                                Edit
                                            </button>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    <script>
        // Tampilkan modal dan isi data user
        $(document).on('click', '.editUserBtn', function() {
            const userId = $(this).data('id');
            const userName = $(this).data('name');
            const userEmail = $(this).data('email');
            const userRole = $(this).data('role');

            $('#edit-user-id').val(userId);
            $('#edit-user-name').val(userName);
            $('#edit-user-email').val(userEmail);
            $('#edit-user-role').val(userRole);
            $('#edit-user-password').val('');

            // Set action form ke /update/{id}
            $('#editUserForm').attr('action', '{{ url('/update') }}/' + userId);

            var modal = new bootstrap.Modal(document.getElementById('editUserModal'));
            modal.show();
        });
    </script>

    <!-- Modal Edit User -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="editUserForm" method="POST" action="#">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserModalLabel">Edit Pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="edit-user-id" name="id">
                        <div class="mb-3">
                            <label for="edit-user-name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="edit-user-name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="edit-user-email" name="email" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-password" class="form-label">Password (opsional)</label>
                            <input type="password" class="form-control" id="edit-user-password" name="password"
                                placeholder="Kosongkan jika tidak ingin mengubah password">
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-role" class="form-label">Role</label>
                            <select class="form-control" id="edit-user-role" name="role" required>
                                <option value="">Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        @if ($errors->any())
                            <div class="text-danger">
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Create User -->
    <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form id="createUserForm" method="POST" action="{{ route('user.create') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createUserModalLabel">Tambah Pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="create-user-name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="create-user-name" name="name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="create-user-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="create-user-email" name="email"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="create-user-password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="create-user-password" name="password"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="create-user-role" class="form-label">Role</label>
                            <select class="form-control" id="create-user-role" name="role" required>
                                <option value="">Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        @if ($errors->any() && session('modal') == 'create')
                            <div class="text-danger">
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $('#addUserBtn').on('click', function() {
            // Bersihkan form
            $('#create-user-name').val('');
            $('#create-user-email').val('');
            $('#create-user-password').val('');
            $('#create-user-role').val('');
            // Tampilkan modal
            var modal = new bootstrap.Modal(document.getElementById('createUserModal'));
            modal.show();
        });
    </script>

</body>

</html>
