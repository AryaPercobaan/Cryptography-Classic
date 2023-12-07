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

                                <h4 class="card-title"><b>Transposisi Cipher</b></h4>

                                <p>
                                    Cipher transposisi adalah salah satu jenis teknik pengenkripsian pesan dengan cara mengubah urutan huruf- huruf yang ada di dalam plainteks (pesan yang belum dienkripsi) menjadi cipherteks (pesan yang telah dienkripsi) dengan cara tertentu agar isi dari pesan tersebut tidak dimengerti kecuali oleh orang-orang tertentu.Pada dasarnya prinsip pengubahan pesan mirip dengan anagram seperti kata “melepas” diubah menjadi “saeelpm”, tapi tentu saja transposition cipher mempunyai rumus atau kunci tertentu yang diperlukan agar pesan bisa dimengerti. Pada cipher transposisi, huruf-huruf di dalam plainteks tetap saja, hanya saja urutannya diubah. Dengan kata lain algoritma ini melakukan transpose terhadap rangkaian karakter di dalam teks. Nama lain untuk metode ini adalah permutasi atau pengacakan (scrambling) karena transpose setiap karakter di dalam teks sama dengan mem permutasikan karakter-karakter tersebut

                                </p>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="wrapper">
                    <div class="panel">
                        <h1 class="text-left">Transposisi Cipher</h1>
                        <div class="centering">
                            <form method="post" name="formEncryptTransposisi" onsubmit="encryptTransposisi(); return false;">
                                <table id="transposisi">
                                    <tr>
                                        <td>
                                            <input type="text" name="plainTransposisi" style="text-transform: uppercase" pattern="[a-zA-Z /s]*" placeholder="plaintext" required> -
                                            <input type="text" name="panjangKunci" style="text-transform: uppercase; width: 150px;" pattern="[1-9]*" placeholder="Panjang kunci" required onblur='inputKunci(this.value,"add1")'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="add1"></td>
                                    </tr>
                                    <tr>
                                        <td><button type="submit" class="button">Encrypt</button></td>
                                    </tr>
                                </table>
                            </form>
                            <div>Hasil enkripsi Transposisi : <span id="hasilEnkripsiTransposisi"> - </span></div>
                        </div>
                        <div class="centering">
                            <form method="post" name="formDecryptTransposisi" onsubmit="decryptTransposisi(); return false;">
                                <table id="transposisi">
                                    <tr>
                                        <td>
                                            <input type="text" name="cipherTransposisi" style="text-transform: uppercase" pattern="[a-zA-Z /s]*" placeholder="ciphertext" required> -
                                            <input type="text" name="panjangKunci" style="text-transform: uppercase; width: 150px;" pattern="[1-9]*" placeholder="Panjang kunci" required onblur='inputKunci(this.value,"add2")'>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="add2"></td>
                                    </tr>
                                    <tr>
                                        <td><button type="submit" class="button">Decrypt</button></td>
                                    </tr>
                                </table>
                            </form>
                            <div>Hasil dekripsi Transposisi : <span id="hasilDekripsiTransposisi"> - </span></div>
                        </div>
                    </div>
                </div>

                <!-- //end// -->




            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> Development by Arya Asa Fikarda & Maduri © 2022 Powered by <a href="https://www.wrappixel.com/">startbootstrap.com</a>
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