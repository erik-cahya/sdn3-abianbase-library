<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Login | Library SDN 3 Abianbase</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin') }}/assets/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/bootstrap.min.css">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/file-upload.css">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/plyr.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/full-calendar.css">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/jquery-ui.css">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/editor-quill.css">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/apexcharts.css">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/calendar.css">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/jquery-jvectormap-2.0.5.css">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/main.css">
</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <div class="loader"></div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <section class="auth d-flex">
        <div class="auth-left bg-main-50 flex-center p-24">
            <img src="{{ asset('admin') }}/assets/images/thumbs/auth-img1.png" alt="">
        </div>
        <div class="auth-right flex-center flex-column px-24 py-40">
            <div class="auth-right__inner w-100 mx-auto">
                <a href="/" class="mb-30">
                    {{-- <img src="{{ asset('admin') }}/assets/images/logo/logo.png" alt=""> --}}
                    <img src="{{ asset('assets/logo_dark.png') }}" alt="logo_sdn3 abianbase" width="140px">
                </a>
                <h2 class="mb-8">Halo, Selamat Datang! &#128075;</h2>
                <p class="text-15 mb-32 text-gray-600">Silahkan login menggunakan akun yang sudah terdaftar</p>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-24">
                        <label for="fname" class="form-label h6 mb-8">Email or Username</label>
                        <div class="position-relative">
                            <input type="text" class="form-control py-11 ps-40" id="fname" placeholder="Type your username" name="email" value="{{ old('email') }}">
                            <span class="position-absolute top-50 translate-middle-y d-flex ms-16 text-gray-600"><i class="ph ph-user"></i></span>
                        </div>
                    </div>
                    <div class="mb-24">
                        <label for="current-password" class="form-label h6 mb-8">Password</label>
                        <div class="position-relative">
                            <input type="password" class="form-control py-11 ps-40" id="current-password" placeholder="Enter Current Password" value="password" name="password">
                            <span class="toggle-password position-absolute top-50 inset-inline-end-0 translate-middle-y ph ph-eye-slash me-16" id="#current-password"></span>
                            <span class="position-absolute top-50 translate-middle-y d-flex ms-16 text-gray-600"><i class="ph ph-lock"></i></span>
                        </div>
                    </div>
                    <div class="flex-between mb-32 flex-wrap gap-8">
                        <div class="form-check mb-0 flex-shrink-0">
                            <input class="form-check-input rounded-4 flex-shrink-0" type="checkbox" value="" id="remember">
                            <label class="form-check-label text-15 flex-grow-1" for="remember">Remember Me </label>
                        </div>
                        <a href="forgot-password.html" class="text-main-600 hover-text-decoration-underline text-15 fw-medium">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-main rounded-pill w-100">Log In</button>

                </form>
            </div>
        </div>
    </section>

    <!-- Jquery js -->
    <script src="{{ asset('admin') }}/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('admin') }}/assets/js/boostrap.bundle.min.js"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset('admin') }}/assets/js/phosphor-icon.js"></script>
    <!-- file upload -->
    <script src="{{ asset('admin') }}/assets/js/file-upload.js"></script>
    <!-- file upload -->
    <script src="{{ asset('admin') }}/assets/js/plyr.js"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="{{ asset('admin') }}/assets/js/full-calendar.js"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin') }}/assets/js/jquery-ui.js"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin') }}/assets/js/editor-quill.js"></script>
    <!-- apex charts -->
    <script src="{{ asset('admin') }}/assets/js/apexcharts.min.js"></script>
    <!-- Calendar Js -->
    <script src="{{ asset('admin') }}/assets/js/calendar.js"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset('admin') }}/assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset('admin') }}/assets/js/jquery-jvectormap-world-mill-en.js"></script>

    <!-- main js -->
    <script src="{{ asset('admin') }}/assets/js/main.js"></script>

</body>

</html>
