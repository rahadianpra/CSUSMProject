<?php
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "projectusm"; // Ganti dengan nama database Anda

$conn = mysqli_connect("localhost", "root", "", "projectusm");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Computer Science Link Collection</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/usm-logo.png" rel="icon">
  <link href="assets/img/usm-logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: May 18 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/USM+APEX-h.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          
          <li><a class="nav-link scrollto" href="#services">International Student</a></li>
          <li><a class="nav-link scrollto " href="#services2">Local Student</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>

        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#services" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Link Collection of Computer Science USM Student<span>.</span></h1>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <img src="assets/img/glbvec.png"alt="globe" style="width: 50px;height:50px;">
            <h3><a href="#services" class="nav-link scrollto"><i ></i> <span>International Student</span></a></li>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <img src="assets/img/mly.png"alt="globe" style="width: 50px;height:50px;">
            <h3><a href="#services2">Local Student</a></h3>
          </div>
        </div>


    </div>
  </section><!-- End Hero -->

  <!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container" data-aos="fade-left">

    <div class="section-title">
      <h2>Link For</h2>
      <p>International Student</p>
    </div>

    <div class="row">
      <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"> -->
        <div class="col">
          <!-- <div class="icon"><i class="bx bx-book"></i></div> -->
          <img src="assets/img/glbvec.png" alt="glbvec" width="25" height="25">
          <h4><b><b> Bachelor of Computer Science </b></b></h4>
        </div>
        <div class="col">
          <div class="icon">
          <p> <br> <br></p>
          <p><a href="https://admission.usm.my/index.php/en/undergraduate-international/intensive-language-courses"target="_blank"><b><u>Requirement</u></b></a></p>
          <p><a href="https://admission.usm.my/index.php/en/undergraduate-international/how-to-apply"target="_blank"><b><u>Steps to apply</u></b></a></p>
          <p><a href="https://pohon.usm.my/t_international.php"target="_blank"><b><u>Link to apply</u></b></a></p>
          <p><a href="https://pohon.usm.my/t_international.php"target="_blank"><b><u>More information</u></b></a></p>
        </div>
        </div>
      </div>

      <div class="row">
        <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"> -->
          <div class="col">
            <!-- <div class="icon"><i class="bx bx-book"></i></div> -->
            <img src="assets/img/glbvec.png" alt="glbvec" width="25" height="25">
            <h4><b> 0100: Bachelor of Computer Science (Honours) <br> USM - UOWM KDUPG</b></b></h4>
          </div>
          <div class="col">
            <p> <br> <br></p>
            <p><a href="https://cs.usm.my/index.php/admissions-academics/undergraduate/bachelor-of-computer-science-honours-usm-uowkdupg"target="_blank"><b><u>Details</u></b></a></p>
            <p><a href="https://admission.usm.my/index.php/en/undergraduate-international/intensive-language-courses"target="_blank"><b><u>Requirement</u></b></a></p>
            <p><a href="https://admission.usm.my/index.php/en/undergraduate-international/how-to-apply"target="_blank"><b><u>Steps to apply</u></b></a></p>
            <p><a href="https://pohon.usm.my/t_international.php"target="_blank"><b><u>Link to apply</u></b></a></p>
            <p><a href="https://pohon.usm.my/t_international.php"target="_blank"><b><u>More information</u></b></a></p>
          </div>
        </div>

  </div>

  
