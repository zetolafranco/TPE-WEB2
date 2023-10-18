<?php
require_once './app/views/home.view.php';

class HomeController{

    private $view;

    function __construct() {
        AuthHelper::init();
        $this->view = new HomeView();
    }

    function showHome(){
        $this->view->showHome();
    }
}