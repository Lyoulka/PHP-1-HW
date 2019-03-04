<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Feedback</title>
  </head>
  <body>
	<div class="container">
    <div class="page-header">
        <h1>Отзывы</h1>
    </div>
 <?php
    /*Файлы конфигурации*/
    require_once "../config/main.php";
    $config = include CONFIG_DIR . "db.php";
    /*Библиотека - Генерация thumbnails*/
    require_once VENDOR_DIR . "funcImgResize.php";
          /*Подключение к БД*/
    $conDB = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);
    include ENGINE_DIR . "comments.php";    
    include ENGINE_DIR . "uploads.php";
    include ENGINE_DIR . "counters.php";
    include ENGINE_DIR . "render.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_FILES)) {
          uploadsFiles($conDB);
      }
    $commentsCreator = renderComments($conDB, null);
    /*Закрытие соединения с БД*/
    mysqli_close($conDB);
    ?> 

<form action="" method="post" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group">
      <label for="disabledTextInput">Ваше имя</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Введите имя" name="name" value="<?=$A?>" required>
    </div>
     <div class="form-group">
       <label for="avatar">Вы можете загрузить ваше фото к коментарию:</label>
      <input type="file" name="file" id="file" class="btn-file" data-filename-placement="inside" title="Выбрать файл" />
    <div class="form-group">
      <label for="messageInput">Сообщение</label>
      <input type="text" id="messageInput" class="form-control" name="message" value="<?=$message?>" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="operation" value="send">Отправить</button> <button type="submit" class="btn btn-primary ml-3" name="reset" value="reset">Сбросить</button>
    </div> 
  </fieldset>
</form>
<hr>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>