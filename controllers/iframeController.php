<?php
class Iframe extends Controller{
    function __construct(){
        parent::__construct();
    }

    function disponibilities($date){
        echo $this->model->getDayReservation($date);
    }

    function reservation($data){
        $this->model->sendReservation($data);
    }

    function render(){
        // $this->view->datos = $this->model->getUsers();
        $this->view->title = 'Pagos';
        $this->view->render('iframeReserva/reserva');
    }
}