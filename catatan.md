# Beberapa Hal, saran untuk perubahan
- Pada page 'Aparatur, Fasilitas Umum, Kependudukan (h4)' Untuk mengubah Font style
    - Bisa cari disini, untuk font style https://fonts.google.com/


```
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
						<a data-toggle="collapse" href="#Informasi" class="collapsed" aria-expanded="false"> <!-- ================================ Tiru Ini ======================== -->
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
```

<!-- ============================================= Footer ======================================= -->
```
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
```