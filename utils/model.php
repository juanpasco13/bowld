<?php
class Model{

    public $db;
    
    function __construct() {
        $this->db = new Database();
    }

    function registerUser($data){
        $id = uniqid();
        $date = date('Y-m-d h:i:s');
        $query = "INSERT INTO `users`(`id`, `unique_id`, `name`, `last_name`, `phone`, `email`, `date_created`)".
        " VALUES ('$id','".$data['document']."','".$data['name']."','".$data['lastName']."', '".$data['phone']."','".$data['email']."','$date')";
        $this->db->connect();
        $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return $id;
    }

    function validateUser($id){
        $this->db->connect();
        $result = $this->db->getConnection()->query("SELECT COUNT(*) as 'result' FROM `users` WHERE `unique_id` = '$id'")->fetch_assoc();
        $this->db->closeConnec();
        return !$result['result'] > 0;
    }
}