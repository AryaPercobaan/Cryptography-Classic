
<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="lds-ripple">
			<div class="lds-pos"></div>
			<div class="lds-pos"></div>
		</div>
	</div>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar" data-navbarbg="skin6">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header" data-logobg="skin6">
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<a class="navbar-brand justify-content-center" href="<?= base_url(); ?>Home/Beranda">

						<!-- Logo icon -->
						<b class="logo-icon">
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->

						</b>
						<!--End Logo icon -->
						<!-- Logo text -->
						<span class="logo-text">
							<!-- dark Logo text -->
							
							<p><img src="<?= base_url(); ?>assets/img/portfolio/logo.png" alt="homepage" class="dark-logo"><strong class="text-info mt-4">KRIPTOGRAFI KLASIK</strong></p>

						</span>
					</a>
					<!-- ============================================================== -->
					<!-- End Logo -->
					<!-- ============================================================== -->
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
						href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
					<ul class="navbar-nav d-none d-md-block d-lg-none">
						<li class="nav-item">
							<a class="nav-toggler nav-link waves-effect waves-light text-white"
								href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
						</li>
					</ul>
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav mr-auto mt-md-0 ">
					</ul>

					<!-- ============================================================== -->
					<!-- Right side toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav">
						<!-- ============================================================== -->
						<!-- User profile and search -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">Selamat Datang Pelajar</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar" data-sidebarbg="skin6">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<?php $this->load->view('assets/_sidebar'); ?>
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			<div class="container-fluid">
				<!-- ============================================================== -->
				<!-- Sales chart -->
				<!-- ============================================================== -->
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title text-center"><b>Selamat Datang di Menu Simulasi Algoritma Kriptografi Klasik!</b></h4>
								<br>
								<label><b>Aplikasi ini dibangun menggunakan <i> Framework Codeigniter berbasis web </i> dan telah di hostingkan,  dimana framework ini dapat mengamankan seluruh assets yang telah kami bangun di dalamnya, dan menimalisir tindakan <i> hacking / cracking. </i> </b></label>
								<label>Kami Mahasiswa Politeknik Caltex Riau, membangun website ini untuk kebutuhan dunia pendidikan. Dimana kami yang beranggotakan :</label>
								<ul>
									<li><b>Nama : </b> Arya Asa Fikarda  &nbsp;|&nbsp; <b>NIM : </b>1955301024</li>
									<li><b>Nama : </b> Maduri  &nbsp;|&nbsp; <b>NIM : </b>1955301070</li>
								</ul>
								<br>
								<label>Catatan penggunaan :</label>
								<ul>
									<li>Internet disarankan mesti stabil, guna menimalisir error dalam akses website.</li>
									<li>Disarankan melihat tata cara penggunaan di setiap algoritma yang telah di sediakan.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- ============================================================== -->
			<!-- End Container fluid  -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->
			<footer class="footer text-center"> Development by Arya Asa Fikarda & Maduri © 2022 Powered by <a
					href="https://www.wrappixel.com/">startbootstrap.com</a>
			</footer>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

</body>

</html>
