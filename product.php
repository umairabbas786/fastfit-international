<?php include "connection.php" ?>
<?php include "config/config.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="product.css" type="text/css">
    <link rel="icon" href="logo/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" public/css/product.css">

  </head>
  <style media="screen">
  .pro{
    background-image: url(" public/images/products/productcover.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    color: white;
    height: 550px;
  }
	  .product
      {
		  width: 30%;
		  height:auto;
      }
      .product img{
          width:100%;
          height: auto;
		  transition: transform 0.2s ease;
      }
	  .product:hover{
		  transform:scale(1.20);
		  overflow:hidden;
		  position:relative;
	  }
	  
	  @media only screen and (max-width: 700px) {
  .product
      {
		  width: 100%;
		  height:auto;
      }
		  .product img{
			  width:100%;
			  height:auto;
		  }
		  .popup{
    width: 900px;
    margin: auto;
    text-align: center
}
  }
  </style>
  <body class="navy-blue-skin">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="index.php">
        <img src=" public/images/logo/logo.png" width="350" height="40" alt="..." loading="lazy" class="pl-3">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto mr-5 p-2">
          <li class="nav-item pr-2">
            <a class="nav-link" href=" "><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href=" aboutus.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href=" product.php"><i class="fa fa-dropbox" aria-hidden="true"></i> Products</a>
          </li>
          <li class="nav-item pr-2">
            <a class="nav-link" href=" contactus.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Contact Us</a>
          </li>
        </ul>
        <form class="form-inline">
          <input class="form-control mr-sm-2 col-6" type="search" placeholder="Search Items" aria-label="Search">
          <button class="btn btn-dark btn-outline-light btn-md my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- /Navbar -->
    <!--product-pic-->
    <div class="jumbotron-fluid pro">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12 align-center pt-5 mt-5">
            <h1 class="display-4 font-weight-bold pt-5">Fast Fit International</h1>
            <p style="font-size: 24px;">High Quality Products at One Place</p>
          </div>
        </div>
    </div>
    </div>
    <!--/product-pic-->
    <!--products and categories-->
    <div class="container mt-2">
      <div class="row">
        <div class="col-md-4">
          <h3 class="cat">Categories</h3>
          <div class="accordion text-center" id="accordionExample">
            <div class="card">
              <button class="btn btn-dark btn-sm " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h4 class="lead m-0 p-0">Sport Suits</h4>
              </button>
              <div id="collapseOne" class="collapse bg-dark text-left" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <ul class="category">
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=american%20football%20jersey">American Football Jersey</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=basketball%20jersey">BasketBall Jersey</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=ice%20hockey%20jersey">Ice Hockey Jersey</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=soccer%20jersey">Soccer Jersey</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=volley%20ball%20jersey">Volley ball Jersey</a></li>
					  <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=football">Football</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion text-center" id="accordionExample">
            <div class="card">
              <button class="btn btn-dark btn-sm " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                <h4 class="lead m-0 p-0">Fashion Suits</h4>
              </button>
              <div id="collapseTwo" class="collapse bg-dark text-left" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <ul class="category">
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=caps">Caps</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=hoodies">Hoodies</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=jackets">Leather Jackets</a></li>
					  <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=bubble%20jackets">Bubble Jackets</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=polo%20shirts">Polo Shirts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=socks">Socks</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=sweat%20shirts">Sweat Shirts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=sweat%20trousers">Sweat Trousers</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=track%20suits">Track Suits</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=t-shirts">T-Shirts</a></li>
					  <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=shoes">Shoes</a></li>
					  <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=dynama%20pants">Dynama Pants</a></li>
					  <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=jeans%20and%20pants">Jeans And Pants</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion text-center" id="accordionExample">
            <div class="card">
              <button class="btn btn-dark btn-sm " type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                <h4 class="lead m-0 p-0">Gym Suits</h4>
              </button>
              <div id="collapseThree" class="collapse bg-dark text-left" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <ul class="category">
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=dip%20belts">Dip Belts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=gym%20singlet">Gym Singlet</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=gym%20trousers">Gym Trousers</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=gym%20vests%20singlets%20stringers">Gym Vests Singlets Stringers</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=neoprene%20belts">NeoPrene Belts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=power%20belts">Power Belts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=weight%20lifting%20belts">Weight Lifting Belts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=weight%20lifting%20gloves">Weight Lifting Gloves</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=wrist%20wraps">Wrist Wraps</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion text-center" id="accordionExample">
            <div class="card">
              <button class="btn btn-dark btn-sm " type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                <h4 class="lead m-0 p-0">Martial Suits</h4>
              </button>
              <div id="collapseFour" class="collapse bg-dark text-left" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <ul class="category">
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=bjj%20belts">bJJ Belts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=karate%20belts">Karate Belts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=taekwondo%20belts">TaekWondo Belts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=jui%20jitsu%20uniforms">JUI JITSU Uniforms</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=judo%20uniforms">JUDO Uniforms</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=karate%20uniforms">Karate Uniforms</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=kickboxing%20uniforms">KickBoxing Uniforms</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=kung-fu%20uniforms">Kung-Fu Uniforms</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=ninja%20uniforms">Ninja Uniforms</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=mma%20gloves">MMA Gloves</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=mma%20shorts">MMA Shorts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=mma%20sweat%20track%20suits">MMA Sweat Track Suits</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion text-center" id="accordionExample">
            <div class="card">
              <button class="btn btn-dark btn-sm " type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                <h4 class="lead m-0 p-0">Cycling Suits</h4>
              </button>
              <div id="collapseFive" class="collapse bg-dark text-left" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                  <ul class="category">
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=cycling%20jersey"> Cycling Jersey</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=cycling%20uniforms"> Cycling Uniforms</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=cycling%20gloves"> Cycling Gloves</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=cycling%20shorts"> Cycling Shorts</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion text-center" id="accordionExample">
            <div class="card">
              <button class="btn btn-dark btn-sm " type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
                <h4 class="lead m-0 p-0">Boxing Suits</h4>
              </button>
              <div id="collapseSix" class="collapse bg-dark text-left" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <ul class="category">
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=double%20end%20balls">Double End Balls</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=focus%20pads%20mitts">Focus Pads Mitts</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=hand%20wraps">Hand Wraps</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=head%20guards">Head Guards</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=heavy%20punching%20bags">Heavy Punching Bags</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=inner%20gloves">Inner Gloves</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=kick%20thai%20pads">Kick Thai Pads</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=leather%20boxing%20gloves">Leather Boxing Gloves</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=mouth%20guards">Mouth Guards</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=semi%20contact%20shoes">Semi Contact Shoes</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=shin%20pad%20shin%20in-steps">Shin Pad Shin In-Steps</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=speedballs">SpeedBalls</a></li>
                    <li><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a href=" product.php?product=taekwondo%20racket%20pads">TaekWondo Racket Pads</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
        <div class="col-md-8 overflow-hidden clearfix">
          <h3 class="cat">Products</h3>
          <?php $product_category = isset($_GET['product']) ? $_GET["product"] : 'american football jersey' ?>
            <?php $result = mysqli_query($conn, "SELECT * FROM products WHERE product_category='$product_category'"); ?>
            <?php while ($test = mysqli_fetch_array($result)) { ?>
  <div class="card product w-sm-100 text-white m-1 float-md-left my-3">
  <?php echo '<img id="myImg" class="card-img-top" src="public/data/product_pictures/'.$test["img_url"].'" alt="Product">'; ?>
      <div class="card-header black">
      <?php echo '<h6>'.$test["title"].'</h6>'; ?>
      </div>
  </div>
            <?php } ?>
        </div>
        </div>
      </div>
      <br>
    <!--/products and categories-->
    <!--contact us-->
    <div class="container-fluid bg-dark text-white">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-3 py-sm-2 py-2 my-0">
              <div class="col-md-12">
                <div class="d-block pt-3">
                  <img src=" public/images/logo/icon.png" alt="NONE" class="w-100">
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 py-sm-2 py-2 my-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h6 class="font-weight-bold ml-n2">CUSTOMER SERVICE</h6>
                  <ul class="uul ml-n5">
                    <a href=" "><li>Home</li></a>
                    <a href=" aboutus.php"><li>About Us</li></a>
                    <a href=" product.php"><li>Products</li></a>
                    <a href=" contactus.php"><li>Contact Us</li></a>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 py-sm-2 py-2 my-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h6 class="font-weight-bold ml-n2">PRODUCT CATEGORIES</h6>
                  <ul class="uul ml-n5">
                    <a href="http://fastfitinternational.com/product.php"><li>Sports Suit</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=caps"><li>Fashion Suits</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=cycling%20uniforms"><li>Motorcycle Suits</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=dip%20belts"><li>Gym Suits</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=jui%20jitsu%20uniforms"><li>Martial Arts</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=leather%20boxing%20gloves"><li>Boxing Suits</li></a>
                  <a href="#"><li>Surgical Suit/Accessories</li></a>
                  <a href="http://fastfitinternational.com/product.php?product=shoes"><li>Shoes</li></a>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-3 py-sm-2 py-2 my-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h6 class="font-weight-bold ml-n2">CONTACT</h6>
                  <ul class="ml-n5 uul text-white-50">
                    <li><i class="fa fa-envelope" aria-hidden="true"><span class="text-white-50"><a href"mailto:fasfitinternational101@gmail.com">&nbsp;fasfitinternational101@gmail.com</a></span></i></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> +92-311-660-8255</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12"><hr></div>
            <div class="col-12">
              <p class="text-white-50"> &copy; Copyrights 2020 <span class="text-white">Fast Fit International</span> - All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
      <!--/contact us-->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  
    </body>
  </html>
