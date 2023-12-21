<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>7KIDS</title>
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="img/fevicon.png" type="img/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile"><a href="index.php"><img src="img/logo7.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about1">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services1">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#news1">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#testimonial1">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#contact1">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href = "logout.php" class="btn btn warning">Logout</a>
                </li>
                </ul>
            </div>
            </nav>
        </div>
    <div class="container">
        <div class="logo"><a href="index.php"><img src="img/logo7.png"></a></div>
            <div class="menu_main">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about1">About</a></li>
                <li><a href="#services1">Services</a></li>
                <li><a href="#news1">News</a></li>
                <li><a href="#testimonial1">Testimonial</a></li>
                <li><a href="#contact1">Contact us</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="#">Soon!</a></li>
            </ul>
            </div>
        </div>
    <!-- header section end -->

    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="your_text">7KIDS<br>STORY</h1>
                  <p class="there_text">7KIDS STORY Mendefinisikan angka 7 adalah lucky number dan 7KIDS diperuntukkan anak-anak dan STORY cerita, KIDS STORY adalah cerita anak-anak yang tertera di web ini.</p>
                  <div class="read_bt"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6">
                  <img src="img/gambar1.png" class="imgage_1">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="your_text">7KIDS<br>STORY</h1>
                  <p class="there_text">7KIDS STORY Mendefinisikan angka 7 adalah lucky number dan 7KIDS diperuntukkan anak-anak dan STORY cerita, KIDS STORY adalah cerita anak-anak yang tertera di web ini.</p>
                  <div class="read_bt"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6">
                  <img src="img/gambar1.png" class="imgage_1">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="your_text">7KIDS<br>STORY</h1>
                  <p class="there_text">7KIDS STORY Mendefinisikan angka 7 adalah lucky number dan 7KIDS diperuntukkan anak-anak dan STORY cerita, KIDS STORY adalah cerita anak-anak yang tertera di web ini.</p>
                  <div class="read_bt"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6">
                  <img src="img/gambar1.png" class="imgage_1">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="your_text">7KIDS<br>STORY</h1>
                  <p class="there_text">7KIDS STORY Mendefinisikan angka 7 adalah lucky number dan 7KIDS diperuntukkan anak-anak dan STORY cerita, KIDS STORY adalah cerita anak-anak yang tertera di web ini.</p>
                  <div class="read_bt"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6">
                  <img src="img/gambar1.png" class="imgage_1">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->

    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container" id="about1">
        <div class="row">
          <div class="col-md-6">
            <div class="image_1"><img src="img/img-2.png"></div>
          </div>
          <div class="col-md-6">
            <h1 class="live_text">about 7KIDS STORY</h1>
            <p class="lorem_text">7Kids Story adalah situs web yang menyediakan cerita anak-anak yang menarik dan mendidik. Situs ini diperuntukkan bagi anak-anak usia 3-12 tahun. Situs ini memiliki koleksi cerita yang beragam, tampilan yang menarik, dan penjelasan moral. 7Kids Story dapat diakses secara gratis. Situs ini bertujuan untuk memberikan pengalaman membaca yang menyenangkan dan bermanfaat bagi anak-anak Indonesia</p>
            <p class="lorem_text">7Kids Story dikembangkan oleh tim pengembang yang berinovasi dan peduli dengan pendidikan anak. Tim ini terdiri dari Raisyal, Nadya dan Reza yang memiliki passion untuk memberikan konten yang berkualitas bagi anak-anak Indonesia.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- about section end -->
    
    <!-- services section start -->
    <div class="services_section layout_padding">
      <div class="container" id="services1">
        <h1 class="sevices_taital">Our sevices</h1>
        <p class="ipsum_text">Kami menyediakan 3 Genre dari berbagai judul buku cerita anak yang dapat diakses dengan mudah.</p>
        <div class="banner_section_2">
            <div class="row">
              <div class="col-lg-4 col-sm-12">
                <div class="box_main">
                  <div class="internet_icon"><img src="img/icon-1.png"></div>
                  <h4 class="broadband_text">DONGENG</h4>
                  <p class="many_text">Cerita dongeng adalah cerita fiksi yang penuh dengan keajaiban dan penuh fantasi.</p>
                </div>
                <div class="read_bt_1"><a href="dongeng.php">Read More</a></div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="box_main">
                  <div class="internet_icon"><img src="img/icon-2.png"></div>
                  <h4 class="broadband_text">FABEL</h4>
                  <p class="many_text">Fabel adalah cerita pendek yang menggunakan hewan sebagai tokoh utama.</p>
                </div>
                <div class="read_bt_1"><a href="#fable.php">Read More</a></div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="box_main">
                  <div class="internet_icon"><img src="img/icon-3.png"></div>
                  <h4 class="broadband_text">JENAKA</h4>
                  <p class="many_text">Cerita jenaka adalah cerita yang bertujuan untuk menghibur dan membuat anak-anak tertawa.</p>
                </div>
                <div class="read_bt_1"><a href="jenaka.php">Read More</a></div>
              </div>
            </div>
          </div> 
      </div>
    </div>
    <!-- services section end -->
    
    <!-- news section start -->
    <div class="news_section layout_padding">
      <div class="container" id="news1">
        <div class="news_main">
          <h1 class="news_taital">News</h1>
          <p class="tempor_text">Berikut pembaruan terbaru dari kami seputar buku cerita anak</p>
          <div class="news_section_2">
            <div class="date_box">
              <h3 class="agust_text">10<br><span style="color: #33c52e;">January</span></h3>
              <p class="dolor_text">10 Januari nanti kami akan update buku cerita dongeng yang lebih menarik dan mengedukasi pastinya.</p>
              <div class="border_botoom"></div>
              <h3 class="agust_text">16<br><span style="color: #33c52e;">February</span></h3>
              <p class="dolor_text">16 Februari nanti kami akan update buku cerita fabel yang lebih menghibur dan mengedukasi pastinya.</p>
              <div class="border_botoom"></div>
              <h3 class="agust_text">26<br><span style="color: #33c52e;">August</span></h3>
              <p class="dolor_text">26 Agustus nanti kami akan update buku cerita jenaka yang lebih seru dan mengedukasi pastinya.</p>
              <div class="border_botoom"></div>
            </div>
          </div>
        </div> 
      </div>
    </div>
    <!-- news section end -->

    <!-- testimonial section start -->
    <div class="testimonial_section">
      <div class="container" id="testimonial1">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <h1 class="testimonial_taital">Testimonial</h1>
              <div class="image_3"><img src="img/testi1.jpg"></div>
              <h4 class="client_text">Kangisal</h4>
              <p class="dummy_text">Aplikasi ini sangat bagus dan cocok untuk anak anak di Indonesia dan juga sangat mudah untuk diakses, 7KIDS STORY gokilll.</p>
            </div>
            <div class="carousel-item">
              <h1 class="testimonial_taital">Testimonial</h1>
              <div class="image_3"><img src="img/testi2.jpg"></div>
              <h4 class="client_text">Pradista</h4>
              <p class="dummy_text">Aplikasi ini sangat bagus dan cocok untuk anak anak di Indonesia dan juga sangat mudah untuk diakses, 7KIDS STORY gokilll.</p>
            </div>
            <div class="carousel-item">
              <h1 class="testimonial_taital">Testimonial</h1>
              <div class="image_3"><img src="img/testi3.jpg"></div>
              <h4 class="client_text">Manto</h4>
              <p class="dummy_text">Aplikasi ini sangat bagus dan cocok untuk anak anak di Indonesia dan juga sangat mudah untuk diakses, 7KIDS STORY gokilll.</p>
            </div>
          </div>
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        
      </div>
    </div>
    <!-- testimonial section end -->

    <!-- contact section start -->
      <div class="contact_section layout_padding">
        <div class="container" id="contact1">
          <div class="contact_section_2">
            <div class="row">
              <div class="col-md-6">
                <h1 class="contact_taital">Contact Us</h1>
                <div class="mail_section_1">
                  <input type="text" class="mail_text" placeholder="Name" name="text">
                  <input type="text" class="mail_text" placeholder="Email" name="text">
                  <input type="text" class="mail_text" placeholder="Phone Number" name="text">
                  <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                  <div class="send_bt"><a href="#">SEND</a></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="map_section">
                  <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8659844575386!2d107.44212597577715!3d-6.538603293454219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e68a1406c01%3A0xa66f34eb29c41198!2sUniversitas%20Pendidikan%20Indonesia%2C%20Kampus%20Purwakarta!5e0!3m2!1sid!2sid!4v1703076210990!5m2!1sid!2sid" width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="call_section">
      <div class="container">
        <div class="call_main">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="call_text"><a href="#"><img src="img/call-icon-1.png"><span class="padding_left_0">Call Now +6283816705265</span></a></div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="call_text"><a href="#"><img src="img/mail-icon-1.png"><span class="padding_left_0">7kids@gmail.com</span></a></div>
            </div>
            <div class="col-lg-6">
              <div class="input_bt">
                <input type="text" class="mail_bt" placeholder="Enter your email" name="Enter your email">
                  <span class="subscribe_bt" id="basic-addon2"><a href="#">Send</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact section end -->

    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="footer_text">
              <div class="footer_logo"><img src="img/logo7.png"></div>
              <p class="jonson_text">7Kids Story adalah situs web yang menyediakan cerita anak-anak yang menarik dan mendidik. Situs ini diperuntukkan bagi anak-anak usia 3-12 tahun. Situs ini memiliki koleksi cerita yang beragam, tampilan yang menarik, dan penjelasan moral. 7Kids Story dapat diakses secara gratis. Situs ini bertujuan untuk memberikan pengalaman membaca yang menyenangkan dan bermanfaat bagi anak-anak Indonesia.</p>
              <div class="social_icon">
                <ul>
                  <li><a href="#"><img src="img/fb-icon.png"></a></li>
                  <li><a href="#"><img src="img/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="img/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="img/instagram-icon.png"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3 margin_left_0">
            <h5 class="information_text">Information</h5>
            <p class="many_text_1">There are many variations of passages of Lorem Ipsum available, but the majority</p>
          </div>
          <div class="col-sm-3">
            <h5 class="information_text">Helpful Links</h5>
            <p class="many_text_1">There are many variations of passages of Lorem Ipsum available, but the majority</p>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section end -->

    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://7KIDS">7KIDS STORY</a></p>
      </div>
    </div>
    <!-- copyright section end -->
    
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
</body>
</html>