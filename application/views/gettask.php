<?php

require_once('../models/db.php');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if ($id > 0) {
        $query = "SELECT `image` FROM `task` WHERE `id`=".$id;

        $db = db\DB::getConnection();
        $que = $db->query($query);
        $data = $que->fetchAll();

//        if (mysql_num_rows($res) == 1) {
//            $image = mysql_fetch_array($res);

        $image = $data[0];
        header("Content-type: image/*");
        echo $image['image'];
//        }
    }
}
