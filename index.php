<?php include "connection.php"; ?>
<?php include "config/config.php"; ?>
<!doctype html>
<html lang="en">
  <head>
	  <script data-ad-client="ca-pub-9111222090897324" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <title>FastFit International</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home.css" type="text/css">
    <link rel="icon" href="public/images/logo/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/home.css">
  </head>
  <style media="screen">
    .j1{
    background-image: url("public/images/cards/j1.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
  }
  .j2{
      background-image: url("public/images/cards/j2.jpg");
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      color: white;
  }
  .card1{
    background-image: url("public/images/cards/c1.jpg");
  }
  .card2{
    background-image: url("public/images/cards/c2.jpg");
  }
  .card3{
    background-image: url("public/images/cards/c3.jpg");
  }
  .card4{
    background-image: url("public/images/cards/c4.jpg");
  }
  </style>
  <body class="navy-blue-skin">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <a class="navbar-brand" href="index.php">
        <img src="public/images/logo/logo.png" width="350" height="40" alt="..." loading="lazy" class="pl-3">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto mr-5 p-2">
          <li class="nav-item pr-2">
            <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
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
    <!--Carousal-->
    <div id="carouselExampleCaptions" class="carousel slide d-block" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src=" public/images/carousel/sportsuits.jpg" class="d-block w-100" alt="..." width="100%" height="650px">
          <div class="carousel-caption text-center">
            <h2 class="display-3">Sport Suits</h2>
            <p class="display-5 lead">All High Quality And Hand-Made Products</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src=" public/images/carousel/sports.jpg" class="d-block w-100" alt="..." width="100%" height="650px">
          <div class="carousel-caption">
            <h5 class="display-3">Sport Kits</h5>
            <p class="display-5 lead">All High Quality And Hand-Made Products</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src=" public/images/carousel/surgicalsuits.jpg" class="d-block w-100" alt="..." width="100%" height="650px">
          <div class="carousel-caption">
            <h5 class="display-3">Surgecal Suits</h5>
            <p class="display-5 lead">All High Quality And Hand-Made Products</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src=" public/images/carousel/motosuits.jpg" class="d-block w-100" alt="..." width="100%" height="650px">
          <div class="carousel-caption">
            <h5 class="display-3">Motorcycle Suits</h5>
            <p class="dispaly-5 lead">All High Quality And Hand-Made Products</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src=" public/images/carousel/gymsuits.jpg" class="d-block w-100" alt="..." width="100%" height="650px">
          <div class="carousel-caption">
            <h5 class="display-3">Gym Suits</h5>
            <p class="display-5 lead">All High Quality And Hand-Made Products</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--/Carousal-->
    <!--Cards-->
    <div class="jumbotron-fluid j1">
      <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-3 col-md-12 py-sm-5 my-sm-5 py-4 my-0">
                <div class="col-md-12">
                  <div class="view overlay card1">
                    <div class="mask flex-center rgba-white-strong">
                        <p class="black-text display-2">Sport Suits</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 py-sm-5 my-sm-5 py-4 my-0 ">
                <div class="col-md-12">
                  <div class="view overlay card2">
                    <div class="mask flex-center rgba-white-strong">
                        <p class="black-text display-2">Surgical Suits</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 py-sm-5 my-sm-5 py-4 my-0">
                <div class="col-md-12">
                  <div class="view overlay card3">
                    <div class="mask flex-center rgba-white-strong">
                        <p class="black-text display-2">Moto Suits</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 py-sm-5 my-sm-5 py-4 my-0">
              <div class="col-md-12">
                <div class="view overlay card4">
                  <div class="mask flex-center rgba-white-strong">
                      <p class="black-text display-2">Gym Suits</p>
                  </div>
              </div>
              </div>
          </div>
        </div>
    </div>
  </div>
  <br><br>
    <!--/Cards-->
    <!--Highlights Of Products-->
    <div class="my-5 text-center container">
      <div class="row mb-2">
         <div class="col text-center">
            <h1><u>HIGHLIGHTED PRODUCTS</u></h1>
         </div>
      </div>
      <div class="row d-flex align-items-center">
         <div class="col-1 d-flex align-items-center justify-content-center">
            <a href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
              <span class="sr-only">Previous</span>
            </a>
         </div>
         <div class="col-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

               <div class="carousel-inner this-carousel-was-not-working">
                  <div class="carousel-item active">
                     <div class="row">
                        <div style="background-image:url(' public/images/highlights/7.jpeg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                        </div>
                        <div style="background-image:url(' public/images/highlights//8.jpeg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                        </div>
                        <div style="background-image:url(' public/images/highlights//9.jpeg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div style="background-image:url(' public/images/highlights//10.jpeg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                        </div>
                        <div style="background-image:url(' public/images/highlights//2.jpeg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                        </div>
                        <div style="background-image:url(' public/images/highlights//6.jpeg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                       <div style="background-image:url(' public/images/highlights//1.jpeg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                       </div>
                       <div style="background-image:url(' public/images/highlights//3.jpeg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                       </div>
                       <div style="background-image:url(' public/images/highlights//4.jpeg');" class="col-12 col-md d-flex align-items-center justify-content-center">
                       </div>
                    </div>
                 </div>
               </div>
            </div>
         </div>
         <div class="col-1 d-flex align-items-center justify-content-center">
             <a href="#carouselExampleIndicators" data-slide="next">
              <span class="icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
              <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
   <br><br>
    <!--/Highlights of Products-->
    <!--Jumbotron-->
    <div class="jumbotron-fluid j2">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12 align-center pt-5">
            <h1 class="display-1 font-weight-normal lead pt-5">WHY CHOOSE US?</h1>
          </div>
            <div class="col-lg-3 col-md-6 py-sm-5 my-sm-5 py-4 my-0 ">
                <div class="col-md-12">
                    <div class="cc1" >
                      <div class="display-1">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                      </div>
                        <div class="card-body">
                            <h4>Fast Delivery</h4>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 py-sm-5 my-sm-5 py-4 my-0 ">
                <div class="col-md-12">
                    <div class=" cc2">
                      <div class="display-1">
                        <i class="fa fa-ship" aria-hidden="true"></i>
                      </div>
                        <div class="card-body">
                            <h4>Global Shipping</h4>
                          </div>
                      </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 py-sm-5 my-sm-5 py-4 my-0 ">
                <div class="col-md-12">
                    <div class=" cc3">
                      <div class="display-1">
                        <i class="fa fa-diamond" aria-hidden="true"></i>
                      </div>
                        <div class="card-body">
                            <h4>High Quality</h4>
                          </div>
                      </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 py-sm-5 my-sm-5 py-4 my-0 ">
                <div class="col-md-12">
                    <div class=" cc4">
                      <div class="display-1">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                      </div>
                        <div class="card-body">
                            <h4>Versatile</h4>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <br>
    <!--/Jumbotron-->
    <!--newsletter-->
    <div class="container-fluid cc py-5">
      <div class="container card p-5">
        <h3 class="text-center text-primary"><u>SUBSCRIBE TO OUR NEWSLETTER</u></h3>
        <hr color="black"><br>
    <form>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input type="email" class="form-control form-control-lg" placeholder="Email Address">
          </div>
        </div>
        <div class="col-lg-4 offset-lg-3">
          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">Submit</button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Thank You!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  You have been Successfully Subscribed to our newsletter.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3 mt-3 social text-center">
          <a href="https://wa.me/+923116608255"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>&nbsp;
          <a href="https://www.instagram.com/fasfit_international/"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;
        </div>
      </div>
    </form>
      </div>
    </div>
    <!--/newsletter-->
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