</section><!-- End Services2 Section -->

    <!-- ======= Services Section ======= -->
    <section id="services2" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Link For</h2>
          <p>Local Student</p>
        </div>

        <div class="row">
          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"> -->
            <div class="col">
              <!-- <div class="icon"><i class="bx bx-book"></i></div> -->
              <h4><b><img src="assets/img/mly.png" alt="mly" width="25" height="25"> <br> <b> US6481001: Bachelor of Computer Science (Honours) (Intelligent Computing / Software Engineering / Computing Infrastructure)</b></b></h4>
            </div>
            <div class="col">
              <p><a href="https://pohon.usm.my/include_perdana/dokumen/program/2223/US6481001.pdf"target="_blank"><b><u>Requirement</u></b></a></p>
              <p><a href="https://cs.usm.my/index.php/admissions-academics/undergraduate/bsc-computer-sc"target="_blank"><b><u>About the program</u></b></a></p>
              <p><a href="https://admission.usm.my/index.php/en/undergraduate-malaysian/info/tatacara-permohonan"target="_blank"><b><u>Steps to apply</u></b></a></p>
              <p><a href="https://pohon.usm.my/modul/login.php"target="_blank"><b><u>Link to apply</u></b></a></p>
              <p><a href="https://pohon.usm.my/t_perdana.php"target="_blank"><b><u>More information</u></b></a></p>
            </div>
          </div>

          <div class="row">
            <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"> -->
              <div class="col">
                <!-- <div class="icon"><i class="bx bx-book"></i></div> -->
                <img src="assets/img/mly.png" alt="mly" width="25" height="25">
                <h4><b> 0100: Bachelor of Computer Science (Honours) USM - UOWM KDUPG </b></b></h4>
              </div>
              <div class="col">
                <p> <br> <br></p>
                <p><a href="https://cs.usm.my/index.php/admissions-academics/undergraduate/bachelor-of-computer-science-honours-usm-uowkdupg"target="_blank"><b><u>Details</u></b></a></p>
                <p><a href="https://admission.usm.my/index.php/en/undergraduate-international/intensive-language-courses"target="_blank"><b><u>Requirement</u></b></a></p>
                <p><a href="https://admission.usm.my/index.php/en/undergraduate-international/how-to-apply"target="_blank"><b><u>Steps to apply</u></b></a></p>
                <p><a href="https://pohon.usm.my/t_international.php"target="_blank"><b><u>Link to apply</u></b></a></p>
                <p><a href="https://pohon.usm.my/t_international.php"target="_blank"><b><u>More information</u></b></a></p>
              </div>
            </div>

            <div class="row">
              <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"> -->
                <div class="col">
                  <!-- <div class="icon"><i class="bx bx-book"></i></div> -->
                  <img src="assets/img/mly.png" alt="mly" width="25" height="25">
                  <h4><b>(USM+1): Bachelor of Computer Science (Honours) <br> (Intelligent Computing / Software Engineering / Computing Infrastructure)</b></b></h4>
                </div>
                <div class="col">
                  <p> <br> <br></p>
                  <p><a href="https://pohon.usm.my/t_t20.php"target="_blank"><b><u>Details</u></b></a></p>
                  <p><a href="https://pohon.usm.my/include_perdana/dokumen/program/2223/US6481001.pdf"target="_blank"><b><u>Requirement</u></b></a></p>
                  <p><a href="https://pohon.usm.my/modul/login.php"target="_blank"><b><u>Link to apply</u></b></a></p>
                  <p><a href="https://pohon.usm.my/t_t20.php"target="_blank"><b><u>More information</u></b></a></p>
                </div>
              </div>
          
          </div>
          </div>

        </div>

      </div>
    </section><!-- End Services2 Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/makmalcomp.jpg" class="img-fluid" alt="makmal" style="width: 500px;height:350px;">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Welcome to Computer Science USM Field.</h3>
            <p class="fst-italic">
              This website provides you to make it easier to find the links needed during college.
              
              <p class="fst-italic">
                The subject are :

            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> International Student <br> -> Bachelor of Computer Science <br> -> 0100: Bachelor of Computer Science (Honours) USM - UOWM KDUPG</li>
              <li><i class="ri-check-double-line"></i> Local Student <br> -> US6481001: Bachelor of Computer Science <br> -> 0100: Bachelor of Computer Science (Honours) USM - UOWM KDUPG <br> -> (USM+1): Bachelor of Computer Science (Honours) (Intelligent Computing / Software Engineering / Computing Infrastructure)
              </li>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/Flag_of_Malaysia.svg.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/usm-logo.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/USM-v.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/computer-science.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/cssociety.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/glbvec.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/csi.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        


        <iframe width="420" height="345" src="https://www.youtube.com/embed/3g-3c9ucgLE">
        </iframe>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/BZgyfFXY8Dw">
        </iframe>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/OqKLuOpebpg">
        </iframe>

        


            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- comment section -->
    <!-- <form action="comment.php" method="POST"></form> -->
    <div class="comment-box">
          <p>Leave a Comment</p>
          <form class="comment-form" form action="comment.php" method="POST">
                <input type="text" name="nama" id="nama" placeholder="Name">
               <input type="email" name="email" id="email" placeholder="Email">
                <textarea rows="10" name="comment" id="comment" placeholder="Write Your Comment"></textarea>
                <button type="submit" name="submit" value="Submit"> Post Comment</button>

          </form>
          </div>

    


  <!-- ======= Footer ======= -->
  <footer id="footer">

      <div class="container">
        <div class="row">



     

     

        

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; School of Computer Sciences, Universiti Sains Malaysia, 11800 USM Penang, Malaysia <br>
        Tel: +604-653 3647 / 2158 / 2155  |  Fax: +604-653 3684  | Email: cs@usm.my  |
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</form>

</body>

</html>