<?php

class Profile extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        // $this->view->datos = $this->model->getUsers();
        $this->view->title = 'Mi Perfil';
        $this->view->render('users/profile');
    }
}