<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome - {{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style_light.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">

      <h1><a href="{{ route('home') }}">Hi, I'm Juniardy</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="index.html" class="mr-auto"><img src="assets/img/favicon.png" alt="" class="img-fluid"></a> --}}
      <h2>Welcome to my page.</h2>
      <h2>I'm a passionate <span>Programmer</span> from Indonesia</h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          {{-- <li><a href="#resume">Resume</a></li> --}}
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="social-links">
        {{-- <a href="https://twitter.com/JuniardyTan" class="twitter"><i class="icofont-twitter"></i></a> --}}
        <a href="https://www.facebook.com/Okazaki.Juniardy" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/juniardy.tan/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
        {{-- <a href="#" class="google-plus"><i class="icofont-google-plus"></i></a> --}}
        <a href="https://www.linkedin.com/in/juniardy-hartanto-2159006b/" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/no_user.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Programmer &amp; IT Consultant</h3>
          <p class="font-italic">
            I'm a Mobile apps Developer for <a href="https://golgon.co.id/id/">PT. Golgon</a> in Medan, North Sumatera. I have serious passion for building Desktop, Web, and Mobile Application to help user.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 26 June 1993</li>
                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> junrd-co.herokuapp.com/</li>
                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +62 852 6101 1382</li>
                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Medan, Sumatera Utara, Indonesia</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{ (now()->year) - 1993 }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Bachelor's Degree</li>
                <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> juniardy.co@gmail.com</li>
                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
              </ul>
            </div>
          </div>
          <p>
            
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">85%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">React Native <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->


    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">32</span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="icofont-document-folder"></i>
            <span data-toggle="counter-up">52</span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-live-support"></i>
            <span data-toggle="counter-up">548</span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-users-alt-5"></i>
            <span data-toggle="counter-up">1</span>
            <p>Teams</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

    {{-- <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Lorem Ipsum</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Dolor Sitema</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Sed perspiciatis</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Magni Dolores</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Nemo Enim</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Eiusmod Tempor</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Midela Teren</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Pira Neve</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Dirada Pack</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Moton Ideal</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Verdo Park</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests --> --}}

    {{-- <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="owl-carousel testimonials-carousel">

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>Saul Goodman</h3>
          <h4>Ceo &amp; Founder</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3>Sara Wilsson</h3>
          <h4>Designer</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Jena Karlis</h3>
          <h4>Store Owner</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3>Matt Brandon</h3>
          <h4>Freelancer</h4>
        </div>

        <div class="testimonial-item">
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
          <h3>John Larson</h3>
          <h4>Entrepreneur</h4>
        </div>

      </div>

    </div><!-- End Testimonials  --> --}}

  </section><!-- End About Section -->

  {{-- <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Working Experience</h3>
          <div class="resume-item">
            <h4>Mobile Apps Developer</h4>
            <h5>2018 - Present</h5>
            <p><em>PT. Golgon, Medan, North Sumatera </em></p>
            <p>
            <ul>
              <li>Planning, design, and develop an mobile application to reach user.</li>
              <li>Planning, design, and develop web application for mobile backend.</li>
              <li>Manage, learn and teach SAP Business One to users.</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Programmer Desktop</h4>
            <h5>2016 - 2018</h5>
            <p><em>PT Sumatera Sarana Sekar Sakti, Medan, North Sumatera</em></p>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>Auditor</h4>
            <h5>2014 - 2016</h5>
            <p><em>PT. Ocean Centra Furnindo, Medan, North Sumatera</em></p>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>IT Staff</h4>
            <h5>2012 - 2013</h5>
            <p><em>PT. Sumatera Berlian Motors, Medan, North Sumatera</em></p>
            <p></p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Alice Barkley</h4>
            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
            <p>
            <ul>
              <li>Portland par 127,Orlando, FL</li>
              <li>(123) 456-7891</li>
              <li>alice.barkley@example.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Bachelor Degree of Information Technology</h4>
            <h5>2011 - 2015</h5>
            <p><em>STMIK - STIE Mikroskil, Medan, North Sumatra</em></p>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>Primary - High School</h4>
            <h5>1999 - 2011</h5>
            <p><em>Tri Ratna, Sibolga, North Sumatra</em></p>
            <p></p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section --> --}}

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Fast</a></h4>
            <p>Fast load times and lag free interaction, my highest priority</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-mobile-alt"></i></div>
            <h4><a href="">Responsive</a></h4>
            <p>My layouts will work on any device, big or small</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-bulb"></i></div>
            <h4><a href="">Intuitive</a></h4>
            <p>Strong preference for easy to use, intuitive UX/UI.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-rocket"></i></div>
            <h4><a href="">Dynamic</a></h4>
            <p>Websites don't have to be static. I love making pages come to life</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-wrench"></i></div>
            <h4><a href="">Maintenance</a></h4>
            <p>Free maintenance for first year of running application. I charges maintenance fee on second year so a can make a live.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-book-content"></i></div>
            <h4><a href="">Manual</a></h4>
            <p>You get free 1 manual book how to use the programs.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-desktop">Desktop</li>
            <li data-filter=".filter-mobile">Mobile</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-desktop">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/inv_stm.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Inventory System</h4>
              <p>Inventory Management system with module Master, Transaction & Report</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/inv_stm.png" data-gall="portfolioGallery" class="venobox" title="Desktop 1"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/schgown.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SCHGown</h4>
              <p>Simple Promotion Web app for end user to see Rental Gown Images</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/schgown.png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-desktop">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Desktop 2</h4>
              <p>Desktop</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="Desktop 2"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div> --}}

        <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/schgown.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SCHGown POS</h4>
              <p>Rental & Point of Sale app for sales doing transaction</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/schgown.png" data-gall="portfolioGallery" class="venobox" title="Mobile 2"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/thumb-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-desktop">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Desktop 3</h4>
              <p>Desktop</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="Desktop 3"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div> --}}

        <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/sonus.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Sonus</h4>
              <p>Mobile radio application for City Media Group</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/sonus.png" data-gall="portfolioGallery" class="venobox" title="Mobile 1"><i class="bx bx-plus"></i></a>
                <a href="https://play.google.com/store/apps/details?id=com.cmg.sonus&hl=en" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/jurnal_asia.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jurnal Asia</h4>
              <p>Mobile news application for Jurnal Asia</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/jurnal_asia.jpg" data-gall="portfolioGallery" class="venobox" title="Mobile 3"><i class="bx bx-plus"></i></a>
                <a href="https://play.google.com/store/apps/details?id=com.jurnalasia&hl=en" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/thumb-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="#" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div> --}}

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Jl. Prajurit Gg. Laskrida No. B3, Medan, North Sumatera, Indonesia</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              {{-- <a href="https://twitter.com/JuniardyTan" class="twitter"><i class="icofont-twitter"></i></a> --}}
              <a href="https://www.facebook.com/Okazaki.Juniardy" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="https://www.instagram.com/juniardy.tan/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
              {{-- <a href="#" class="google-plus"><i class="icofont-google-plus"></i></a> --}}
              <a href="https://www.linkedin.com/in/juniardy-hartanto-2159006b/" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></a>
              {{-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
              <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a> --}}
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>juniardy.co@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Whatsapp</h3>
            <p>+62 852 6101 1382</p>
          </div>
        </div>
      </div>

      {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form> --}}

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    &copy; 2020 Created by <a href="#">7Heim Dev</a>, Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>