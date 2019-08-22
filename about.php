<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактная форма</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'blocks/header.php' ?>
   <div class="container mt-5">
    <h3>Контактная форма</h3>
    <form action="check.php" method="post">
       <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
       <textarea name="message" class="form-control" placeholder="Введите ваше сообщения"></textarea><br>
       <button type="submit" name="send" class="btn btn-success">Отправить</button>
    </form>
  </div>
    <?php require 'blocks/footer.php' ?>
  </body>
</html>
