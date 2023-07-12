<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portofolio Regia Shafna Rimba</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{ asset('assets/css/tooplate-style.css') }}">
    
<!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><i class='uil uil-user'></i> Regia </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="About">Tentang Saya</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Projects">Project</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Resume">Resume</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact">Kontak</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Tema
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">Selamat Datang di <span class="mobile-block">Website Portofolio Saya !</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hallo, I'm</span>
                                <div class="animated-info">
                                    <span class="animated-item">Regia</span>
                                    <span class="animated-item">Web Dev</span>
                                    <span class="animated-item">Backend Dev</span>
                                </div>
                        </h1>

                        <p>Saya Regia Shafna Rimba lulusan SMK Wikrama Bogor
jurusan Rekayasa Perangkat Lunak yang berfokus di bidang
Web atau Backend Developer, memiliki kerja sama tim
dengan baik dan mudah beradaptasi</p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="#" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Get a free quote</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="{{ asset('assets/images/undraw/undraw_software_engineer_lvl5.svg') }}" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Beberapa Projek Yang Pernah Saya Buat</h2>
                      </div>

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('assets/images/project/mua.jpg') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('assets/images/project/tiket.jpg') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('assets/images/project/assets.jpg') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('assets/images/project/spp.jpg') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{ asset('assets/images/project/perpus.jpg') }}" class="img-fluid" alt="project image">
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4">Pengalaman</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>2019</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>Web Inventori Barang & Dokumen</span><small>Backend Developer With PT. Fan Intek</small></h3>
                                  <p>Merupakan aplikasi berbasis website yang dibuat guna mempermudah pendataan maupun
peminjaman barang dan dokumen di internal suatu perusahaan dengan fitur sesuai
permintaan ( PT Fan Integrasi Teknologi )</p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2018</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Web Kursus Makeup Muathetic</span><small>Backend Developer With Mba Nabila</small></h3>
                                <p>Sebuah aplikasi course makeup online berbasis website yang menyediakan fitur
pembelajaran via vidio yang telah disediakan oleh pengajar dengan fitur sesuai dengan
permintaan client ( Mba Nabila )</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2016</span>
                            </div>
                            <div class="timeline-info">
                            <h3><span>Web Pembayaran SPP</span><small>Web Developer</small></h3>
                                <p>Merupakan sebuah aplikasi berbasis website yang bertujuan untuk mempermudah sistem
pembayaran spp di suatu instansi sekola</p>
                            </div>
                        </div>
                        
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2014</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Web Pemesanan Konser<small>Web Developer</small></h3>
                                <p>Merupakan pemesanan tiket konser secara online yang akan mengeluarkan ID tiket
sehingga mempermudah proses check in pada saat konser berlangsun</p>
                            </div>
                        </div>

                            
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2014</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Web Perpustakaan<small>Web Developer</small></h3>
                                <p></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4 mobile-mt-2">Pendidikan</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>2020</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>SMK Wikrama Bogor</span><small>RPL</small></h3>
                                  <p>- Juara Emas Olimpiade Sains Nasional</p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2017</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>SMP Negeri 1 Megamendung</span><small></small></h3>
                                <p>- Juara 2 LKBB Se - Provinsi</p>
                            </div>
                        </div>
                        
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2011</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>SD Negeri Pasir Angin 02</span><small></small></h3>
                                <p>- Juara Puisi Se - Kecamatan</p>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.558402180099!2d-73.99373482142036!3d40.75895421922642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855b8fb3083%3A0xa0f9aef176042a5c!2sTheater+District%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2smm!4v1549875377188" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Regia Shafna Rimba</h3>
                  <p class="footer-text mb-0">0895 6016 97040</p>
                  <p><a href="mailto:hello@company.co">rgshfrmb@gmail.com</a></p>
                </div>

                <ul class="social-links">
                     <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                     <li><a href="#" class="uil uil-phone" data-toggle="tooltip" data-placement="left" title="Telepon"></a></li>
                     <li><a href="#" class="uil uil-email" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Mari bicara dan kerja sama dengan saya</h2>

              <form action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send Button">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; 2023 Regia Shafna Rimba . All rights reserved</p>
                        <p class="copyright-text text-center">Designed by Regia</a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/Headroom.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery.headroom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

  </body>
</html>