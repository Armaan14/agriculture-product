<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;1,100&display=swap" rel="stylesheet">
  
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SELLING PAGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Purchase Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
          
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/cc1.jpg" alt="" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Farming</h3>
        <p>Respect all Farmar's</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../assets/cc2.jpg" alt="" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Nature</h3>
        <p>For Us nature blessings!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="../assets/cc3.jpg" alt="" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Tree</h3>
        <p>It's Not onle give us Food But also oxygen! </p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Product </h2>
		</div>

		<div class="container-fluid"> 
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="../assets/cc6.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h1><b>We are selling the most authentic and less priced products. 
    			most fresh and original crops will be provided to the customers. From Farmer to your home it's our moto.</h1></b>
				
				<a href="about.php"> See More </a>
			</div>
		</div>
</section>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services  </h2>
		</div>

		<div class="container-fluid">
			<div class="row">
			
				<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
			<img class="card-img-top" src="../assets/food.jpg" alt="Card image">
			  <div class="card-body">
		    	<h4 class="card-title"> Fresh Foods</h4>
		    	<p class="card-text">You can buy frsh food </p>
		    	<a href="#" class="btn btn-primary">See All Product</a>
		  </div>
	</div>
					
				</div>

				<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
			<img class="card-img-top" src="../assets/dairy.jpg" alt="Card image">
			  <div class="card-body">
		    	<h4 class="card-title">Authentic  Dairy</h4>
		    	<p class="card-text">You can buy authentic Dairy Items  </p>
		    	<a href="#" class="btn btn-primary">See All Product</a>
		  </div>
	</div>
					
				</div><div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
			<img class="card-img-top" src="../assets/pix.jpg" alt="Card image">
			  <div class="card-body">
		    	<h4 class="card-title">Feel Pure </h4>
		    	<p class="card-text"> </p>
		    	<a href="#" class="btn btn-primary">See All Product</a>
		  </div>
	</div>
					
				</div>

				
			</div>
			
		</div>

</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>