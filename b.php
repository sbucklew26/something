<?php
  $json_file = file_get_contents('http://www.w3schools.com/js/customers_mysql.php');
  $json = json_decode($json_file,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <th width="450">Name</th>
          <th>City</th>
          <th>Country</th>
        </thead>
        <?php foreach ($json as $key): ?>
          <tbody>
            <tr>
              <td><?= $key['Name'] ?></td>
              <td><?= $key['City'] ?></td>
              <td><?= $key['Country'] ?></td>
            </tr>
          </tbody>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</body>
</html>
