<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@stack('namaPage') - Universiti Teknologi Malaysia</title>
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
        <link href="{{ asset('css') }}/styles.css" rel="stylesheet" />
        @stack('stylo')
        <!-- <link rel="icon" type="image/x-icon" href="assets/img/faviconuutm.ico" /> -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/img/faviconuutm.ico" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="nav-fixed">
        <!-- Begin::Header -->
        @include('layouts.header.main')
        <!-- End::Header -->
        <div id="layoutSidenav">
            <!-- Begin::Side Menu -->
            @include('layouts.sidebar.menu')
            <!-- End::Side Menu -->
            <div id="layoutSidenav_content">
                <!-- Begin::Content -->
                @yield('isi_kandungan')
                <!-- End::Content -->
                <footer class="footer-admin mt-auto footer-light">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright © 2023 Universiti Teknologi Malaysia</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="js/scripts.js"></script> -->
        <script src="{{ asset('js') }}/scripts.js"></script>
        @stack('js')
    </body>
</html>
