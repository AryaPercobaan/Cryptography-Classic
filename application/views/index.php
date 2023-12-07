<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>Home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kriptografi">Algoritma</a></li>
                    <li class="nav-item"><a class="nav-link" href="#video">Video</a></li>
                    <li class="nav-item"><a href="<?= base_url(); ?>Home/Beranda" class="btn btn-danger btn-rounded waves-effect waves-light mb-4">Simulasi</a>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang!</div>
            <div class="masthead-heading text-uppercase">Website Kripsik</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#kriptografi">Ayo Belajar!</a>
        </div>
    </header>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="kriptografi">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">7 Algoritma Kriptografi klasik</h2>
                <h3 class="section-subheading text-muted">Simak Materi Berikut!</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/caesar1.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Caesar Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Substitusi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/vigenere1.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Vigenere Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Substitusi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/playfair1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Playfair Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Substitusi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/transposisi1.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Transposisi Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Transposisi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/enigma1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Enigma Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Transposisi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/affine1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Affine Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Transposisi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 7-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal7">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/hill1.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Hill Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Transposisi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- Video Grid-->
<section class="page-section bg-light" id="video">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Video Pembelajaran</h2>
                <h3 class="section-subheading text-muted">Simak Video Berikut!</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a href="https://youtu.be/ZzqLbZydHh8">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/vcaesar.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Caesar Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Substitusi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a href="https://youtu.be/9apCedzGO2U">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/vvigenere.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Vigenere Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Substitusi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a href="https://youtu.be/dzQrPckjwgY">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/vplayfair.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Playfair Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Substitusi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a href="https://youtu.be/BNUs49yayvY">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/vtransposisi.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Transposisi Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Transposisi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a href="https://youtu.be/nhjHKj4CE7Q">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/venigma.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Enigma Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Transposisi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a href="https://youtu.be/waWrAAtfaHk">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/vaffine.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Affine Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Transposisi</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 7-->
                    <div class="portfolio-item">
                        <a href="https://youtu.be/XCPC30TYfqw">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/vhill.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Hill Cipher</div>
                            <div class="portfolio-caption-subheading text-muted">Transposisi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Special Thanks</h2>
                <h3 class="section-subheading text-muted">Kriptografi Klasik</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/5.png" alt="..." />
                        <h4>Arya Asa Fikarda</h4>
                        <p class="text-muted">1955301024</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/4.jpg" alt="..." />
                        <h4>Mona Elviyenti, S.Si., M.Si.</h4>
                        <p class="text-muted">Dosen Pengampu</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/madu3.jpg" alt="..." />
                        <h4>Maduri</h4>
                        <p class="text-muted">1955301070</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">"Jangan berhenti belajar sampai kamu merasa bangga dengan hasilnya."</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Kelompok 12 - Kriptografi Klasik 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Caesar Cipher</h2>
                                <p class="item-intro text-muted">merupakan salah satu algoritma cipher tertua dan paling diketahui dalam perkembangan ilmu kriptografi. Caesar cipher merupakan salah satu jenis cipher substitusi yang membentuk cipher dengan cara melakukan penukaran karakter pada plainteks menjadi tepat satu karakter pada chiperteks. Teknik seperti ini disebut juga sebagai chiper abjad tunggal.Algoritma kriptografi Caesar Cipher sangat mudah untuk digunakan. Inti dari algoritma kriptografi ini adalah melakukan pergeseran terhadap semua karakter pada plainteks dengan nilai pergeseran yang sama. Adapun langkah- langkah yang dilakukan untuk membentuk chiperteks dengan Caesar Cipher adalah :Menentukan besarnya pergeseran karakter yang digunakan dalam membentuk cipherteks ke plainteks, Menukarkan karakter pada plainteks menjadi cipherteks dengan berdasarkan pada pergeseran yang telah ditentukan sebelumnya.
Algoritma dari Caesar Cipher adalah C = E ( P)=(P+K)mod 26 untuk fungsi enkripsi. Sedangkan untuk fungsi penelitian adalah P = D ( C )=(C-7)mod 26.
</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/caesar.png" alt="..." />
                                <p>Contoh:<br/>
