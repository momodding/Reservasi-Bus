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
  <body>

    <div class="container ">
    <div class="row panel-collapse">
        <div class="col-sm-12 col-md-12">
            <div class="panel-group accordion-menu glyphicon-icon-rpad" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close m5"></span> Content
                            <span class="accordion-menu-collapsible-icon glyphicon glyphicon-chevron-down"></span>
                          </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                      <div class="container search-form">
                        <form role="form">
                          <div class="col-md-2 col-md-offset-1">
                            <div class="row">
                              <div class="form-group">
                                <div class="serchtile-2">Asal</div>
                                <label class="sr-only" for="asal">Asal</label>
                                <div class="input-group">
                                  <select id="age" name="age" class="form-control js-select2-asal">
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
                                  <div class="serchtile-2">Tujuan</div>
                                  <label class="sr-only" for="tujuan">Tujuan</label>
                                  <div class="input-group">
                                    <select id="age" name="toage" class="form-control js-select2-asal">
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
                                  <div class="serchtile-2">Tanggal</div>
                                  <label class="sr-only" for="religion">Caste</label>
                                  <input type="date" name="tanggal" value="">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2">
                              <br>
                              <div class="serchtile-2"></div>
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

      <!-- jQuery 3 -->
      <script src="<?php echo base_url(); ?>assets/js/jQuery/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js" charset="utf-8"></script>
      <script src="<?php echo base_url(); ?>assets/js/home/js/index.js" charset="utf-8"></script>
  </body>
</html>
