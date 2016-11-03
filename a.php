<?php

  $json_file = file_get_contents('datafill.json');

  $js = json_decode($json_file,true);

  // echo "<pre>";
  //   print_r($js);
  // echo "</pre>";

?>
<?php foreach ($js as $key ): ?>
  <ul>
    <li>
      <h1><?= $key['title'] ?></h1>
      <h4><?= $key['description'] ?></h4>
      <img src="<?= $key['image_url'] ?>" alt="">
    </li>
  </ul>
<?php endforeach; ?>
