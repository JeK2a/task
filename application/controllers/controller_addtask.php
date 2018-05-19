<?php

class Controller_AddTask extends Controller {

    function __construct()
    {
        $this->model = new Model_AddTask();
        $this->view = new View();
    }

    function action_index()
    {
//        $data = $this->model->get_data();
        $this->view->generate('addtask_view.php', 'template_view.php');
    }

}