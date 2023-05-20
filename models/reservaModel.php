<?php
class ReservasModel extends Model{

    function __construct(){
        parent::__construct();
    }


    function getReservas(){
        $data = [];
        $this->db->connect();
        $result = $this->db->getConnection()->query("SELECT * FROM `reservas`;");
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
        $this->db->closeConnec();
        return $data;
    }

    function getReservasForId($id){
        $data = '';
        $query = "SELECT * FROM `reservas` WHERE `id` = '$id'";
        $this->db->connect();
        $result = $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return $result->fetch_assoc();
    }
}