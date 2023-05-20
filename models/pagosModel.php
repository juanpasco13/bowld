<?php
class PagosModel extends Model{

    function __construct(){
        parent::__construct();
    }


    function getPagos(){
        $data = [];
        $this->db->connect();
        $result = $this->db->getConnection()->query("SELECT * FROM `pagos`;");
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
        $this->db->closeConnec();
        return $data;
    }

    function getPagosForId($id){
        $data = '';
        $query = "SELECT * FROM `pagos` WHERE `id` = '$id'";
        $this->db->connect();
        $result = $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return $result->fetch_assoc();
    }
}