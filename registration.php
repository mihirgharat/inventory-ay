<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
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
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Customer Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
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