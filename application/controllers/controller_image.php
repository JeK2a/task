<?php

class Controller_Image extends Controller
{

    function __construct()
    {
        $this->model = new Model_Image();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('image_view.php', 'template_view.php', $data);
    }

}