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
      <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title text-center"> Add product </h3>
        </div>
        <div class="panel-body">
          <form action="add.php" method="post" role="form">
            <div class="form-group">
              <label for="title"> Product title:</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="enter product title">
            </div>
            <div class="form-group">
              <label for="description"> Product description:</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="enter product description">
            </div>
            <div class="form-group">
              <label for="cost"> Product cost:</label>
              <input type="text" class="form-control" id="cost" name="cost" placeholder="enter product cost">
            </div>
            <div class="form-group">
              <input type="submit" class="form-control btn btn-success" id="submit" name="submit">
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
