<!-- Chapman Monroe, Jack Copeland -->
<!DOCTYPE html>
<html>
<head>
	<title>Login - UVa Atheletics Statistics</title>
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script defer src="fontawesome/fontawesome-all.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="login.html">
	      	<img class="logo" alt="Brand" src="images/logo.png"/>
	      </a>
	    </div>
	    <ul class="nav navbar-nav">
      		<li class="active title">UVa Atheletics Statistics</li>
      	</ul>
	  </div> 
	</nav>
	<!-- LOGIN FORM -->
	<div class="text-center">
		<!-- Main Form -->
		<div class="login-form-1">
			<form id="login-form" class="text-left" method="post" action="<?php $_SERVER['PHP_SELF']?>">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<h2>login</h2>
							<label for="lg_username" class="sr-only">Username</label>
							<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username" value="<?php if (isset($_POST['lg_username']))?>">
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password" value="<?php if (isset($_POST['lg_password']))?>">
						</div>
						
						<input type="submit" value="Login" class="login-button">
						
						<div class="form-group login-group-checkbox">
							<input type="checkbox" id="lg_remember" name="lg_remember">
							<label for="lg_remember">Remember me</label>
						</div>
					</div>	
				</div>
				<div class="etc-login-form">
					<p>forgot your password? <a href="#">click here</a></p>
					<p>new user? <a href="#">create new account</a></p>
				</div>
			</form>
			<?php
				$name=$password=NULL; 

				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
					$name = fixInput($_POST["lg_username"]);
  					$password = fixInput($_POST["lg_password"]);
					
					if (empty($_POST["lg_username"]) || empty($_POST["lg_password"])){
						echo "<font color='red'><i>Please enter both a username and password</i></font><br/>";
					}
					//validate username 
					if (!preg_match("/^[a-zA-Z]*$/", $name)) {
						echo "<font color='red'><i>Username can only contain letters</i></font><br/>";
					}
					else{
						header('Location:index.html');
						exit; 
					}
				}

				function fixInput($data) {
  					$data = trim($data);
  					return $data;
				}
			?>
		</div>
		<!-- end:Main Form -->
	</div>
</body>