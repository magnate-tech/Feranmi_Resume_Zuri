<?php
  require 'assets/vendor/PHPMailer/PHPMailerAutoload.php';
  if(isset($_POST['submit'])){
    $name = strip_tags(stripslashes($_POST['name']));
    $email = strip_tags(stripslashes($_POST['email']));
    $subject = strip_tags(stripslashes($_POST['subject']));
    $message = strip_tags(stripslashes($_POST['message']));
    $altmess = $message;
    $to = "mosesafolsons@gmail.com";
    $nameto = "Feranmi Afolabi";
    $from  = "support@magnatedevelopment.com"; 
    $namefrom = "($name - $email) Zuri";
    $mail = new PHPMailer();
    $mail->SMTPDebug = 0;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host   = "wgh11.wghservers.com";
    $mail->Port       = 465;
    $mail->Username   = $from;
    $mail->Password   = "Reachforsuccess2021@";
    $mail->SMTPSecure = "ssl";
    $mail->setFrom($from,$namefrom);
    $mail->addCC($from,$namefrom);
    $mail->Subject  = $subject;
    $mail->isHTML();
    $mail->Body = $message;
    $mail->AltBody  = $altmess;
    $mail->addAddress($to, $nameto);
    if($mail->send()){
        $result;
        $result = "
            <div class='alert alert-success' role='alert'>
                Success! I'll get to you shortly.
            </div>";
    }
    else{
        $result;
        $result = "
            <div class='alert alert-danger' role='alert'>
                Ooops... Something went wrong. Try Again Later.
            </div>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feranmi Afolabi - Web Developer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Feranmi Afolabi</h1>
      <p><span class="typed" data-typed-items="Web Developer, Designer, Mechatronics Technician, Freelancer"></span></p>
      <div class="social-links">
        <a href="https://twitter.com/our_uncle?=09" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.instagram.com/_feranmiafolabi_/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/feranmi-afolabi-3911a8192" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Web Development Enthusiast who is keen to find oppourtunities in programming.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Freelance Developer</h3>
            <p class="fst-italic">
              An Innovative Problem solver with a versatile skill-set, a lot of integrity and willingness to go the extra mile in solving a common problem.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>2 December 2001</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a href="https://magnatedevelopment.com">www.magnatedevelopement.com</a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+234 809288311</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Abuja, Nigeria</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>ND</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a href="mailto:Mosesafolsons@gmail.com">Mosesafolsons@gmail.com</a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Afolabi Feranmi Beloved</h4>
              <p><em>Innovative and deadline-driven Freelancer with 2+ years of experience designing and developing user-centered web applications.</em></p>
              <ul>
                <li>Abuja, Nigeria</li>
                <li>(234) 809-228-8311</li>
                <li><a href="mailto:Mosesafolsons@gmail.com">Mosesafolsons@gmail.com</a></li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>HTML5 and CSS Certification</h4>
              <h5>2017 - 2018</h5>
              <p><em>Aptech Computer Education, Nigeria</em></p>
              <p>Certification in Designing Static web pages.</p>
            </div>
            <div class="resume-item">
              <h4>Mechatronics And Automation Technology</h4>
              <h5>2019 - 2021</h5>
              <p><em>Model Skills Training Center, ITF Nigeria</em></p>
              <p>Certification in the use of mechanical, electrical and computer science knowledge to solve modern industrial challenges.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>E-Learning Developer</h4>
              <h5>2019 - 2020</h5>
              <p><em><a href="http://www.cagewox.com.ng/">Cagewox Nig Ltd</a>, Nigeria</em></p>
              <ul>
                <li>Lead the team on the development and use of the Moodle E-Learning Software</li>
                <li>Delegated tasks to the members of the team to carryout updates to the software</li>
                <li>Facilitated the training of Administrative users.</li>
                <li>Supervised the installation of the <a href="http://learning.trcn.gov.ng/login/index.php">software</a> on the <a href="http://trcn.gov.ng">clients</a> servers</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Web Developer</h4>
              <h5>2020 - Present</h5>
              <p><em><a href="https://indetix.com.ng/">Indetix Limited</a>, Nigeria</em></p>
              <ul>
                <li>Single-handedly developed the company's <a href="https://indetix.com.ng/">website</a> to fit the company's standard</li>
                <li>Set up the Live Chat function for ease of access to potential clients </li>
                <li>Lead the team that developed the <a href="https://p-yes.net/">Presidential Youth Empowerment Scheme</a> website and portal as a contract</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->
    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container justify-content-center" data-aos="fade-up">

        <div class="section-title">
          <h2>Reason</h2>
          <p><a href="https://training.zuri.team/enrollment">Zuri.Training</a></p>Stage - 3 Submission</p>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="count-box">
              <a href="https://training.zuri.team/enrollment"><img src="assets/img/zuri.png"/></a>
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Applicant</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Abuja, Nigeria</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:Mosesafolsons@gmail.com">Mosesafolsons@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+234 809-228-8311</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
          <?php global $result; echo $result; ?>
            <form action="index.php" method="POST" role="form" class="">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="4" placeholder="Message" required></textarea>
              </div></br>
              <div class="text-center"><button class="btn btn-primary" type="submit" name="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Feranmi Beloved Afolabi</h3>
      <p>LEARN - UNLEARN - RELEARN.</p>
      <div class="social-links">
        <a href="https://twitter.com/our_uncle?=09" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.instagram.com/_feranmiafolabi_/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/feranmi-afolabi-3911a8192" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Feranmi Afolabi&copy;</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>