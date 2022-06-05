<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/Desa-Logo.png') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Desa Kumpulrejo
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/paper-dashboard.css?v=2.0.1') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/fistyle.css') ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('assets/demo/demo.css') ?>" rel="stylesheet" />
</head>

<body class="">
    <button onclick="topFunction()" id="ScllTopBtn" title="Go to top">Top</button>
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="<?= base_url() ?>" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="<?= base_url('assets/img/Desa-Logo.png') ?>">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="<?= base_url() ?>" class="simple-text logo-normal">
                    Desa<br>Kumpulrejo
                    <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="<?= base_url('') ?>">
                            <i class="nc-icon nc-bank"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#Informasi" class="collapsed" aria-expanded="false">
                            <i class="nc-icon nc-alert-circle-i"></i>
                            <p>Informasi<span class="caret"></span></p>
                        </a>
                        <div class="collapse" id="Informasi">
                            <ul class="nav">
                                <li>
                                    <a href="<?= base_url('Profile') ?>">
                                        <span class="sidebar-normal"> Profil </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Aparatur') ?>">
                                        <span class="sidebar-normal"> Aparatur </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Fasilitas') ?>">
                                        <span class="sidebar-normal"> Fasilitas Umum </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Galeri') ?>">
                                        <span class="sidebar-normal"> Galeri </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Potensi') ?>">
                                        <span class="sidebar-normal"> Potensi Desa </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#Data" class="collapsed" aria-expanded="false">
                            <i class="nc-icon nc-book-bookmark"></i>
                            <p>Data<span class="caret"></span></p>
                        </a>
                        <div class="collapse" id="Data">
                            <ul class="nav">
                                <li>
                                    <a href="<?= base_url('Pendidikan') ?>">
                                        <span class="sidebar-normal"> Pendidikan </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Kependudukan') ?>">
                                        <span class="sidebar-normal"> Kependudukan </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Profile/Kesejahteraan') ?>">
                                        <span class="sidebar-normal"> Kesejahteraan </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('Profile/Keudes') ?>">
                                        <span class="sidebar-normal"> Keuangan Desa </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?= base_url('Profile/Peraturan') ?>">
                            <i class="nc-icon nc-html5"></i>
                            <p>Peraturan Desa</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Pelayanan') ?>">
                            <i class="nc-icon nc-mobile"></i>
                            <p>Pelayanan</p>
                        </a>
                    </li>
                    <li>
                        <a href="https://corona.kendalkab.go.id/">
                            <i class="nc-icon nc-planet"></i>
                            <p>Covid-19</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" style="min-height: 100vh;">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Title</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn-rotate" href="javascript:;" title="Login">
                                    <i class="nc-icon nc-circle-10"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block" href="http://kumpulrejo.desa.id/dashbord/login">Login</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- content -->
            <div class="content">
                <?php echo $contents ?>
            </div>

            <!-- footer -->
            <footer class="footer" style="position: relative; bottom: 0; width: -webkit-fill-available;">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://demos.creative-tim.com/paper-dashboard/examples/dashboard.html" target="_blank">Paper Dashboard live demo</a></li>
                                <li><a href="https://demos.creative-tim.com/paper-dashboard/docs/1.0/getting-started/introduction.html?_ga=2.52104425.1359347014.1633874747-280168546.1633874747" target="_blank">Docs</a></li>
                                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                © 2020, made with <i class="fa fa-heart heart"></i> by Fiya
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/core/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url('assets/js/plugins/bootstrap-notify.js') ?>"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('assets/js/paper-dashboard.min.js?v=2.0.1') ?>" type="text/javascript"></script>

    <!-- ADDS Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Individual Script -->
    <script src="<?= base_url('assets/js/fiscript.js') ?>"></script>

</body>

</html>