Chipertext :PWNUYTLWFKN<br/>
Kunci: Geser 5  huruf
</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Plainteks:</strong>
                                         KRIPTOGRAFI

                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Vigenere Cipher</h2>
                                <p class="item-intro text-muted">Vigenere chiper adalah suatu metode kriptografi klasik yang dikategorikan sebagai chiper subtitusi, polyalfabetik chiper karena suatu karakter dapat disubtitusi dengan karakter yang berbeda beda. Namun ada suatu kelemahan vigenere chiper, yaitu perulangan yang akan di bahas pada bagian “vigenere chiper”. Dan rentan dengan serangan menggunakan “metode kasiski” yang akan dibahas pada bagian metode kasiski. Tabel Vigenère berisi alfabet yang dituliskan dalam 26 baris, masing-masing baris digeser satu urutan ke kiri dari baris sebelumnya, membentuk ke-26 kemungkinan sandi Caesar. Setiap huruf disandikan dengan menggunakan baris yang berbeda-beda, sesuai kata kunci yang diulang.
</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/vigenere1.png" alt="..." />
                                <p class="item-intro text-muted">Cth:<br/>

Misalkan plainteks yang akan disandikan adalah:<br/></p>
<p>
“serbu markas pasukan cumi cumi”<br/>
<p class="item-intro text-muted">Sedangkan kata kunci(key) adalah:<br/>
<p>“Takoyaki”<br/>
</p>

<p>Huruf pertama pada plainteks, S, disandikan dengan menggunakan baris berjudul T, huruf pertama pada kata kunci. Pada baris T dan kolom S di tabel Vigenère, terdapat huruf L. Demikian pula untuk huruf kedua, digunakan huruf yang terletak pada baris A (huruf kedua kata kunci) dan kolom E (huruf kedua teks terang), yaitu huruf E. Proses ini dijalankan terus sehingga
</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Plaintext:</strong>
                                        serbumarkaspasukancumicumi 
                                    </li>
                                    <li>
                                        <strong>Kunci:</strong>
                                        takoyakitakoyakitakoyakitakoy
                                    </li>
                                    <li>
                                        <strong>Cipher Text:</strong>
                                        lebpsmkzdacdysestnmikimcfi
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Playfair Cipher</h2>
                                <p class="item-intro text-muted">Playfair Cipher merupakan salah satu algoritma kriptografi klasik yang ditemukan oleh Sir Charles Wheatstone akan tetapi dipromosikan oleh Baron Lyon Playfair pada tahun 1854. Algoritma kriptografi ini mengenkripsi pasangan huruf, bukan huruf tunggal seperti pada algoritma kriptografi klasik lainnya. Tujuan utamanya adalah untuk mempersulit analisis frekuensi dengan menyetarakan jumlah frekuensi kemunculan huruf-huruf di dalam ciphertext . Kunci di dalam algoritma ini selalu memiliki panjang sebanyak 25 karakter yang disusun menjadi tabel acuan berukuran 5 x 5. Kunci ini mengandung seluruh huruf di dalam alphabet kecuali huruf “j” yang dileburkan dengan huruf “i”. Untuk mempermudah pembuatan kunci, pertama-tama tentukan kata yang akan menjadi kunci. Kata tersebut lalu dihilangkan seluruh huruf “j” yg terkandung di dalamnya. Kemudian kata tersebut di konkatenasi dengan teks “abcdefghiklmnopqrstuvwxyz” dan pada akhirnya dari hasil yang diperoleh akan dihilangkan seluruh kemunculan huruf yang berulang.
</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/playfair1.jpg" alt="..." />
                                <p><strong>Contoh:</strong><br/>
KAMI MAHASISWA BUDIDARMA<br/>
1. KAMIMAHASISWABUDIDARMA<br/>
2. KAMIMAHASISWABUDIDARMA<br/>
3. KAMIMAHASISWABUDIARMA <br/>
4. KAMIMAHASISWABUDIARMAZ<br/>
 5. SARTIK<br/>
