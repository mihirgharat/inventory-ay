<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
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
  <a href="registration.php" class="sign-in">
    <button class="btn-contact">Sign in</button>
  </a>
</header>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: itenary.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Customer Registration</a></p>
  </form>
<?php
    }
?>
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