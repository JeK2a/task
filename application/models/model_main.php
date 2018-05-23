<?php

use db\DB;

require_once 'db.php';

class Model_Main implements Model
{

    public function get_data()
    {
        $query = "SELECT id, user, email, text  FROM `task`";
        $db = DB::getConnection();
        $que = $db->query($query);
        $result = $que->fetchAll();
        foreach ($result as $task) {
            $data[] = array('id'     => $task['id'],
                'user'  => $task['user'],
                'email' => $task['email'],
                'text'  => $task['text'],
                'image' => $task['image']);
        }
        return $data;
    }

    public function set_data()
    {
        // TODO: Implement set_data() method.
    }

}