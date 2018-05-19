<?php

//use db;

require_once('db.php');

if (isset( $_GET['id'])) {
    // Здесь $id номер изображения
    $id = (int)$_GET['id'];
    if ($id > 0) {
        $query = "SELECT `content` FROM `images` WHERE `id`=".$id;
        // Выполняем запрос и получаем файл
//        $res = mysql_query($query);

        $db = db\DB::getConnection();
        $que = $db->query($query);
        $data = $que->fetchAll();

//        if (mysql_num_rows($res) == 1) {
//            $image = mysql_fetch_array($res);

        $image = $data[0];

//        echo '<pre>';
//        var_dump($image);
//        echo '</pre>';

            // Отсылаем браузеру заголовок, сообщающий о том, что сейчас будет передаваться файл изображения
            header("Content-type: image/*");
            // И  передаем сам файл
            echo $image['content'];
//        }
    }
}
