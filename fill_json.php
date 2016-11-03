<?php
  include 'db.php';

  $sql = "SELECT * FROM product";
  $result = mysqli_query($con,$sql);

  $i = 0;

  while ($row = mysqli_fetch_array($result)) {
    $response[$i]['id'] = $row['id'];
    $response[$i]['title'] = $row['title'];
    $response[$i]['description'] = $row['description'];
    $response[$i]['cost'] = $row['cost'];
    $data['post'] [$i] = $response[$i];
    $i++;
  }

  $json_string = json_encode($data['post']);
  $file = "products.json";
  file_put_contents($file,$json_string);
  @header('location:index.php');

 ?>
