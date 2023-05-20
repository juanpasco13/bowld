<?php

class Reservas extends Controller{
    function __construct(){
        parent::__construct();
    }

    function loadReservas($id = ""){
        echo json_encode($this->model->getReservasForId($id));
    }

    function updateReservas($data){
        return $this->model->updateReservas($data);
    }

    function load($id){
        echo $this->model->loadBanner($id);
    }

    function render(){
        $this->view->datos = $this->model->getReservas();
        $this->view->title = 'Reservas';
        $this->view->render('reservas/reservaVista');
    }
}