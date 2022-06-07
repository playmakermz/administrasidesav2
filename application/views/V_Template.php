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
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
		name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="<?= base_url('assets/css/paper-dashboard.css?v=2.0.1') ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/css/fistyle.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/css/style-configure.css') ?>" rel="stylesheet" />

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
						<!-- Tombol -->
						<div class="navbar-toggle">
							<!-- ===================================== Edit bagian ini ================================-->

							<div class="nav-mobile">
								<!-- ========================================== lanjutkan untuk navbar ============================= -->

								<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
									data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">

									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-folder-symlink-fill" viewBox="0 0 16 16">
										<path
											d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z" />
									</svg>
								</button>

								<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
									id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
									<div class="offcanvas-header">
										<h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
												fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
												<path
													d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
											</svg>
											Desa Kumpulrejo
										</h5>
										<button type="button" class="btn-close" data-bs-dismiss="offcanvas"
											aria-label="Close"></button>
									</div>
									<div class="offcanvas-body">
										<ul class="list-group list-group-flush">
											<li class="list-group-item">
												<a href="#">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
														<path
															d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
													</svg>
													Beranda
												</a>
											</li>
											<!-- Akhiran -->
											<li class="list-group-item" class="drop-menu-01">

												<span>
													<a href="javascript:void(0);" onclick="dropMenu01()">
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
															fill="currentColor" class="bi bi-info-square-fill"
															viewBox="0 0 16 16">
															<path
																d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
														</svg>
														Informasi
													</a>
												</span>


												<span style="float:right">
													<a href="javascript:void(0)" onclick="reMenu01()"
														class="display-pop-up-01" id="re-drop-01">
														<i class="bi bi-eject-fill"></i>
													</a>
												</span>

												<div id="display-pop-up-01" class="display-pop-up-01">
													<!-- ================================== Dropdown Satu opada Menu ============================== -->
													<ul class="list-group list-group-flush">
														<li class="list-group-item">Profil</li>
														<li class="list-group-item">Aparatur</li>
														<li class="list-group-item">Fasilitas Umum</li>
														<li class="list-group-item">Galeri</li>
														<li class="list-group-item">Potensi Desa</li>
													</ul>
												</div>
											</li>
											<!-- Akhiran -->
											<li class="list-group-item" class="drop-menu-02">

												<span>
													<a href="javascript:void(0)" onclick="dropMenu02()">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
													fill="currentColor" class="bi bi-clipboard2-data-fill"
													viewBox="0 0 16 16">
													<path
														d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
													<path
														d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0V9a1 1 0 0 1 1-1Z" />
												</svg>
												Data
												</a>

												<span style="float:right">
													<a href="javascript:void(0)" onclick="reMenu02()"
														class="display-pop-up-02" id="re-drop-02">
														<i class="bi bi-eject-fill"></i>
													</a>
												</span>
												</span>

												<div id="display-pop-up-02" class="display-pop-up-02">
													<ul class="list-group list-group-flush">
														<li class="list-group-item">Pendidikan</li>
														<li class="list-group-item">Kependudukan</li>
														<li class="list-group-item">Kesejahteraan</li>
														<li class="list-group-item">Keuangan Desa</li>
													</ul>
												</div>

											</li>
											<!-- akhiran -->
											<li class="list-group-item">
												<a href="">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
														fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
														<path
															d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
													</svg>
													Peraturan Desa
												</a>
											</li>
											<!-- Akhiran -->
											<li class="list-group-item">
												<i class="nc-icon nc-planet"></i>
												COVID-19
											</li>
											<!-- Akhiran -->
										</ul>

									</div>
								</div>


</div>


						</div>
						<a class="navbar-brand" href="javascript:;">Title</a>
					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
						aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
										<span class="d-lg-none d-md-block"
											href="http://kumpulrejo.desa.id/dashbord/login">Login</span>
									</p>
								</a>
							</li>


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
								<li><a href="https://demos.creative-tim.com/paper-dashboard/examples/dashboard.html"
										target="_blank">Paper Dashboard live demo</a></li>
								<li><a href="https://demos.creative-tim.com/paper-dashboard/docs/1.0/getting-started/introduction.html?_ga=2.52104425.1359347014.1633874747-280168546.1633874747"
										target="_blank">Docs</a></li>
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
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
		integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
		integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
	</script>

	<!-- Individual Script -->
	<script src="<?= base_url('assets/js/fiscript.js') ?>"></script>
	<script src="<?= base_url('assets/js/Tombol.js') ?>"></script>

</body>

</html>
