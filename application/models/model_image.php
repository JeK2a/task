<?php

use db\DB;

require_once 'db.php';

class Model_Image implements Model
{

    public function get_data($id = null)
    {
        if (empty($id)) {
            $query = "SELECT `content` FROM `images`";
        } else {
            $query = "SELECT `content` FROM `images` WHERE `id`=" . $id;
        }
        $db = DB::getConnection();
        $que = $db->query($query);
        $data = $que->fetchAll();
        $data = $data[0];
//        header("Content-type: image/*");
        return $data;
    }

    public function set_data()
    {
        // Проверяем пришел ли файл
        if( !empty( $_FILES['image']['name'] ) ) {
            // Проверяем, что при загрузке не произошло ошибок
            if ( $_FILES['image']['error'] == 0 ) {
                // Если файл загружен успешно, то проверяем - графический ли он
                if( substr($_FILES['image']['type'], 0, 5)=='image') {
                    // Читаем содержимое файла
                    $image = file_get_contents($_FILES['image']['tmp_name']);
                    // Экранируем специальные символы в содержимом файла
                    $image = mysql_escape_string($image);
                    // Формируем запрос на добавление файла в базу данных
                    $query = "INSERT INTO `images` VALUES(NULL, '".$image."')";
                    // После чего остается только выполнить данный запрос к базе данных
//            mysql_query($query);
                    $db = db\DB::getConnection();
                    $que = $db->query($query);
                }
            }
        }
    }

}