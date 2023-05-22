<?php
class RegisterModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function validateName($user, $document){        
        $this->db->connect();
        $result = $this->db->getConnection()->query("SELECT COUNT(*) as 'result' FROM `employees` WHERE `user_name` = '$user'")->fetch_assoc()['result'];
        $result2 = $this->db->getConnection()->query("SELECT COUNT(*) as 'result' FROM `users` WHERE `unique_id` = '$document'")->fetch_assoc()['result'];;
        $this->db->closeConnec();
        return !$result > 0 && !$result2 > 0;
    }

    function registerEmployee($data){
        $id = uniqid();
        $date = date('Y-m-d h:i:s');
        $pass = md5($data['password']);
        $userId = parent::registerUser($data);
        $query = "INSERT INTO `employees`(`id`, `user_id`, `user_name`, `password`, `status`, `rol`, `gender`, `date_created`, `date_modified`) ".
        "VALUES ('$id','$userId','".$data['username']."','$pass',0,1,'".$data['gender']."','$date','$date')";
        $this->db->connect();
        $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return true;
    }

}