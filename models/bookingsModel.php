<?php
class BookingsModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function getBookings(){
        $data = [];
        $this->db->connect();
        $result = $this->db->getConnection()->query("SELECT * FROM `bookings`;");
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
        $this->db->closeConnec();
        return $data;
    }

}