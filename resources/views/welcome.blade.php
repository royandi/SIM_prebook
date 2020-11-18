@extends ('layouts.main');

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top topbar-transparent">
    <div class="container d-flex justify-content-end">
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href=" ">Pre-book</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=" " class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li class="active"><a href=" ">For Learners</a></li>
          <li><a href="#about">For Teachers</a></li>
          <li><a href="#team">Singapore</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
                  <li><a href="#">Indonesia</a></li>
                  <li><a href="#">Singapore</a></li>
            </ul>
          </li>
          <li><a href="#footer">Search</a></li>
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Reskill & Upskill:<br><span>Bring out the best in you.</span></h2>
          <h4>Broaden your professional potential.<br>Deepen your personal horizons.<br>Start a skill-building plan now.</h4>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="#about" class="btn-get-started scrollto">Learn More</a>
          </div>

        </div>

        <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>What's your learning goal?</h3>
          <p>Define your target to get a better learning outcome</p>
        </header>

        

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Professional</a></h4>
              <p class="description">goals ini akan mengantar kamu kepada lorem ipsum</p>
              <a href="#about" class="btn-get-started scrollto">Select</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Personal</a></h4>
              <p class="description">goals ini akan mengantar kamu kepada lorem ipsum</p>
              <a href="#about" class="btn-get-started scrollto">Select</a>
            </div>
          </div>

          
      </div>
    </section><!-- End Services Section -->

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header>
          <h1><b>Free</b> Micro Classes</h1>
          <p>#7MinutesDailyChallenge that will change your life forever</p>
          <div class="container my-4">

<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/KDgHUEn0RP9qc2tI1596620992.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Trick</h4>
              <p class="card-text">Trick ilmu sukses menjadi penerjemah lepas</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/aLPOsXGHyJ5FMwIn1596620960.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Freelance</h4>
              <p class="card-text">Yuk belajar ilmu freelancing</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/hM3Sbgaf7ondAOw11602572898.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Storytelling</h4>
              <p class="card-text">Belajar Storytelling pada public speaking ala TEDtalks</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/8CjZVQTAS2Et6lGB1596620834.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Konten</h4>
              <p class="card-text">Belajar ilmu sukses jadi Penulis konten (Bagian 1)</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/0TVWGF4K5l8rCfP61596620857.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Konten</h4>
              <p class="card-text">Belajar ilmu sukses jadi Penulis konten (Bagian 2)</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/KDgHUEn0RP9qc2tI1596620992.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Trik</h4>
              <p class="card-text">Mantap</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->


</div>
        </header>

    </section>



    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header>
          <h1><b>On Demand</b> Workshop</h1>
          <p>Learn in demand skills at your convenience</p>
          <div class="container my-4">

<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/KDgHUEn0RP9qc2tI1596620992.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Trick</h4>
              <p class="card-text">Trick ilmu sukses menjadi penerjemah lepas</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/aLPOsXGHyJ5FMwIn1596620960.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Freelance</h4>
              <p class="card-text">Yuk belajar ilmu freelancing</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/hM3Sbgaf7ondAOw11602572898.jpg"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Storytelling</h4>
              <p class="card-text">Belajar Storytelling pada public speaking ala TEDtalks</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/8CjZVQTAS2Et6lGB1596620834.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Konten</h4>
              <p class="card-text">Belajar ilmu sukses jadi Penulis konten (Bagian 1)</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/0TVWGF4K5l8rCfP61596620857.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Konten</h4>
              <p class="card-text">Belajar ilmu sukses jadi Penulis konten (Bagian 2)</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 clearfix d-none d-md-block">
          <div class="card mb-2">
            <img class="card-img-top" src="http://dev.playbook.plus/images/avatar/KDgHUEn0RP9qc2tI1596620992.png"
              alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Trik</h4>
              <p class="card-text">Mantap</p>
              <a class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->


</div>
        </header>

    </section>


 
  <!-- ======= Footer ======= -->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>PreBook</h3>
                  <p></p>
                </div>

                <div class="footer-newsletter">
                  <h4>Our Newsletter</h4>
                  <p></p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                  </form>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><a href="#">For Learners</a></li>
                    <li><a href="#about">For Teachers</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4>Contact Us</h4>
                  <p>
                    <strong>Phone:</strong><br>
                    <strong>Email:</strong><br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <p></p>

              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
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

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</body>