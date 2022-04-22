<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Itenary Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" /> 
	<link href="css/style2.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
</head>
<script>
	var total=0;
	var profit=0;
	function a(){
		total=total+55;
		profit=profit+(55-40);
		document.getElementById("a1").style.backgroundColor='green';
	}
	function b(){
		total=total+65;
		profit=profit+(65-40);
		document.getElementById("a2").style.backgroundColor='green';
	}
	function c(){
		total=total+60;
		profit=profit+(60-40);
		document.getElementById("a3").style.backgroundColor='green';
	}
	function d(){
		total=total+65;
		profit=profit+(65-40);
		document.getElementById("a4").style.backgroundColor='green';
	}
	function e(){
		total=total+100;
		profit=profit+(100-80);
		document.getElementById("a5").style.backgroundColor='green';
	}
	function f(){
		total=total+150;
		profit=profit+(150-110);
		document.getElementById("a6").style.backgroundColor='green';
	}
	function g(){
		total=total+95;
		profit=profit+(95-40);
		document.getElementById("a7").style.backgroundColor='green';
	}
	function h(){
		total=total+90;
		profit=profit+(90-40);
		document.getElementById("a8").style.backgroundColor='green';
	}
	function i(){
		document.getElementById("bill").innerHTML="Your bill:Rs."+total;
	}

</script>
<body> 
<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<main>
        <header id='header'>
          <div class='logo'><img src="img/logo.jpg" alt="Image" class="logoimg" /></div>
          <nav>
            <ul class='navbar'>
              <li><a href="home.php">HOME</a></li>
              <li><a href="#">ITENARY</a></li>
              <li><a href="#">ABOUT US</a></li>
            </ul>
          </nav>
          <a href="logout.php" class="sign-in">
          <button class="btn-contact">LOGOUT</button>
          </a>
        </header>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Itenary Page</h2>
				<h1 class="col-12 text-center">
					Hey, <?php echo $_SESSION['username']; ?>!</h1>
				<p id="bill"  class="col-12 text-center">Have a look at all these delicious south indian fast food dishes.Varying from idli to dosas.Will surely get your mouth watering!!</p>
			</header>

			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" id="a1">
						<figure>
							<img src="img/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption class="fig">
								<h4 class="tm-gallery-title">Idli Sambaar</h4>
								<p class="tm-gallery-description">A south Indian steamed cake of rice, usually served with sambhar.</p>
								<p class="tm-gallery-price">Rs 55 <span class="glyphicon glyphicon-shopping-cart"></span></p>
								<button class="btn btn-success" onclick="a()">ADD TO CART</button>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" id="a2">
						<figure>
							<img src="img/02.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Sada Dosa</h4>
								<p class="tm-gallery-description">A thin pancake made from a fermented batter predominantly consisting of lentils and rice</p>
								<p class="tm-gallery-price">Rs 65 <span class="glyphicon glyphicon-shopping-cart"> </span> </p>
								<button class="btn btn-success" onclick="b()">ADD TO CART</button>
							</figcaption>
						</figure>
					</article>
	 				<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" id="a3">
						<figure>
							<img src="img/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Medu Vada</h4>
								<p class="tm-gallery-description">Fritter made from Vigna mungo (black lentil).</p>
								<p class="tm-gallery-price">Rs 60 <span class="glyphicon glyphicon-shopping-cart"> </span></p>
								<button class="btn btn-success" onclick="c()">ADD TO CART</button>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" id="a4">
						<figure>
							<img src="img/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Onion Uttapam</h4>
								<p class="tm-gallery-description">Thick pancake topped with chopped vegetables such as onions and chiles.</p>
								<p class="tm-gallery-price">Rs 65 <span class="glyphicon glyphicon-shopping-cart"> </span></p>
								<button class="btn btn-success" onclick="d()">ADD TO CART</button>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" id="a5">
						<figure>
							<img src="img/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Masala Dosa</h4>
								<p class="tm-gallery-description">Thin pancake stuffed with boiled spiced potatoes</p>
								<p class="tm-gallery-price">Rs 100 <span class="glyphicon glyphicon-shopping-cart"> </span></p>
								<button class="btn btn-success" onclick="e()">ADD TO CART</button>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" id="a6">
						<figure>
							<img src="img/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Mysore Dosa</h4>
								<p class="tm-gallery-description">A rice and lentil pancake that has a chilli and garlic chutney spread on the inside and stuffed with boiled potatoes </p>
								<p class="tm-gallery-price">Rs 150<span class="glyphicon glyphicon-shopping-cart"> </span></p>
								<button class="btn btn-success" onclick="f()">ADD TO CART</button>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" id="a7">
						<figure>
							<img src="img/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Dahi Idli</h4>
								<p class="tm-gallery-description">A savoury rice cake dipped in greek yogurt</p>
								<p class="tm-gallery-price">Rs 95 <span class="glyphicon glyphicon-shopping-cart"> </span></p>
								<button class="btn btn-success" onclick="g()">ADD TO CART</button>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item" id="a8">
						<figure>
							<img src="img/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Rava Idli</h4>
								<p class="tm-gallery-description">Rava idli are steamed cakes made with semolina, yogurt, spices and veggies</p>
								<p class="tm-gallery-price">Rs 90 <span class="glyphicon glyphicon-shopping-cart"> </span></p>
								<button class="btn btn-success" onclick="h()">ADD TO CART</button>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 1 -->
				
			</div>
			<p  class="col-12 text-center"><button class="btn btn-primary" onclick="i()">PLACE ORDER</button></p>
        <br><br>
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
    </main>
	</div>
</body>
</html>