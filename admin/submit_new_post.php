<?php
include "../connection.php";
include "../config/config.php";
session_start();

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS products (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  img_url VARCHAR(250) NOT NULL,
  title VARCHAR(250) NOT NULL,
  product_category VARCHAR(50)
)");

// Compress image
function compressImage($source, $destination, $quality) {
  $info = getimagesize($source);

  if ($info['mime'] == 'image/jpeg') {
    $image = imagecreatefromjpeg($source);
  } elseif ($info['mime'] == 'image/gif') {
    $image = imagecreatefromgif($source);
  } elseif ($info['mime'] == 'image/png') {
    $image = imagecreatefrompng($source);
  }

  imagejpeg($image, $destination, $quality);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $image_dir_path = '../public/data/product_pictures';

  if (!file_exists($image_dir_path)) {
    mkdir($image_dir_path, 0777, true);
  }

  $thumbnail_image_name = strtolower($_FILES["product_image"]["name"]);
  $thumbnail_image_name = time().rand(0,99999)."_".str_replace(" ", "-", $thumbnail_image_name);

  $title=$_POST['title'];
  $product_category = $_POST['product_category'];

  $tmp_image = $_FILES['product_image']['tmp_name'];

  // Compress Image and Save it
  compressImage($_FILES['product_image']['tmp_name'],$image_dir_path."/".$thumbnail_image_name,90);

  $result = mysqli_query($conn, "INSERT INTO products (`img_url`, `title`, `product_category`) VALUES ('$thumbnail_image_name','$title', '$product_category')");

  if($result){
    $_SESSION['success']="Product Publishes Successfully";
    header ("location:index.php");
  }
  else{
    echo 'not published';
  }
}
?>
