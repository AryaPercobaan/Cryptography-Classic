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
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
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
					<a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
					<ul class="navbar-nav d-none d-md-block d-lg-none">
						<li class="nav-item">
							<a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
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
							<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selamat Datang Pelajar</a>
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
								<h4 class="card-title"><b>Caesar Cipher</b></h4>
								<p> Caesar Cipher merupakan salah satu algoritma cipher tertua dan paling diketahui dalam perkembangan ilmu kriptografi. Caesar cipher merupakan salah satu jenis cipher substitusi yang membentuk cipher dengan cara melakukan penukaran karakter pada plainteks menjadi tepat satu karakter pada chiperteks. Teknik seperti ini disebut juga sebagai chiper abjad tunggal.Algoritma kriptografi Caesar Cipher sangat mudah untuk digunakan. Inti dari algoritma kriptografi ini adalah melakukan pergeseran terhadap semua karakter pada plainteks dengan nilai pergeseran yang sama. Adapun langkah- langkah yang dilakukan untuk membentuk chiperteks dengan Caesar Cipher adalah :Menentukan besarnya pergeseran karakter yang digunakan dalam membentuk cipherteks ke plainteks, Menukarkan karakter pada plainteks menjadi cipherteks dengan berdasarkan pada pergeseran yang telah ditentukan sebelumnya.
Algoritma dari Caesar Cipher adalah C = E ( P)=(P+K)mod 26 untuk fungsi enkripsi. Sedangkan untuk fungsi penelitian adalah P = D ( C )=(C-7)mod 26.
 </p>
								<label><b>Cara menggunanakan kriptografi caesar : </b></label>
								<ul>
									<li>Untuk <b>Encrypt cipher </b> maka memasukkan jumlah deret dan plain text nya. lalu
										tekan tombol encrpyt.</li>
									<li>Untuk <b>Decrypt cipher </b> maka masukkan hasil pengolahan. Ke kolom plain
										text, lalu masukkan the jumlah deret awal. kemudian tekan tombol decrpyt</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<!-- column -->
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="col-md-12">
									<h4 class="card-title">Simulasi Caesar Cipher</h4>
								</div>
								<div class="flot-chart"> <br>
									<div class="row">
										<div class="col-md-6">
											<form action="" method="post">
												<div class="form-group">
													<div class="col-md-12">
														<input class="form-control pl-0 form-control-line pl-2" type="number" name="key_caesar" id="key_caesar" onclick="SelectAll('key_caesar')" placeholder="Masukkan jumlah deret ..." required oninvalid="this.setCustomValidity('Kolom tidak boleh kosong')" onkeyup="myValidasi();" />
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<textarea style="max-height: 250px;" rows="5" name="plantext_caesar" id="plantext_caesar" placeholder="Masukkan Plain Text" onclick="SelectAll('plantext_caesar')" class="form-control pl-0 form-control-line pl-2" required oninvalid="this.setCustomValidity('Kolom tidak boleh kosong')"></textarea>
													</div>
												</div>
												<br />
												<div class="form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-info d-none d-md-inline-block text-white mr-3" name="encrypt_caesar" value="Encrypt" />
														<input type="submit" class="btn btn-success d-none d-md-inline-block text-white mr-3" name="decrypt_caesar" value="Decrypt" />
														<input class="btn btn-danger d-none d-md-inline-block text-white" type="reset" value="Hapus" />
													</div>
												</div>
											</form>
										</div>

										<div class="col-md-6">
											<div class="form-group" style="margin-bottom:26px;">
												<h3 class="page-title mb-0 p-0" style="color:#009efb">HASIL</h3>
											</div>

											<?php include "assets/_caesar.php" ?>

											<?php

											if ((isset($_POST['key_caesar'])) && (isset($_POST['plantext_caesar'])) && isset($_POST['encrypt_caesar'])) {
												$key = $_POST['key_caesar'];
												$plantext = $_POST['plantext_caesar'];
												$split_key = str_split($key);
												$i = 0;
												$split_chr = str_split($plantext);
												while ($key > 52) {
													$key = $key - 52;
												}
												foreach ($split_chr as $chr) {
													if (char_to_dec_caesar($chr) != null) {
														$split_nmbr[$i] = char_to_dec_caesar($chr);
													} else {
														$split_nmbr[$i] = $chr;
													}
													$i++;
												}
												echo '<textarea class="form-control pl-0 form-control-line pl-2" style="max-height: 250px;" rows="5" readonly id="result" cols="33" onclick="SelectAll(\'result\')" >';
												foreach ($split_nmbr as $nmbr) {
													if (($nmbr + $key) > 52) {
														if (dec_to_char_caesar($nmbr) != null) {
															echo dec_to_char_caesar(($nmbr + $key) - 52);
														} else {
															echo $nmbr;
														}
													} else {
														if (dec_to_char_caesar($nmbr) != null) {
															echo dec_to_char_caesar($nmbr + $key);
														} else {
															echo $nmbr;
														}
													}
												}
												echo '</textarea><br/>';
											} else if ((isset($_POST['key_caesar'])) && (isset($_POST['plantext_caesar'])) && isset($_POST['decrypt_caesar'])) {
												$key = $_POST['key_caesar'];
												$plantext = $_POST['plantext_caesar'];
												$i = 0;
												$split_chr = str_split($plantext);
												while ($key > 52) {
													$key = $key - 52;
												}
												foreach ($split_chr as $chr) {
													if (char_to_dec_caesar($chr) != null) {
														$split_nmbr[$i] = char_to_dec_caesar($chr);
													} else {
														$split_nmbr[$i] = $chr;
													}
													$i++;
												}
												echo '<textarea class="form-control pl-0 form-control-line pl-2" style="max-height: 250px;" readonly rows="5" id="result" cols="33" onclick="SelectAll(\'result\')" >';
												foreach ($split_nmbr as $nmbr) {
													if (($nmbr - $key) < 1) {
														if (dec_to_char_caesar($nmbr) != null) {
															echo dec_to_char_caesar(($nmbr - $key) + 52);
														} else {
															echo $nmbr;
														}
													} else {
														if (dec_to_char_caesar($nmbr) != null) {
															echo dec_to_char_caesar($nmbr - $key);
														} else {
															echo $nmbr;
														}
													}
												}
												echo '</textarea><br/>';
											} else {

												echo 'Hasil pengolahan disini.... <br> ';
											}
											?>
											<br>
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

</html>