<!-- Tim IT Surabaya Hijrah 
- Wisnu Aria Y (Project Leader & Front End Developer)
- Moch Shandy Tsalasa Putra (Front End Developer)
- Aryo Budilaksono (Back End Developer)
- Kelvin Adji Pangestu (Back End Developer)
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Wisnu Aria Y,Moch Shandy Tsalasa Putra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icon -->
    
    <link rel="shortcut icon" href="pictures/kahf.png" type="image/x-icon">
    <link rel="icon" href="pictures/favicon.ico" type="image/x-icon">

    <!-- Source CDN (Content Delivery Network) -->

    <!-- Navbar Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Glider JS -->
    <link rel="stylesheet" href="css/glider.min.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Title -->
    <title>Surabaya Hijrah</title>
</head>
<body>

<!-- Navbar -->
<header>
       <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light py-3 main-nav">
          <div class="container">
            <a class="navbar-brand " href="index.php"><img src="pictures/kahflogo.png" width="105" height="52.5" alt="Kahf Logo"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <!-- Active itu buat halaman yang sedang dikunjungi -->
                  <li class="nav-item active">
                    <a class="nav-link link-3" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link linkhover link-3" href="#story">About Us</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link link-3" href="#expertise">Our Program</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link-3" href="#team">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link-3" href="#works">Event</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link-3" href="#people-say">Blog</a>
                  </li>
                </ul>
              </div>
          </div>
        </nav>
    </header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <script src="js/navbar.js"></script>    

    <!-- Slider -->

    <div class="glider-contain">

        <button class="glider-prev">
            <i class="fa fa-chevron-left"></i>
        </button>

        <div class="glider">
            <th>
                <tr><a href="#"><img src="1.png" class="img-fluid" style="max-width: 100%; height: auto;"></a>
                </tr>
                <tr><a href="#"><img src="5.jpg" class="img-fluid" style="max-width: 100%; height: auto;"></a>
                </tr>
                <tr><a href="#"><img src="4.jpg" class="img-fluid" style="max-width: 100%; height: auto;"></a></tr>
                <tr><a href="#"><img src="pictures/3.jpg" class="img-fluid" style="max-width: 100%; height: auto;"></a></tr>
            </th>
        </div>

        <button class="glider-next">
            <i class="fa fa-chevron-right"></i>
        </button>

        <div id="dots" class="glider-dots"></div>
    </div>

    <script src="js/glider.min.js"></script>
    
    <!-- Javascript Glider -->
    <script>

        new Glider(document.querySelector('.glider'), {
            slidesToShow: 1,
            dots: '#dots',
            draggable: false,
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });

    </script>
<br>

<!-- MENU PROGRAM KAHF -->
<section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
        <h2>Our Program</h2>
    </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="1.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Kajian</a></h3>
            <p>Program ini adalah bla</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="1.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="#">Food Box</a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="2.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Ruang Harapan</a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
       </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="2.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Mbois</a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
    </ul>
  </div>
</section>


<div class="text-center bg-danger">
    <h1>Wak waw</h1>
</div>
<hr />
<br>

<!-- Footer -->
<footer>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-8">
              <div class="row footer-menu">
                <!-- Find Us Location -->
                <div class="col-md-6 col-xs-12">
                  <h2 class="footer">
                    Find Us
                  </h2>
                    <div class="embed-responsive embed-responsive-4by3">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6525253721115!2d112.71829691354493!3d-7.2803191735654424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fba2c2498407%3A0xcd27f60f463c0dfd!2sRuang+Harapan-Kahf+Surabaya+Hijrah!5e0!3m2!1sid!2sid!4v1565593698302!5m2!1sid!2sid" width="425" height="350" frameborder="0" style="border:0" allowfullscreen>
                      </iframe>
                    </div>
                    <a href="https://g.page/surabayahijrah?share"
                        target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Jarak No.51, Putat Jaya, Kec. Sawahan, Kota SBY, Jawa Timur 60255</a>
                </div>
                <div class="col-md-6 col-xs-12">
                  <h2 class="footer">Donation</h2>
                  <h5>BCA - 12345678</h5>
                </div>
                <div class="col-md-6 col-xs-12">
                  <h2 class="footer">Contact Us</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
</footer>
</body>
</html>