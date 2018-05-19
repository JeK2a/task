<?php

//use db;

require_once('application/class/db.php');

if (isset( $_GET['id'])) {
    // Здесь $id номер изображения
    $id = (int)$_GET['id'];
    if ($id > 0) {
        $query = "SELECT `content` FROM `images` WHERE `id`=".$id;

        $db = db\DB::getConnection();
        $que = $db->query($query);
        $data = $que->fetchAll();

//        if (mysql_num_rows($res) == 1) {
//            $image = mysql_fetch_array($res);
        $image = $data[0];

        header("Content-type: image/*");
        echo $image['content'];
//        }
    }
}
