<?php

class Pagos extends Controller{
    function __construct(){
        parent::__construct();
    }

    function loadPagos($id = ""){
        echo json_encode($this->model->getPagosForId($id));
    }

    function updateUser($data){
        return $this->model->updatePagos($data);
    }

    function load($id){
        echo $this->model->loadBanner($id);
    }

    function render(){
        $this->view->datos = $this->model->getPagos();
        $this->view->title = 'Pagos';
        $this->view->render('pagos/pagos');
    }
}