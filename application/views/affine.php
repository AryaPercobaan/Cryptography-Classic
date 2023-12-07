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
                                <h4 class="card-title"><b>Affine Cipher</b></h4>
                                <p>
                                affine cipher adalah jenis monoalphabetic cipher substitusi , dimana setiap huruf dalam alfabet dipetakan ke setara numerik, dienkripsi menggunakan fungsi matematika sederhana, dan diubah kembali ke surat. Rumus yang digunakan berarti bahwa setiap huruf mengenkripsi dengan satu huruf lain, dan kembali lagi, berarti cipher pada dasarnya adalah cipher substitusi standar dengan pemerintahan aturan yang surat pergi ke mana. Dengan demikian, ia memiliki kelemahan semua cipher substitusi.


                                </p>
                                <hr>
                               
                            </div>
                        </div>
                    </div>
                </div>


                <!-- //SCRIPT  AFFINE// -->

                <div class="wrapper">
                    <div class="panel">
                        <h1 class="text-left">Simulasi Affine Cipher</h1>
                        <div class="centering">
                            <form name="stuff">

                                <!-- <input form="text" placeholder="TEXT" name="indata" size="25"> 
       <input form="text" placeholder="KEY" name="key" size="25"><br> -->
                                <p>Plaintext<br>
                                    <textarea name="p" rows="4" cols="50" wrap="soft"></textarea>
                                    <br><br>
                                <p>a =
                                    <select name="mult" size="1">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>3</option>
                                        <option>5</option>
                                        <option>7</option>
                                        <option>9</option>
                                        <option>11</option>
                                        <option>15</option>
                                        <option>17</option>
                                        <option>19</option>
                                        <option>21</option>
                                        <option>23</option>
                                        <option>25</option>
                                    </select>
                                    b =
                                    <select name="add" size="1">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                    </select>
                                    <!-- <input type="radio" name="input" checked="checked" >ASCII</input>
       <input type="radio" name="input" >Hexadecimal</input> -->
                                    <br><br>
                                    <input class="button " value="v Encrypt v" onclick="Encrypt(this.form)" type="button">
                                    <input class="button " value="^ Decrypt ^" onclick="Decrypt(this.form)" type="button">
                                    <br><br>
                                    <!-- <input type="button" value="Encrypt" class="button" onclick="des_process(true);">
       <input type="button" value="Decrypt" class="button" onclick="des_process(false);"> -->
                                    <!-- <br><br>
       <input type="text" placeholder="OUTPUT" name="outdata" size="20">
       <br>
       <input type="radio" name="output" checked="checked" onclick="des_output();">ASCII</input>
       <input type="radio" name="output" onclick="des_output();">Hexadecimal</input> -->
                                <p>Ciphertext<br>
                                    <textarea name="c" rows="4" cols="50" wrap="soft"></textarea>
                                </p>
                                <br></br>
                                
                            </form>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- //END// -->


            

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