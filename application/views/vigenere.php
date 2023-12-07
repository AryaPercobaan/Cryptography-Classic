<script type="text/javascript">
	function SelectAll(id) {
		document.getElementById(id).focus();
		document.getElementById(id).select();
	}

	function myValidasi() {
		var validasiAngka = /^[0-9]+$/;
		var dataoke = document.getElementById("key_vigenere");

		if (dataoke.value.match(validasiAngka)) {
			swal("Pesan!", "Key hanya berupa kombinasi kata, " + '\n' + "tidak boleh mengandung angka");
		}

	}

</script>

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
								<h4 class="card-title"><b>Vigenere Cipher</b></h4>
								<p>Vigenere chiper adalah suatu metode kriptografi klasik yang dikategorikan sebagai chiper subtitusi, polyalfabetik chiper karena suatu karakter dapat disubtitusi dengan karakter yang berbeda beda. Namun ada suatu kelemahan vigenere chiper, yaitu perulangan yang akan di bahas pada bagian “vigenere chiper”. Dan rentan dengan serangan menggunakan “metode kasiski” yang akan dibahas pada bagian metode kasiski. Tabel Vigenère berisi alfabet yang dituliskan dalam 26 baris, masing-masing baris digeser satu urutan ke kiri dari baris sebelumnya, membentuk ke-26 kemungkinan sandi Caesar. Setiap huruf disandikan dengan menggunakan baris yang berbeda-beda, sesuai kata kunci yang diulang.
</p>
								<label><b>Cara menggunanakan kriptografi vigenere : </b></label>
								<ul>
									<li>Untuk <b>Encrypt cipher </b> maka memasukkan the key dan plain text nya. lalu
										tekan tombol encrpyt.</li>
									<li>Untuk <b>Decrypt cipher </b> maka masukkan hasil pengolahan. Ke kolom plain
										text, lalu masukkan the key awal. kemudian tekan tombol decrpyt</li>
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
									<h4 class="card-title">Simulasi Vigenere Cipher</h4>
								</div>
								<div class="flot-chart"> <br>
									<div class="row">
										<div class="col-md-6">
											<form action="" method="post">
												<div class="form-group">
													<div class="col-md-12">
														<input class="form-control pl-0 form-control-line pl-2"
															type="text" name="key_vigenere" id="key_vigenere"
															onclick="SelectAll('key_vigenere')"
															placeholder="Masukkan kata kunci..." required
															oninvalid="this.setCustomValidity('Kolom tidak boleh kosong')"
															onkeyup="myValidasi();" />
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<textarea style="max-height: 250px;" rows="5"
															name="plantext_vigenere" id="plantext_vigenere"
															placeholder="Masukkan Plain Text"
															onclick="SelectAll('plantext_vigenere')"
															class="form-control pl-0 form-control-line pl-2" required
															oninvalid="this.setCustomValidity('Kolom tidak boleh kosong')"></textarea>
													</div>
												</div>
												<br />
												<div class="form-group">
													<div class="col-md-12">
														<input type="submit"
															class="btn btn-info d-none d-md-inline-block text-white mr-3"
															name="encrypt_vigenere" value="Encrypt" />
														<input type="submit"
															class="btn btn-success d-none d-md-inline-block text-white mr-3"
															name="decrypt_vigenere" value="Decrypt" />
														<input
															class="btn btn-danger d-none d-md-inline-block text-white"
															type="reset" value="Hapus" />
													</div>
												</div>
											</form>
										</div>

										<div class="col-md-6">
											<div class="form-group" style="margin-bottom:26px;">
												<h3 class="page-title mb-0 p-0" style="color:#009efb">HASIL</h3>
											</div>

											<?php include "assets/_vigenere.php" ?>

											<?php
                                                if ((isset($_POST['key_vigenere'])) && (isset($_POST['plantext_vigenere'])) && (isset($_POST['encrypt_vigenere']))){
                                                        $key=$_POST['key_vigenere'];
                                                        $plantext=$_POST['plantext_vigenere'];
                                                        $len_key=strlen($key);
                                                        $len_plantext=strlen($plantext);
                                                        $split_key=str_split($key);
                                                        $split_plantext=str_split($plantext);
                                                        
                                                        echo '<textarea class="form-control pl-0 form-control-line pl-2" style="max-height: 250px;" rows="5" id="result" cols="33" readonly  onclick="SelectAll(\'result\')" >';
                                                        $i=0;
                                                        for($j=0;$j<$len_plantext;$j++){
                                                            if ($i==$len_key){
                                                                $i=0;
                                                            }
                                                            $split_key2[$j]=$split_key[$i];
                                                            $i++;
                                                        }
                                                        for($k=0;$k<$len_plantext;$k++){
                                                            $a=char_to_dec($split_key2[$k]);
                                                            $b=char_to_dec($split_plantext[$k]);
                                                            if (($a && $b)!=null){
                                                                echo (tabel_vigenere_encrypt($a, $b));
                                                            } else {
                                                                echo $split_plantext[$k];
                                                            }
                                                        }
                                                        echo '</textarea>';
                                                    } else if ((isset($_POST['key_vigenere'])) && (isset($_POST['plantext_vigenere'])) && (isset($_POST['decrypt_vigenere']))){
                                                        $key=$_POST['key_vigenere'];
                                                        $plantext=$_POST['plantext_vigenere'];
                                                        $len_key=strlen($key);
                                                        $len_plantext=strlen($plantext);
                                                        $split_key=str_split($key);
                                                        $split_plantext=str_split($plantext);
                                                        
                                                        echo '<textarea class="form-control pl-0 form-control-line pl-2" style="max-height: 250px;" rows="5" id="result" cols="33" readonly onclick="SelectAll(\'result\')" >';
                                                        $i=0;
                                                        for($j=0;$j<$len_plantext;$j++){
                                                            if ($i==$len_key){
                                                                $i=0;
                                                            }
                                                            $split_key2[$j]=$split_key[$i];
                                                            $i++;
                                                        }
                                                        
                                                        for($k=0;$k<$len_plantext;$k++){
                                                            $a=char_to_dec($split_key2[$k]);
                                                            $b=char_to_dec($split_plantext[$k]);
                                                            if (($a && $b)!=null){
                                                                echo (tabel_vigenere_decrypt($b, $a));
                                                            } else {
                                                                echo $split_plantext[$k];
                                                            }
                                                        }
                                                        
                                                        echo '</textarea>';
                                            
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
