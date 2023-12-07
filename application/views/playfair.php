<?php include "assets/_playfair.js" ?>
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
                                    <h4 class="card-title"><b>Playfair Cipher</b></h4>
                                    <p>Playfair cipher atau bisa juga disebut Playfair square adalah teknik enkripsi simetrik yang termasuk dalam sistem substitusi digraph . sistem sandi ini diciptakan oleh Charles Wheatstone (kalo di buku fisika dia yang nemuin jembatan wheatstone) pada tahun 1854, namun dipopulerkan penggunaannya oleh Lord Playfair.</p>
                                <label><b>Cara menggunanakan kriptografi playfair : </b></label>
                                <ul>
                                    <li>Masukkan kata kunci, dan matriks sebelahnya akan berubah.</li>
                                    <li>Jika ada huruf yaang ingin diganti, dan diganti dengan huruf yang di inginkan.</li>
                                    <li>Jika jumlah huruf ganjil, tambahkan huruf yang diinginkan.</li>
                                    <li>Jika, jika <b> encrypt cipher </b> maka masukkan teks nya. dan pilih metode encrypt </li>
                                    <li>Jika ingin  <b>decrypt cipher </b> maka masukkan teks nya. dan pilih metode decrypt</li>
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
									<h4 class="card-title">Simulasi Playfair Cipher</h4>
								</div>
							    <?php
                                    function Cipher($ch, $key)
                                          {
                                                if (!ctype_alpha($ch))
                                                return $ch;

                                                $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                                                return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
                                           }
                                ?>
								<div class="row">
									<div class="col-md-3">
										<div class="card">
											<div class="card-body">
												<table align="center">
													<tr>
														<td>
															<input type="text" size="1" id="0" value="A"
																onChange="checkValues(0)" onKeyDown="checkValues(0)"
																onKeyUp="checkValues(0)" readonly>
															<input type="text" size="1" id="1" value="B"
																onChange="checkValues(1)" onKeyDown="checkValues(1)"
																onKeyUp="checkValues(1)" readonly>
															<input type="text" size="1" id="2" value="C"
																onChange="checkValues(2)" onKeyDown="checkValues(2)"
																onKeyUp="checkValues(2)" readonly>
															<input type="text" size="1" id="3" value="D"
																onChange="checkValues(3)" onKeyDown="checkValues(3)"
																onKeyUp="checkValues(3)" readonly>
															<input type="text" size="1" id="4" value="E"
																onChange="checkValues(4)" onKeyDown="checkValues(4)"
																onKeyUp="checkValues(4)" readonly>
														</td>
													</tr>
													<tr>
														<td>
															<input type="text" size="1" id="5" value="F"
																onChange="checkValues(5)" onKeyDown="checkValues(5)"
																onKeyUp="checkValues(5)" readonly>
															<input type="text" size="1" id="6" value="G"
																onChange="checkValues(6)" onKeyDown="checkValues(6)"
																onKeyUp="checkValues(6)" readonly>
															<input type="text" size="1" id="7" value="H"
																onChange="checkValues(7)" onKeyDown="checkValues(7)"
																onKeyUp="checkValues(7)" readonly>
															<input type="text" size="1" id="8" value="I"
																onChange="checkValues(8)" onKeyDown="checkValues(8)"
																onKeyUp="checkValues(8)" readonly>
															<input type="text" size="1" id="9" value="K"
																onChange="checkValues(9)" onKeyDown="checkValues(9)"
																onKeyUp="checkValues(9)" readonly>
														</td>
													</tr>
													<tr>
														<td>
															<input type="text" size="1" id="10" value="L"
																onChange="checkValues(10)" onKeyDown="checkValues(10)"
																onKeyUp="checkValues(10)" readonly>
															<input type="text" size="1" id="11" value="M"
																onChange="checkValues(11)" onKeyDown="checkValues(11)"
																onKeyUp="checkValues(11)" readonly>
															<input type="text" size="1" id="12" value="N"
																onChange="checkValues(12)" onKeyDown="checkValues(12)"
																onKeyUp="checkValues(12)" readonly>
															<input type="text" size="1" id="13" value="O"
																onChange="checkValues(13)" onKeyDown="checkValues(13)"
																onKeyUp="checkValues(13)" readonly>
															<input type="text" size="1" id="14" value="P"
																onChange="checkValues(14)" onKeyDown="checkValues(14)"
																onKeyUp="checkValues(14)" readonly>
														</td>
													</tr>
													<tr>
														<td>
															<input type="text" size="1" id="15" value="Q"
																onChange="checkValues(15)" onKeyDown="checkValues(15)"
																onKeyUp="checkValues(15)" readonly>
															<input type="text" size="1" id="16" value="R"
																onChange="checkValues(16)" onKeyDown="checkValues(16)"
																onKeyUp="checkValues(16)" readonly>
															<input type="text" size="1" id="17" value="S"
																onChange="checkValues(17)" onKeyDown="checkValues(17)"
																onKeyUp="checkValues(17)" readonly>
															<input type="text" size="1" id="18" value="T"
																onChange="checkValues(18)" onKeyDown="checkValues(18)"
																onKeyUp="checkValues(18)" readonly>
															<input type="text" size="1" id="19" value="U"
																onChange="checkValues(19)" onKeyDown="checkValues(19)"
																onKeyUp="checkValues(19)" readonly>
														</td>
													</tr>
													<tr>
														<td>
															<input type="text" size="1" id="20" value="V"
																onChange="checkValues(20)" onKeyDown="checkValues(20)"
																onKeyUp="checkValues(20)" readonly>
															<input type="text" size="1" id="21" value="W"
																onChange="checkValues(21)" onKeyDown="checkValues(21)"
																onKeyUp="checkValues(21)" readonly>
															<input type="text" size="1" id="22" value="X"
																onChange="checkValues(22)" onKeyDown="checkValues(22)"
																onKeyUp="checkValues(22)" readonly>
															<input type="text" size="1" id="23" value="Y"
																onChange="checkValues(23)" onKeyDown="checkValues(23)"
																onKeyUp="checkValues(23)" readonly>
															<input type="text" size="1" id="24" value="Z"
																onChange="checkValues(24)" onKeyDown="checkValues(24)"
																onKeyUp="checkValues(24)" readonly>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>

									<div class="col-md-9">
										<div class="card">
											<div class="card-body">
												<table width="100%">
													<tr>
														<td>
															<div class="form-group">
																<div class="form-line">
																	<input type="hidden" name="manualKey"
																		id="playfairCipherKeyCheck" checked="true"
																		onClick="setEnabled(1)">
																	<input class="form-control no-resize"
																		placeholder="Masukkan kata kunci..." type="text"
																		id="playfairCipherKey"
																		onKeyDown="populateSquare(2)"
																		onKeyUp="populateSquare(2)" required oninvalid="this.setCustomValidity('Kolom tidak boleh kosong')" onkeyup="myValidasi();">
                                                                        <small class="text-muted">*Kata kunci harus diisi dengan huruf</small>
                                                                    </div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															Huruf yang diganti : <input type="hidden" name="replaceOmit"
																id="playfairCipherReplaceCheck" checked="true"
																onClick="setEnabled(2)">
															<select id="playfairCipherReplace1"
																onChange="repopulateReplace2(1);populateSquare(3);">
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
																<option selected value="J">J</option>
																<option value="K">K</option>
																<option value="L">L</option>
																<option value="M">M</option>
																<option value="N">N</option>
																<option value="O">O</option>
																<option value="P">P</option>
																<option value="Q">Q</option>
																<option value="R">R</option>
																<option value="S">S</option>
																<option value="T">T</option>
																<option value="U">U</option>
																<option value="V">V</option>
																<option value="W">W</option>
																<option value="X">X</option>
																<option value="Y">Y</option>
																<option value="Z">Z</option>
															</select> diganti dengan <select id="playfairCipherReplace2"
																onChange="populateSquare(3)">
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option selected value="I">I</option>
																<option value="K">K</option>
																<option value="L">L</option>
																<option value="M">M</option>
																<option value="N">N</option>
																<option value="O">O</option>
																<option value="P">P</option>
																<option value="Q">Q</option>
																<option value="R">R</option>
																<option value="S">S</option>
																<option value="T">T</option>
																<option value="U">U</option>
																<option value="V">V</option>
																<option value="W">W</option>
																<option value="X">X</option>
																<option value="Y">Y</option>
																<option value="Z">Z</option>
															</select>
															<hr>
														</td>
													</tr>
													<tr>
														<td>
															Jika jumlah huruf ganjil, tambahkan huruf : <select
																id="playfairCipherDoubleChar"
																onChange="playfairCipher()">
																<option value="A">A</option>
																<option value="B">B</option>
																<option value="C">C</option>
																<option value="D">D</option>
																<option value="E">E</option>
																<option value="F">F</option>
																<option value="G">G</option>
																<option value="H">H</option>
																<option value="I">I</option>
																<option value="J">J</option>
																<option value="K">K</option>
																<option value="L">L</option>
																<option value="M">M</option>
																<option value="N">N</option>
																<option value="O">O</option>
																<option value="P">P</option>
																<option value="Q">Q</option>
																<option value="R">R</option>
																<option value="S">S</option>
																<option value="T">T</option>
																<option value="U">U</option>
																<option value="V">V</option>
																<option value="W">W</option>
																<option value="X">X</option>
																<option value="Y">Y</option>
																<option selected value="Z">Z</option>
															</select> diakhir.
															<hr>
														</td>
													</tr>
													<tr>
														<td>
															<input type="hidden" name="doubles"
																id="playfairCipherBreakCheck" onClick="setEnabled(3)">
														</td>
													</tr>
													<tr>
														<td>Pilih metode : <select id="playfairCipherMethod"
																onChange="playfairCipher()">
																<option selected value="Decrypt">Dekripsi</option>
																<option value="Encrypt">Enkripsi</option>
															</select></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- column -->
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<table width="100%">
									<tr>
										<td>
											<div class="form-group">
												<div class="form-line">
													<textarea rows="4" class="form-control no-resize"
														placeholder="Masukan Plain Text..." id="playfairCipherText"
														onKeyDown="playfairCipher()"
														onKeyUp="playfairCipher()"></textarea>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><input class="btn btn-danger" name="Reset fields" value="RESET TEKS"
												type="button" onclick="resetFields(this.form,0);">
											<hr>
										</td>
									</tr>
									<tr>
										<td>
											<div id="playfairCipherDiv"></div>
										</td>
									</tr>
								</table>
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