</p>
<p><strong>Penyelesaian :</strong><br/>
Plainteks :KAMI MAHASISWA BUDIDARMA<br/>
= KAMIMAHASISWABUDIDARMA<br/>
Plainteks yang sudah diatur : KA MI MA HA SI SW AB UD ID AR MA Kunci : SARTIKA<br/>
Menjadi : SARTIK<br/>
Diperluas menjadi: SARTIKBCDEFGHLMNOPQUVWXYZ<br/>
</p>
<p><strong>Proses Enkripsi</strong><br/> 
Jika kedua huruf tidak terletak pada baris dan kolom yang sama, maka huruf pertama<br/>
menjadi huruf yang sebaris dengan huruf pertama dan sekolom dengan huruf kedua. Huruf kedua menjadi huruf yang sebaris dengan huruf kedua dan yang sekolom dengan huruf pertama.<br/>
Jika kedua huruf terletak pada baris yang sama maka huruf pertama menjadi huruf setelahnya dalam baris yang sama, demikian juga dengan huruf kedua. Jika terletak pada baris kelima, maka menjadi baris pertama, dan sebaliknya. Arahnya tergantung dari posisi huruf pertama dan kedua, pergeserannya ke arah huruf kedua.<br/>
<strong>HASIL:</strong><br/>
Maka dari percobaan diatas dapat diperoleh hasil enkripsi sebagai berikut : <br/>
Plainteks : KA MI MA HA SI SW AB UD ID AR MA<br/>
Cipherteks :BS EI GI GRASVABGQETERT GI<br/>
</p>
<p><strong>Proses Dekripsi</strong><br/>
Proses dekripsi sangat mirip dengan proses enkripsi dan lebih mudah dilakukan karena proses dekripsinya adalah kebalikan dari proses enkripsi.<br/>
<strong>Dimana:</strong><br/>
Plainteks : BSEIGIGRASVABGQETERTGI<br/>
Plainteks yang sudah diatur: BS EI GI GR AS VA BG QE TE RT GI<br/> 
Kunci : SARTIKA<br/>
Menjadi : SARTIK<br/>
Diperluas menjadi: SARTIKBCDEFGHLMNOPQUVWXYZ<br/>
<strong>HASIL:</strong><br/>
Maka dari percobaan diatas dapat diperoleh hasil dekkripsi sebagai berikut :<br/> 
Plainteks :BS EI GI GRASVABGQETERT GI<br/>
Cipherteks : KA MI MA HA SI SW AB UD ID AR MA<br/>
</p>
                                <ul class="list-inline">
                                   
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Transposisi Cipher</h2>
                                <p class="item-intro text-muted">Cipher transposisi adalah salah satu jenis teknik pengenkripsian pesan dengan cara mengubah urutan huruf- huruf yang ada di dalam plainteks (pesan yang belum dienkripsi) menjadi cipherteks (pesan yang telah dienkripsi) dengan cara tertentu agar isi dari pesan tersebut tidak dimengerti kecuali oleh orang-orang tertentu.Pada dasarnya prinsip pengubahan pesan mirip dengan anagram seperti kata “melepas” diubah menjadi “saeelpm”, tapi tentu saja transposition cipher mempunyai rumus atau kunci tertentu yang diperlukan agar pesan bisa dimengerti. Pada cipher transposisi, huruf-huruf di dalam plainteks tetap saja, hanya saja urutannya diubah. Dengan kata lain algoritma ini melakukan transpose terhadap rangkaian karakter di dalam teks. Nama lain untuk metode ini adalah permutasi atau pengacakan (scrambling) karena transpose setiap karakter di dalam teks sama dengan mem permutasikan karakter-karakter tersebut</p>
                                <p><strong>Contoh:</strong><br/>
DEPARTEMEN TEKNIK INFORMATIKA ITB<br/>
<strong>Enkripsi:</strong><br/>
    DEPART<br/>
     EMENTE<br/>
     KNIKIN<br/>
     FORMAT<br/>
     IKAITB<br/>

<strong>Cipherteks:</strong> (baca secara vertikal)<br/>
DEKFIEMNOKPEIRAANKMIRTIATTENTB<br/>
DEKF IEMN OKPE IRAA NKMI RTIA TTEN TB<br/>

