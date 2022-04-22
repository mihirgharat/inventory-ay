</html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link rel="stylesheet" href="login.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 40%;
  }



	.footer{
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: green;
    text-align: center;
    color: #f4f4f4;
}

.icons{
    padding-top: 1rem;
}

.icons a{
    text-decoration: none;
    font-size: 2rem;
    margin: 0.5rem;
    color: #f4f4f4;
}

.company-name{
    font-size: 1.6rem;
    margin-top: 0.5rem;
}

@media (max-width: 500px){
    html{
        font-size: 50%;
    }
}    

@media(min-width: 501px) and (max-width: 768px){
    html{
    font-size: 50%;
    }
}    
</style>
<body>
<header id='header'>
  <div class='logo'>Logo</div>
  <nav>
    <ul class='navbar'>
      <li><a href="home.php">Home</a></li>
      <li><a href="registration.php">ITENARY</a></li>
      <li><a href="#">ABOUT US</a></li>
    </ul>
  </nav>
  <a href="registration.php" class="sign-in">
    <button class="btn-contact">Sign in</button>
  </a>
</header>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="berries.jpg" alt="Berries" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="salad.jpg" alt="Salad" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="spaghetti.jpg" alt="Spaghetti" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<center>
<div>
            <h1 style="color:orange">WELCOME TO ANNA KA HOTEL,
                NAVI MUMBAI
            </h1>
            <p >


                WELCOME FOODIES!!! ORDER ONE OF THE BEST QUALITIES STREET FOODS HERE!!!
            </p>

            <p>We offer all our distinguished guests the best amenities and all facilities that go beyond ones
                expectations. We believe in guest delight and guest satisfaction
            </p>
<h3><center>Dishes</center></h3>

    <div class="container">
        <div class="row">
          
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="features-grids">
                    <div class="col-md-12 col-sm-12 col-xs-12 feature-grid">
                        <div class="feature">
                            <div class="feature1">
                                <img src="berries.jpg" class="img-responsive">
                                <h4>Berries</h4>
                            </div>
                            <div class="feature2">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="features-grids">
                    <div class="col-md-12 col-sm-12 col-xs-12 feature-grid">
                        <div class="feature">
                            <div class="feature1">
                                <img src="salad.jpg" class="img-responsive">
                                <h4>Salads</h4>
                            </div>
                            <div class="feature2">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
 
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">

            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="features-grids">
                    <div class="col-md-12 col-sm-12 col-xs-12 feature-grid">
                        <div class="feature">
                            <div class="feature1">
                                <img src="spaghetti.jpg" class="img-responsive">
                                <h4>Tomatoes</h4>
                            </div>
                            <div class="feature2">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="clearfix"></div>
</div>
</div>
<br><br></br><br>


<footer class="footer">
        <div class="icons">
           <a href="#"><i class="fab fa-facebook"></i></a>
           <a href="#"><i class="fab fa-linkedin"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
            <p class="company-name">
                AY INTERNATIONAL&copy; 2022, ALL Rights Reserved
            </p>
        </div>
    </footer>

</body>
</html>
