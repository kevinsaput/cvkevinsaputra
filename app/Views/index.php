<!doctype html>
<html lang="en">
  <head>
    <title>Kevin CV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
    <!-- Favicon  -->
    <link rel="icon" href="<?=base_url('assets/images/logokevin.png')?>">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#services-section" class="nav-link">Hobby</a></li>
                
              </ul>
            </nav>
          </div>

          <div class=" text-center mx-5">
            <h1 class="m-0 site-logo"><a href="#">Me.</a></h1>
          </div>

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>


    <div class="site-blocks-cover overlay bg-light" id="home-section">

      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="text-black">Hello, I'm</h1>
                <h1 class="text-black"><?= esc($about['name']) ?></h1>
                <p class="lead"><?= esc($about['desc']) ?></p>
                <p class="lead"><?= esc($about['place']) ?></p>
                <p><a href="#about-section" class="btn smoothscroll btn-primary">Read me more..</a></p>

              </div>
            </div>
          </div>
            
        </div>
      </div>

      <img src="images/kevon.png" alt="Image" class="img-face" data-aos="fade">
     
    </div>  
    
    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">My Hobbies</h2>
          </div>
          
          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-style"></span></div>
              <div class="service-about">
                <h3>E-sport</h3>
                <p>I'm a professional Valorant players playing for ONIC esport based in Ciaul Sukabumi, my role is Duelist. My last rank tier was Radiant.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-business_center"></span></div>
              <div class="service-about">
                <h3>Web Development</h3>
                <p>I'm a Junior Website Development using HTML, CSS, JS and PHP for the beckend.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-desktop_windows"></span></div>
              <div class="service-about">
                <h3>Sports</h3>
                <p>I really like to play some sports such as Billiard, Basketball, and Gym.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="service d-flex h-100">
              <div class="service-number mr-4"><span class="icon-layers"></span></div>
              <div class="service-about">
                <h3>Arts</h3>
                <p>I really like traditional arts using water based color, sometime I painted my clothes to interest people around me.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 mb-4 position-relative">
            <h2 class="section-title">About Me</h2>
          </div>
          <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="bg-light pt-5">
            <img src="images/kevonn.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4 order-2 order-lg-1">
            <p>I have a deep passion for playing e-sports games, especially Valorant. The thrill and strategy involved in each match keep me engaged and
               constantly striving to improve my skills.</p>
            <p>Alongside my love for gaming, I am also an avid sports enthusiast. Basketball and billiards are my go-to activities when I want to stay
               active and competitive. Both sports provide a perfect balance of physical exertion and mental sharpness, which I find incredibly rewarding.</p>
          </div>
          <div class="col-lg-4 order-3 order-lg-3">
            <p>In addition to my interests in gaming and sports, I have a strong affinity for coding and web development. Creating and designing websites
               allows me to channel my creativity and technical skills into building something functional and visually appealing. Moreover, I have a passion
                for painting, which gives me an outlet to express myself artistically.</p>
            <p><a href="#contact-section" class="btn smoothscroll btn-primary">Contact Me</a></p>
          </div>
          
        </div>
      </div>
    </div>

    <section class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5 text-white">testimonials</h2>
          </div>
        </div>
        <div class="owl-carousel slide-one-item">
          <div class="slide">
            <blockquote>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><cite>&mdash; Jean Smith</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <p><cite>&mdash; Carl Spencer</cite></p>
            </blockquote>
          </div>
          <div class="slide">
            <blockquote>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><cite>&mdash; Ryan Peters</cite></p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>  

    <section class="site-section" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Contact Form</h2>
          </div>
        </div>
        <form action="#" class="form">
          <div class="row mb-4">
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="form-group col-6">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="email" class="form-control" placeholder="Email address">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="text" class="form-control" placeholder="Subject of the message">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Type your message here.."></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary" value="Send Message">
            </div>
          </div>
          
        </form>
      </div>
    </section>

    <footer class="site-section bg-light footer">
      <div class="container">
      </div>
        <div class="row">
          <div class="col-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>