<strong>Dekripsi:</strong><br/>
(Pada contoh ini, 30 / 6 = 5)<br/>
DEKFI EMNOK PEIRA ANKMI RTIAT TENTB<br/>
<strong>Plainteks:</strong> (baca secara vertikal)<br/>
DEPARTEMEN TEKNIK INFORMATIKA ITB<br/>
</p>
                                <ul class="list-inline">
                                    
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Enigma Machine</h2>
                                <p class="item-intro text-muted">Pada perang dunia ke-2, terjadi perang antara pihak Fasis, yang terdiri dari Jerman, Italia, dan Jepang melawan pihak Sekutu, yang dipimpin oleh Amerika Serikat, Inggris dan Uni Soviet. Semua pihak yang terlibat dalam perang tersebut menyadari bahwa pentingnya enkripsi dokumen rahasia dari masin-masing pihak untuk menjaga keutuhan strategi perang mereka. Oleh karena itu, mereka menciptakan mesin cipher mereka masing-masing. Pertama, pihak Jerman menggunakan Enigma cipher, suatu cipher yang diciptakan pada tahun 1918 oleh Arthur Scherbius di Berlin. 
Prinsip dasar dari Enigma adalah mengenkripsi sebuah pesan dengan melakukan sejumlah substitusi secara beruntun. Scherbius sendiri mengusulkan untuk mencapai substitusi-substitusi tersebut melalui sambungan listrik.
Kedua, pihak Inggris menggunakan Typex cipher. Typex cipher merupakan adaptasi dari Enigma cipher yang mesinnya ada yang tersedia secara komersil. Typex sudah dipakai di Inggris sejak 1937. Seperti Enigma, Typex mengandalkan pergerakan rotor untuk proses substitusi huruf-huruf pada plainteks. Hanya saja, Typex menggunakan lebih banyak rotor, yaitu lima buah.
Pada Enigma cipher, digunakan teknik substitusi huruf berulang. Teknik ini dibantu dengan bantuan rotor sejumlah 3 atau 4 buah yang ada pada mesin Enigma. Hal ini menjelaskan bahwa terdapat 26^3 atau 26^4 kemungkinan huruf cipherteks sebagai pengganti huruf plainteks sebelum terjadi perulangan huruf cipherteks. Setiap kali sebuah huruf selesai disubstitusi, rotor pertama bergeser satu huruf ke atas. Setiap kali rotor pertama selesai bergeser 26 kali, rotor kedua juga melakukan hal yang sama, demikian juga untuk rotor ketiga dan rotor keempat. 
</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/enigma_mesin.png" alt="..." />
                                <ul class="list-inline">
                                    
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Affine Cipher</h2>
                                <p class="item-intro text-muted">affine cipher adalah jenis monoalphabetic cipher substitusi , dimana setiap huruf dalam alfabet dipetakan ke setara numerik, dienkripsi menggunakan fungsi matematika sederhana, dan diubah kembali ke surat. Rumus yang digunakan berarti bahwa setiap huruf mengenkripsi dengan satu huruf lain, dan kembali lagi, berarti cipher pada dasarnya adalah cipher substitusi standar dengan pemerintahan aturan yang surat pergi ke mana. Dengan demikian, ia memiliki kelemahan semua cipher substitusi.<br/>

<br/>
Dalam contoh ini, satu enkripsi dan dekripsi satu, alfabet akan menjadi huruf A sampai Z, dan akan memiliki nilai yang sesuai ditemukan pada tabel berikut.
</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/affine.png" alt="..." />
                                <p><strong>Plainteks:</strong> KRIPTO (10 17  8  15  19  14)<br/> 
                n = 26, ambil m = 7   (7 relatif prima dengan 26)<br/>
                <strong>Enkripsi:</strong> C º 7P + 10 (mod 26)<br/>                
                                p1 = 10  à c1 º 7 × 10 + 10 º 80 º 2 (mod 26)      (huruf ‘C’)<br/>
                                p2 = 17  à c2 º 7 × 17 + 10 º 129 º 25 (mod 26)  (huruf ‘Z’)<br/>
                                p3 = 8    à c3 º 7 × 8 + 10 º 66 º 14 (mod 26)      (huruf ‘O’)<br/>
                                p4 = 15  à c4 º 7 × 15 + 10 º 115 º 11 (mod 26)  (huruf ‘L’)<br/>
                                p5 = 19  à c1 º 7 × 19 + 10 º 143 º 13 (mod 26)  (huruf ‘N’)<br/>
                                p6 = 14  à c1 º 7 × 14 + 10 º 108 º 4 (mod 26)    (huruf ‘E’)<br/>
      <strong>Cipherteks:</strong> CZOLNE<br/>

