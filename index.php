<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP web site</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'blocks/header.php' ?>
    <div class="container">
        <h3 class="mb-5">Наши статьи</h3>
        <div class="d-flex flex-wrap">
        <?php
          for ($i = 0; $i < 5; $i++):
        ?>
        <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Просто текст</h4>
      </div>
      <div class="card-body">
        <img src="img/photo<?php echo ($i + 1) ?>.jpg" alt="Природа" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробние</button>
      </div>
    </div>
        <?php endfor; ?>
      </div>
    </div>
   <?php require 'blocks/footer.php' ?>
  </body>
</html>
