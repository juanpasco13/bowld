<?php
class UsersModel extends Model{

    function __construct(){
        parent::__construct();
    }


    function getUsers(){
        $data = [];
        $this->db->connect();
        $result = $this->db->getConnection()->query("SELECT * FROM `users`;");
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
        $this->db->closeConnec();
        return $data;
    }

    function getUserForId($id){
        $data = '';
        $query = "SELECT * FROM `users` WHERE `id` = '$id'";
        $this->db->connect();
        $result = $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return $result->fetch_assoc();
    }

    function getUserForUsername($user){
        $this->db->connect();
        $result = $this->db->getConnection()->query("SELECT COUNT(*) as 'count' FROM `employees` WHERE `user_name` = '$user'")->fetch_assoc();
        $this->db->closeConnec();
        return $result['count'] > 0;
    }

    function updateUser($data){
        var_dump($data);
        $query = "UPDATE `users` SET `name`=' " .$data['name']. "',`email`='" .$data['email']. "' WHERE `id` = '" .$data['id']. "';";
        $this->db->connect();
        $result = $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return $result; 
    }

}