<strong>Dekripsi:</strong><br/>
Mula-mula hitung m -1 yaitu 7–1 (mod 26) <br/>
dengan memecahkan 7x º 1 (mod 26)<br/>
<strong>Solusinya:</strong> x º 15 (mod 26) sebab 7 × 15 = 105 º 1 (mod 26).<br/>
Jadi, P º 15 (C – 10) (mod 26)   <br/>
c1 = 2    à p1 º 15 × (2 – 10) = –120 º 10 (mod 26) (huruf ‘K’)<br/>
c2 = 25  à p2 º 15 × (25 – 10) = 225 º 17 (mod 26) (huruf ‘R’)<br/>
c3 = 14  à p3 º 15 × (14 – 10) = 60 º 8 (mod 26)     (huruf ‘I’)<br/>
c4 = 11  à p4 º 15 × (11 – 10) = 15 º 15 (mod 26)   (huruf ‘P’)<br/>
c5 = 13  à p5 º 15 × (13 – 10) = 45 º 19 (mod 26)   (huruf ‘T’)<br/>
c6 = 4    à p6 º 15 × (4 – 10) = –90  º 14 (mod 26)  (huruf ‘O’)<br/>
                
                <strong>Plainteks yang diungkap kembali:</strong>  KRIPTO   <br/>   
</p>
                                <ul class="list-inline">
                                    
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 7 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Hill Cipher</h2>
                                <p class="item-intro text-muted">Hill Cipher merupakan salah satu algoritma kriptografi kunci simetris yang memiliki beberapa kelebihan dalam enkripsi data. Untuk menghindari matrik kunci yang tidak invertible, matrik kunci dibangkitkan menggunakan koefisien binomial newton.  Proses enkripsi dan deskripsi menggunakan kunci yang sama, plaintext dapat menggunakan media gambar atau text.
Algoritma Hill Cipher menggunakan matriks berukuran m x m sebagai kunci untuk melakukan enkripsi dan dekripsi. Dasar teori matriks yang digunakan dalam Hill Cipher antara lain adalah perkalian antar matriks dan melakukan invers pada matriks.
</p>
                                <p><strong>Contoh:</strong><br/>
plaintext yang diberikan adalah MALANG. Maka MALANG harus ditransformasikan dahulu ke dalam bentuk angka.<br/>
M = 12<br/>
A = 0<br/>
L = 11<br/>
A = 0<br/>
N = 13<br/>
G = 6<br/>

Sehingga plaintext MALANG berubah menjadi 12,0,11,0,13,6. Kemudian, karena matrik kunci telah ditentukan dengan ordo 2x2 yang memiliki 2 kolom, maka deretan angka 12,0,11,0,13,6 dipecah tiap 2 angka. Hasil pembagian blok adalah :
</p>
<img class="img-fluid d-block mx-auto" src="assets/img/portfolio/hilltxt.png" alt="..." />

                                
                                    <p>Sampai disini, plaintext telah bertransformasi menjadi bentuk angka dan telah dipecah menjadi 3 blok matrik, dengan demikian plaintext tiap blok matrik akan dikalikan dengan matrik kunci. Berdasarkan metrik kunci ordo 2x2, saya menetapkan matrik kuncinya adalah {{5,6},{2,3}}.
Kembali ke rumus enkripsi hill cipher, bahwa ciphertext =  matrik kunci * blok matrik (plaintext) atau C = K x P. Maka perhitungan ciphertext adalah :
Untuk K*P(MA)
</p>
<img class="img-fluid d-block mx-auto" src="assets/img/portfolio/hilltxt1.png" alt="..." />
                               
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>