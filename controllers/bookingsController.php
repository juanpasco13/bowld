<?php
class Bookings extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->datos = $this->model->getBookings();
        $this->view->title = 'Reservas';
        $this->view->render('bookings/bookings');
    }
}