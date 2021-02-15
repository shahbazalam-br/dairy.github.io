<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>body{
    background-image: url("background.png");
}
</style>
</head>
<body >
    <!--
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
<p>Don't have an account? <a href="index.html">Sign up now</a>.</p>
</form>
</div>
-->


<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
            
          <a href="#" class="icoRss" title="Rss" class="social-network social-circle"><i class="fa fa-rss"></i></a></li>
          <a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          <a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
          <a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
        
			</div>
			<span>or use your account</span>
			<input  placeholder="username" id="name" name="username" type="username"/>
			<input type="password" placeholder="password" id="password" name="password"   />
			<a href="#">Forgot your password?</a>
            <!--<button>Sign In</button>-->
            
            <button name="submit" value=" Login ">Sign In</button>
            <span><?php echo $error; ?></span>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp"><a href="form.html">Sign Up</button>
			</div>
		</div>
	</div>
</div>

</body>
</html>
