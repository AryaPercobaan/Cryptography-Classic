<style>
	#textP,
	#textC {
		padding: 10px;
		width: 50%;
		height: 150px;
		margin-left: 50px;
	}

	#choice {
		color: black;
		border: 1px solid black;
		border-radius: 5px;
		padding: 10px;
	}

	#encT,
	#decT {
		color: #000;
		width: 50%;
		height: 80px;
		font-size: 20px;
		margin-left: 50px;
		margin-top: 100px;
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

	#encButton0,
	#decButton0 {
		background-color: #73cf2a;
		border: none;
		border-radius: 5px;
		color: black;
		display: block;
		height: 50px;
		font-size: 12pt;
		font-weight: 600;
		margin-top: 20px;
		margin-left: 50px;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
	}

	#EDMenu {
		visibility: hidden;
		margin-bottom: 20px;
	}


	#decButton0 {
		background-color: #9fbd38;
		margin-top: -50px;
		margin-left: 200px;
	}

	#encButton,
	#decButton {
		background-color: #4CDF50;
		border: none;
		position: relative;
		border-radius: 5px;
		color: black;
		display: block;
		height: 50px;
		font-size: 12pt;
		font-weight: 600;
		top: 25px;
		left: 50px;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
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
		margin-top: 20px;
		padding: 10px;
	}

	#m33 {
		border: 1px solid #404440;
		visibility: hidden;
		left: 200px;
		top: 320px;
		width: 210px;
		height: 150px;
		margin-top: 20px;
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

	p#inputP,
	#inputC {
		font-size: 16pt;
		margin-left: 50px;
		margin-top: 50px;
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
								<p>Hill Cipher merupakan salah satu algoritma kriptografi kunci simetris yang memiliki beberapa kelebihan dalam enkripsi data. Untuk menghindari matrik kunci yang tidak invertible, matrik kunci dibangkitkan menggunakan koefisien binomial newton.  Proses enkripsi dan deskripsi menggunakan kunci yang sama, plaintext dapat menggunakan media gambar atau text.
Algoritma Hill Cipher menggunakan matriks berukuran m x m sebagai kunci untuk melakukan enkripsi dan dekripsi. Dasar teori matriks yang digunakan dalam Hill Cipher antara lain adalah perkalian antar matriks dan melakukan invers pada matriks.
</p>
								<label><b>Cara menggunanakan kriptografi hill cipher: </b></label>
								<ul>
									<li>Pilihlah jenis ordo matriks yang diinginkan, tersedia 2x2 dan 3x3. </li>
									<li>Kemudian isilah kolom matriksnya dengan nilai invers matriks (contoh invers matriks : 4 3 3 2). Kemudian tekan tombol submit</li>
									<li>Lalu, <b> pilihlah Encrypt </b>,jika ingin lakukan enksirpsi. <b> pilihlah Decrypt </b>, jika ingin lakukan deskripsi</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<!-- column -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div id="inSec">
											<div id="EDMenu">
												<button id="enhButton0" class="btn btn-primary"
													type="button">Encrypt</button> &nbsp;&nbsp;
												<button id="dehButton0" class="btn btn-info"
													type="button">Decrypt</button>
											</div>


											<select id="choice">
												<option value="m22">2 X 2 Matrix</option>
												<option value="m33">3 X 3 Matrix</option>
											</select>
											<div class="row">
												<div class="col-md-6">
													<form id="m22">
														<input id="tw0" type="number" name="index" min="0" max="25">
														<input id="tw1" type="number" name="index" min="0" max="25">
														<br />
														<input id="tw2" type="number" name="index" min="0" max="25">
														<input id="tw3" type="number" name="index" min="0" max="25">
													</form>
												</div>
												<div class="col-md-6">
													<form id="m33">
														<input id="tr0" type="number" name="index" min="0" max="25">
														<input id="tr1" type="number" name="index" min="0" max="25">
														<input id="tr2" type="number" name="index" min="0" max="25">
														<input id="tr3" type="number" name="index" min="0" max="25">
														<input id="tr4" type="number" name="index" min="0" max="25">
														<input id="tr5" type="number" name="index" min="0" max="25">
														<input id="tr6" type="number" name="index" min="0" max="25">
														<input id="tr7" type="number" name="index" min="0" max="25">
														<input id="tr8" type="number" name="index" min="0" max="25">
													</form>
												</div>
											</div>
											<button id="subButtonH" class="btn btn-lg btn-success"
												style="margin-top:-2em; color:white;" type="button">Submit</button><br>
										</div>
									</div>
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
<script src="<?= base_url(); ?>assets/scripts_hill/index.js"></script>

</html>
