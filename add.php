<?php
  include 'db.php';
  if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];
  }

  $sql = "INSERT INTO `product`(`title`, `description`, `cost`) VALUES ('$title','$description','$cost')";
  $result = mysqli_query($con,$sql);

  header('location: addproduct.php');
?>
