<style>
	#choice {
		color: black;
		border: 1px solid black;
		border-radius: 5px;
		padding: 10px;
	}

	#subButton {
		background-color: #4CDF50;
		border: none;
		border-radius: 5px;
		color: black;
		height: 50px;
		font-size: 12pt;
		font-weight: 600;
		margin-left: 20px;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
	}

	#subButtonH {
		background-color: #4CDF50;
		border: none;
		border-radius: 5px;
		color: black;
		height: 50px;
		font-size: 12pt;
		font-weight: 600;
		margin-top: 30px;
		margin-bottom: 10px;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
	}

	#EDMenu {
		visibility: hidden;
		margin-top: 25px;
		margin-bottom: 25px;
	}


	#decButton0 {
		background-color: #9fbd38;
		margin-top: -50px;
		margin-left: 200px;
	}

	#Home {
		background-color: #c1c8c1 border: none;
		border-radius: 5px;
		color: black;
		height: 50px;
		font-size: 12pt;
		font-weight: 600;
		width: 120px;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
	}

	#m22 {
		border: 1px solid #404440;
		width: 150px;
		margin-top: 50px;
		padding: 10px;
	}

	#m33 {
		border: 1px solid #404440;
		visibility: hidden;
		position: absolute;
		left: 200px;
		top: 320px;
		width: 210px;
		height: 150px;
		margin-top: 30px;
		padding: 10px;
	}

	input[type="number"] {
		width: 50px;
		height: 30px;
		margin: 5px;
		padding: 5px;
	}

	p#inputT {
		font-size: 16pt;
		display: inline-block;
		margin-top: 50px;
	}

	#inputTM {
		font-size: 16pt;
		display: inline-block;
		margin-top: 10px;
	}

	#intext {
		margin-left: 20px;
		padding: 10px;
		width: 30%;
	}

	input[type=text] {
		border-radius: 4px;
	}

</style>

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
					<a class="navbar-brand justify-content-center" href="<?= base_url(); ?>Home">
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
								<h4 class="card-title"><b>Hill Cipher</b></h4>
								<p>Hill cipher merupakan penerapan aritmatika modulo pada kriptografi. Teknik
									kriptografi ini menggunakan sebuah matriks persegi sebagai kunci yang digunakan
									untuk melakukan enkripsi dan dekripsi.</p>
								<label><b>Cara menggunanakan dekripsi hill cipher : </b></label>
								<ul>
									<li>Isilah chiper text yang telah di dapatkan</li>
									<li>Kemudian, tekan tombol <b>decrypt</b></li>
									<li>Maka plain text akan keluar di sebelahnya</li>
									<br>
									-----------------------
									<li>Jika tombol <b>Kembali ke Hill cipher </b> maka akan kembali ke halaman awal hill cipher</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<!-- column -->
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<a class="btn btn-secondary" href="Hill" style="color:white;">Kembali ke Hill
											cipher</a> &nbsp;&nbsp;&nbsp;
										<a class="btn btn-primary" style="color:white;" href="Hill_encrypt">Encrypt</a>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<div id="inSec">
											<div id="encForm">
												<h3 class="page-title mb-0 p-0">Cipher Text</h3>
												<textarea class="form-control pl-0 form-control-line"
													style="max-height: 250px; border-color:#707070; margin-top:10px;"
													rows="5" id="textC" name="cipherM"></textarea>
											</div>
											<button id="decButton" class="btn btn-lg btn-success"
												style="color:white; margin-top:20px;" type="button">Decrypt</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card" style="padding-bottom:20px;">
							<div class="card-body">
								<h3 class="page-title mb-0 p-0">Plain Text</h3>
								<textarea class="form-control pl-0 form-control-line" id="decT"
									style="max-height: 250px;  margin-top:20px; border-color:#707070;" rows="10"
									readonly></textarea>
							</div>
						</div>
					</div>
				</div>

				<!-- column -->
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
<script src="<?= base_url(); ?>assets/scripts_hill/util.js"></script>
<script src="<?= base_url(); ?>assets/scripts_hill/storage.js"></script>
<script src="<?= base_url(); ?>assets/scripts_hill/decrypt.js"></script>

</html>
