<?php
include "../connection.php";
include "../config/config.php";
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container text-center mb-3">
                        <?php if(isset($_SESSION['success'])){?>
                          <div class="alert alert-primary" role="alert"><?php echo $_SESSION['success']; ?></div>
                        <?php }unset($_SESSION['success']);?>
</div>
  <h4 class="text-danger text-center display-3 lead">Admin Panel</h4>
  <hr>
  <br><br>
  <form action="submit_new_post.php" method="post" enctype="multipart/form-data">
    <div class="container">
    <div class="form-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input form-control-lg" id="product_image" name="product_image" required>
        <label class="custom-file-label" for="product_image">Select Product Image ..</label>
    </div>
    </div>
    <input type="text" name="title" required placeholder="Enter Title of Your Product" class="text-center form-control-md form-control"><br>
    </div>

    <div class="container table-responsive">
    <table class="table table-striped table-dark table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Categories</th>
      <th scope="col">Categories</th>
      <th scope="col">Categories</th>
      <th scope="col">Categories</th>
      <th scope="col">Categories</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><input type="radio" name="product_category" value="american football jersey" />
    <label>American Football Jersey</label></td>
    <td><input type="radio" name="product_category" value="speedballs" />
    <label>SpeedBalls</label></td>
      <td><input type="radio" name="product_category" value="basketball jersey" />
    <label>BasketBall Jersey</label></td>
    <td><input type="radio" name="product_category" value="ice hockey jersey" />
    <label>Ice Hockey Jersey</label></td>
    <td><input type="radio" name="product_category" value="soccer jersey" />
    <label>Soccer Jersey</label></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><input type="radio" name="product_category" value="volley ball jersey" />
    <label>Volley ball Jersey</label></td>
    <td><input type="radio" name="product_category" value="caps" />
	  <label>Football</label></td>
    <td><input type="radio" name="product_category" value="football" />
    <label>Caps</label></td>
    <td><input type="radio" name="product_category" value="hoodies" />
    <label>Hoodies</label></td>
    <td><input type="radio" name="product_category" value="jackets" />
    <label>Leather Jackets</label></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><input type="radio" name="product_category" value="bubble jackets" />
    <label>Bubble Jackets</label></td>
    <td><input type="radio" name="product_category" value="polo shirts" />
    <label>Polo Shirts</label></td>
    <td><input type="radio" name="product_category" value="socks" />
    <label>Socks</label></td>
    <td><input type="radio" name="product_category" value="sweat shirts" />
    <label>Sweat Shirts</label></td>
    <td><input type="radio" name="product_category" value="sweat trousers" />
    <label>Sweat Trousers</label></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><input type="radio" name="product_category" value="track suits" />
    <label>Track Suits</label></td>
    <td><input type="radio" name="product_category" value="t-shirts" />
	  <label>T-Shirt</label></td>
    <td><input type="radio" name="product_category" value="dynama pants" />
    <label>Dynama Pants</label></td>
	  <td><input type="radio" name="product_category" value="jeans and pants" />
    <label>Jeans and Pants</label></td>
    <td><input type="radio" name="product_category" value="dip belts" />
    <label>Dip Belts</label></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><input type="radio" name="product_category" value="weight lifting belts" />
    <label>Weight Lifting Belts</label></td>
    <td><input type="radio" name="product_category" value="weight lifting gloves" />
    <label>Weight Lifting Gloves</label></td>
    <td><input type="radio" name="product_category" value="wrist wraps" />
    <label>Wrist Wraps</label></td>
    <td><input type="radio" name="product_category" value="bjj belts" />
    <label>bJJ Belts</label></td>
    <td><input type="radio" name="product_category" value="karate belts" />
    <label>Karate Belts</label></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td><input type="radio" name="product_category" value="gym singlet" />
    <label>Gym Singlet</label></td>
    <td><input type="radio" name="product_category" value="gym trousers" />
    <label>Gym Trousers</label></td>
    <td><input type="radio" name="product_category" value="gym vests singlets stringers" />
    <label>Gym Vests Singlets Stringers</label></td>
    <td><input type="radio" name="product_category" value="neoprene belts" />
    <label>NeoPrene Belts</label></td>
    <td><input type="radio" name="product_category" value="power belts" />
    <label>Power Belts</label></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td><input type="radio" name="product_category" value="taekwondo belts" />
    <label>TaekWondo Belts</label></td>
    <td><input type="radio" name="product_category" value="jui jitsu uniforms" />
    <label>JUI JITSU Uniforms</label></td>
    <td><input type="radio" name="product_category" value="judo uniforms" />
    <label>JUDO Uniforms</label></td>
    <td><input type="radio" name="product_category" value="karate uniforms" />
    <label>Karate Uniforms</label></td>
    <td><input type="radio" name="product_category" value="kickboxing uniforms" />
    <label>KickBoxing Uniforms</label></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td><input type="radio" name="product_category" value="kung-fu uniforms" />
    <label>Kung-Fu Uniforms</label></td>
    <td><input type="radio" name="product_category" value="ninja uniforms" />
    <label>Ninja Uniforms</label></td>
    <td><input type="radio" name="product_category" value="mma gloves" />
    <label>MMA Gloves</label></td>
    <td><input type="radio" name="product_category" value="mma shorts" />
    <label>MMA Shorts</label></td>
    <td><input type="radio" name="product_category" value="mma sweat track suits" />
    <label>MMA Sweat Track Suits</label></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td><input type="radio" name="product_category" value="cycling jersey" />
    <label>Cycling Jersey</label></td>
    <td><input type="radio" name="product_category" value="cycling uniforms" />
    <label>Cycling Uniforms</label></td>
    <td><input type="radio" name="product_category" value="cycling gloves" />
    <label>Cycling Gloves</label></td>
    <td><input type="radio" name="product_category" value="cycling shorts" />
    <label>Cycling Shorts</label></td>
    <td><input type="radio" name="product_category" value="double end balls" />
    <label>Double End Balls</label></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td><input type="radio" name="product_category" value="focus pads mitts" />
    <label>Focus Pads Mitts</label></td>
    <td><input type="radio" name="product_category" value="hand wraps" />
    <label>Hand Wraps</label></td>
    <td><input type="radio" name="product_category" value="head guards" />
    <label>Head Guards</label></td>
    <td><input type="radio" name="product_category" value="heavy punching bags" />
    <label>Heavy Punching Bags</label></td>
    <td><input type="radio" name="product_category" value="inner gloves" />
    <label>Inner Gloves</label></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td><input type="radio" name="product_category" value="kick thai pads" />
    <label>Kick Thai Pads</label></td>
    <td><input type="radio" name="product_category" value="leather boxing gloves" />
    <label>Leather Boxing Gloves</label></td>
    <td><input type="radio" name="product_category" value="mouth guards" />
    <label>Mouth Guards</label></td>
    <td><input type="radio" name="product_category" value="semi contact shoes" />
    <label>Semi Contact Shoes</label></td>
    <td><input type="radio" name="product_category" value="shin pad shin in-steps" />
    <label>Shin Pad Shin In-Steps</label></td>
    </tr>
    <tr>
      <th scope="row">12</th>
    <td><input type="radio" name="product_category" value="taekwondo racket pads" />
    <label>TaekWondo Racket Pads</label></td>
	  <td><input type="radio" name="product_category" value="shoes" />
    <label>Shoes</label></td>
    </tr>
  </tbody>
</table>
  <input type="submit" value="Post Product" class="btn btn-block btn-danger"><br>
</div>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
