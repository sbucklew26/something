<?php

  $json_file = file_get_contents('products.json');
  $json = json_decode($json_file,true);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap.css">
  <title>market place</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <?php foreach ($json as $key): ?>
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title text-center"><?= $key['title'] ?></h3>
            </div>
            <div class="panel-body">
              <?= $key['description'] ?>
            </div>
            <div class="panel-footer text-center">
              <?= $key['cost'] ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
