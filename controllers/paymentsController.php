<?php
class Payments extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        // $this->view->datos = $this->model->getBookings();
        $this->view->title = 'Pagos de Reservas';
        $this->view->render('pagos/pagos');
    }
}