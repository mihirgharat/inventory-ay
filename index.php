<!--
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
</head>

<body>
	<form action="validate.php" method="post">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Adminname"
						name="adminname" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
		</div>
	</form>
</body>
!-->
</html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link rel="stylesheet" href="login.css">
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
<body>
  <div class=" flex-r container">
    <div class="flex-r login-wrapper">
      <div class="login-text">
        <div class="logo">
          <span><i class="fab fa-speakap"></i></span>
          <span>ADMIN LOGIN</span>
        </div>

        <form class="flex-c" action="validate.php" method="post">
          <div class="input-box">
            <span class="label">USERNAME</span>
            <div class=" flex-r input">
              <input type="text" placeholder="username" name="adminname">
              <i class="fas fa-at"></i>
            </div>
          </div>

          <div class="input-box">
            <span class="label">Password</span>
            <div class="flex-r input">
              <input type="password" placeholder="password" name="password">
              <i class="fas fa-lock"></i>
            </div>
          </div>
          <input class="btn" type="submit" value="Login">
        </form>

      </div>
    </div>
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
