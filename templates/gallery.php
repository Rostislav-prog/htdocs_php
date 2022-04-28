<?php

$gallery = scandir(IMG_SMALL_DIR);

$images = array_splice($gallery, 2);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Галерея фотографий</h2>

    <?php foreach ($images as $image):?>
        <a rel="gallery" target="_blank" href="<?=IMG_BIG_DIR . substr($image, 0, -4) . 'jpeg'?>">
            <img src="<?=IMG_SMALL_DIR . substr($image, 0, -4) . 'jpeg'?>" width="100" height="100"/>
        </a>
    <?php endforeach;?>

    <form enctype="multipart/form-data" method="post">
        <p>
            <input type="file" name="f">
            <input type="submit" value="Отправить">
        </p>
    </form>
</body>
</html>



