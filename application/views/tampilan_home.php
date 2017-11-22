<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pemesanan Tiket Bus</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/css/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home/css/style.css">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!--============= Navbar =============-->
    <nav class="navbar navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
          <a class="navbar-brand" href="#">Digital Agency</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="hidden">
              <a href="#page-top"></a>
            </li>
            <li class="page-scroll">
              <a href="#why">Why Us?</a>
            </li>
            <li class="page-scroll">
              <a href="#who">Who Are We?</a>
            </li>
            <li class="page-scroll">
              <a href="#clients">Clients</a>
            </li>
            <li class="page-scroll">
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      </nav>
        <!-- /.============= Navbar =============-->

    <!-- Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for Slides -->
        <div class="carousel-buttons">
          <div class="search">
            <div class="container">
              <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <div class="form-section">
                      <div class="row">
                        <form role="form">
                          <div class="col-md-2 col-md-offset-1">
                            <div class="row">
                              <div class="form-group">
                                <div class="serchtile">Asal</div>
                                <label class="sr-only" for="asal">Asal</label>
                                <div class="input-group">
                                  <select id="asal" name="asal" class="form-control js-select2-asal">
                                    <option value="18">Jogja</option>
                                    <option value="19">Purwokerto</option>
                                    <option value="20">Purbalingga</option>
                                    <option value="21">Cilacap</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="row">
                              <div class="form-group">
                                  <div class="serchtile">Tujuan</div>
                                  <label class="sr-only" for="tujuan">Tujuan</label>
                                  <div class="input-group">
                                    <select id="tujuan" name="tujuan" class="form-control js-select2-asal">
                                      <option value="18">Jogja</option>
                                      <option value="19">Purwokerto</option>
                                      <option value="20">Purbalingga</option>
                                      <option value="21">Cilacap</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="row">
                                <div class="form-group">
                                  <div class="serchtile">Tanggal</div>
                                  <label class="sr-only" for="religion">Caste</label>
                                  <input type="date" name="tanggal" value="">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <br>
                              <div class="serchtile"></div>
                              <button type="submit" class="btn btn-default btn-primary btn-block" data-toggle="modal" data-target="#demo-1">Search</button>

                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-inner">
              <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                  <div class="fill" style="background-image:url('assets/image/1.jpg');"></div>
                  <div class="carousel-caption">
                    <h2>We bring people together.
                      Love unites them...</h2>
                    </div>
                  </div>
                  <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('assets/image/1.jpg');"></div>
                    <div class="carousel-caption">
                      <h2>We bring people together.
                        Love unites them...</h2>
                    </div>
                  </div>
                  <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                  <div class="fill" style="background-image:url('assets/image/1.jpg');"></div>
                  <div class="carousel-caption">
                    <h2>We bring people together.
                      Love unites them...</h2>
                    </div>
                  </div>
                </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>

    </header>
    <!-- End Carousel -->

    <!-- Page 1 -->
    <div class="container">
      <div class="page-header">
        <h1>Ini Halaman Baru</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page 1 -->

    <!-- Page 2 -->
    <div class="container">
      <div class="page-header">
        <h1>Ini Halaman Baru</h1>
      </div>
      <div class="row">
        <div class="col-md-4 ">
          <div class="card card-1">
            <div class="wrapper-card">
              <div class="row">
                <div class="page-header">
                  <h4>Hello World</h4>
                </div>
              </div>
              <div class="row">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="card card-1">
            <div class="wrapper-card">
              <div class="row">
                <div class="page-header">
                  <h4>Hello World</h4>
                </div>
              </div>
              <div class="row">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="card card-1">
            <div class="wrapper-card">
              <div class="row">
                <div class="page-header">
                  <h4>Hello World</h4>
                </div>
              </div>
              <div class="row">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page 2 -->
    <br>
    <br>
  <!-- Footer -->
	<footer class="myfooter">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h4 class="title-widget">Sumi</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
					<!--
					<ul class="social-icon">
					<a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					<a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
					<a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
					</ul>
					-->
					<ul class="social social-circle">
						<li> <a href="#" class="icoFacebook"><i class="fa fa-facebook"></i></a></li>
						<li> <a href="#" class="icoTwitter"> <i class="fa fa-twitter"></i> </a> </li>
						<li> <a href="#" class="icoGoogle"> <i class="fa fa-google-plus"></i> </a> </li>
						<li> <a href="#" class="icoRss"> <i class="fa fa-youtube"></i> </a> </li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h4 class="title-widget">My Account</h4>
					<span class="acount-icon">
						<a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Wish List</a>
						<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
						<a href="#"><i class="fa fa-globe" aria-hidden="true"></i> Language</a>
					</span>
				</div>
				<div class="col-sm-3">
					<h4 class="title-widget">Category</h4>
					<div class="category">
						<a href="#" class="zoom">men</a>
						<a href="#" class="zoom">women</a>
						<a href="#" class="zoom">boy</a>
						<a href="#" class="zoom">girl</a>
						<a href="#" class="zoom">bag</a>
						<a href="#" class="zoom">teshart</a>
						<a href="#" class="zoom">top</a>
						<a href="#" class="zoom">shos</a>
						<a href="#" class="zoom">glass</a>
						<a href="#" class="zoom">kit</a>
						<a href="#" class="zoom">baby dress</a>
						<a href="#" class="zoom">kurti</a>
					</div>
				</div>
				<div class="col-sm-3">
					<h4 class="title">Payment Methods</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<ul class="payment">
						<li><a href="#"><i class="fa fa-cc-amex zoom" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-credit-card zoom" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-paypal zoom" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-visa zoom" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<hr>

			<div class="row text-center"> © 2017. Gopiballavpur.com</div>
		</div> <!-- ./container -->



    </footer>
    <div class="myfooter-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © Footer E-commerce Plugin 2014. All right reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                	<li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul>
            </div>
        </div>
    </div>
    <!--/.footer-bottom-->
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js" charset="utf-8"></script>
    <script src="<?php echo base_url(); ?>assets/js/home/js/index.js" charset="utf-8"></script>
  </body>
</html>
