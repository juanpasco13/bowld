<?php

class Register extends Controller{
    function __construct(){
        parent::__construct();
    }

    function registerUser($data){
        if($this->model->validateName($data['username'], $data['document'])){
            return $this->model->registerEmployee($data);
        }
        return false;
    }

    function render(){
        $this->view->render('login/register');
    }
}