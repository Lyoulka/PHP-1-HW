<?php
function uploadsFiles($conDB)
{
    foreach ($_FILES as $file) {
        $fileType = explode("/", $file['type'])[0];
        if ($file['error'] != 0) {
            $message = "Произошла ошибка: " . $file['error'] . "!";
        } elseif ($fileType != "image") {
            $message = "Неверный тип файла: " . $file['name'] . "!";
        } elseif ($file['size'] > 1048576) {
            $message = "Слишком большой размер файла: " . $file['size'] . "! Не более 1Мб!";
        } else { 
            $path1 = "img/";
            $src = $file['tmp_name'];
            $original = $path1 . $file['name'];
            $thumbs = $path1. 'thumbs/' . $file['name'];
            img_resize($src, $thumbs, 50, 50);
            move_uploaded_file($src, $original);
            }
        }
        echo '<div class="page-header"><h4>' . $message . '</h4></div>';
    }
