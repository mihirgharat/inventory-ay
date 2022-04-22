<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<style>
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
      <li><a href="#">Home</a></li>
      <li><a href="#">ITENARY</a></li>
      <li><a href="#">ABOUT US</a></li>
    </ul>
  </nav>
  <a href="logout.php" class="sign-in">
  <button class="btn-contact">Logout</button>
  </a>
</header>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
    </div>
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