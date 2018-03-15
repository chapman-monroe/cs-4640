<!-- Chapman Monroe, Jack Copeland -->
<!DOCTYPE html>
<html>
<head>
	<title>UVa Atheletics Statistics</title>
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script defer src="fontawesome/fontawesome-all.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.html">
	    	<img class="logo" alt="Brand" src="images/logo.png"/>
	    </a>
	    </div>
	    <ul class="nav navbar-nav">
	      
	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">My Teams
	        <span class="caret"></span>
	        </a>
	        <ul class="dropdown-menu">
	          <li>
	          	<a class="dropdown-item" href="mensbball.html"><i class="fas fa-basketball-ball fa-sm"></i>Men's Basketball</a>
	          </li>
	          <li>
	          	<a class="dropdown-item" href="#"><i class="fas fa-baseball-ball fa-sm"></i>  Baseball</a>
	          </li>
	          <li>
	          	<a class="dropdown-item" href="#"><i class="fas fa-table-tennis fa-sm"></i>Women's Tennis</a>
	          </li>
	        </ul>
	      </li>
	    </ul>
	  <button type="button" class="btn btn-default navbar-btn navbar-right"><a href="login.php">Log Out</a></button> 
	  </div>
	</nav>
	<div class="main-content-home">
		<div class="content-home">
			<h2>Recent Updates</h2>
			<div class="row main-row">
				<div class="row-header">
					<h3><i class="fas fa-basketball-ball fa-sm"></i><?php
					echo strtoupper("  men's basketball");?></h3>
				</div><div class="col-md-4 home-box">
					Winner
					<img class="winner" src="images/logo.png">
				</div><div class="col-md-4 home-box">
					Score
					<h4>65-64</h4>
				</div><div class="col-md-4 home-box">
					Rebounds
					<h4>5-10</h4>
				</div>
			</div>
			<div class="row main-row">
				<div class="row-header">
					<h3><i class="fas fa-basketball-ball fa-sm"></i><?php
					echo strtoupper("  men's basketball");?></h3>
				</div><div class="col-md-4 home-box">
					Winner
					<img class="winner" src="images/logo.png">
				</div><div class="col-md-4 home-box">
					Score
					<h4>65-64</h4>
				</div><div class="col-md-4 home-box">
					Rebounds
					<h4>5-10</h4>
				</div>
			</div>
		</div>
	</div>

</body>
</html>