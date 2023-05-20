<?php
class Pagos extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        // $this->view->datos = $this->model->getUsers();
        $this->view->title = 'Pagos';
        $this->view->render('pagos/pagos');
    }
}