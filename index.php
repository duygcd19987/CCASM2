<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Omni-Attire Home page</title>
</head>
<body>
	<div id="wrap">
		<header>
			<div id="top">
				<img src="img/logo.png" alt="Omni-Attire Logo & tagline">
				<button type="btn" class="button" onclick="alert('Sorry but this feature is not ready yet.')"><i class="fas fa-shopping-cart"></i><b>Check-out</b></button>
			</div>
			<nav class= "navbar navbar-expand-md bg-dark">
				<a class="navbar-brand" href="#">Navigation</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  				</button>
  				<div class="collaps navbar-collapse" id="navbarSupportedContent">
  					<ul class="navbar-nav">
  						<li class="nav-item">
                                                    <a class="nav-link" href="ConnectToDB.php">View</a>
  						</li>
            			<li class="nav-item">
              				<a class="nav-link" onclick="alert('Sorry but this page is not ready yet.')">Clothes</a>
				        </li>
				        <li class="nav-item">
				          	<a class="nav-link" onclick="alert('Sorry but this page is not ready yet.')">Accessories</a>
				        </li>
  						<li class="nav-item">
  							<a class="nav-link" href="list.html">List</a>
  						</li>
				        <li class="nav-item">
				            <a class="nav-link" onclick="alert('Sorry but this page is not ready yet.')">About</a>
				        </li>
				        <li class="nav-item">
				            <a class="nav-link" onclick="alert('Sorry but this page is not ready yet.')">FAQs</a>
				        </li>
				        <li class="nav-item">
				            <a class="nav-link" onclick="alert('Sorry but this page is not ready yet.')">Support</a>
				        </li>
				  	</ul>
          			<form class="form-inline">
      					<input class="form-control" type="search" placeholder="Search for any product...">
            			<button class="btn" type="submit" onclick="alert('Sorry but this feature is not ready yet.')"><i class="fas fa-search"></i></button>
          			</form>
        		</div>
      		</nav>
		</header>
    <main>
      <div id="line"><b><u>Check out</u> the previews of available lines of merchandises</b></div>
      <div class="container">
        <div id="slide" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/13.jpg" alt="Men">
              <div class="carousel-caption" style="color: blue">
                <b><i>Stylish male garments</i></b>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/14.jpg" alt="Women">
              <div class="carousel-caption" style="color: green">
                <b><i>Fashionable female garments</i></b>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/15.jpg" alt="Accessories" style="height: 642px !important">
              <div class="carousel-caption" style="color: red">
                <b><i>And various types of trendy accessories</i></b>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#slide" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#slide" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      <div id="line"><b><u>Select</u> a type of product to view</b></div>
      </div>
        <div class="container">
          <div class="row">
            <div class="column">
              <a href="list.html">
              <img src="img/16.jpg">
              <button type="button"><a href="list.html"><b><i>VIEW CLOTHING LIST</i></b></a></button>
            </div>
            <div class="column">
              <img src="img/17.jpg" onclick="alert('Sorry but this page is not ready yet.')">
              <button type="button" onclick="alert('Sorry but this page is not ready yet.')"><b><i>VIEW ACCESSORY LIST</i></b></button>
            </div>
          </div>
        </div>
    </main>
    <footer>
      <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="title">
                        <h2>CATEGORIES</h2>
                    </div>
                    <ul class="list-menu">
                        <li><a href="#" onclick="alert('Sorry but this feature is not ready yet.')">Clothes</a></li>
                        <li><a href="#" onclick="alert('Sorry but this feature is not ready yet.')">Accessories</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="title">
                        <h2>HELP</h2>
                    </div>
                    <ul class="list-menu">
                        <li><a href="#" onclick="alert('Sorry but this feature is not ready yet.')">Track Order</a></li>
                        <li><a href="#" onclick="alert('Sorry but this feature is not ready yet.')">Returns</a></li>
                        <li><a href="#" onclick="alert('Sorry but this feature is not ready yet.')">Shipping</a></li>
                        <li><a href="#" onclick="alert('Sorry but this feature is not ready yet.')">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="title">
                        <h2>GET IN TOUCH</h2>
                    </div>
                    <div class="contact">
                        <p>Any question? Let us know on the linked pages of our social accounts down below</p>
                    </div>
                    <ul class="social">
                        <li><a href="#" onclick="alert('Sorry but this feature is not ready yet.')"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" onclick="alert('Sorry but this feature is not ready yet.')"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" onclick="alert('Sorry but this feature is not ready yet.')"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <div class="title">
                        <h2>NEWSLETTER</h2>
                    </div>
                    <form>
                        <input type="text" id="email" name="email" placeholder="email@example.com">
                    </form>
                    <div class="button">
                        <a href="#" onclick="alert('Sorry but this feature is not ready yet.')">SUBSCRIBE</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="payment">
                    <img src="img/13.png" alt="MasterCard Logo">
                    <img src="img/14.png" alt="Maestro Logo">
                    <img src="img/15.png" alt="PayPal Logo">
                    <img src="img/16.png" alt="American Express Logo">
                </div>
                <p>Copyright ©2020 All rights reserved | Made with <i class="fas fa-heart"></i> by <a href="#">Colorlib </a> & distributed by <a href="#">ThemeWagon</a> </p>
            </div>
        </div>
      </div>
    </footer>
</body>
</html>
