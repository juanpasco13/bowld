<?php

class LoginModel extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function validateLogin($user, $password)
    {
        $this->db->connect();
        $query = "SELECT e.id, e.user_id , e.user_name, e.password, e.rol, e.gender, u.name, u.last_name 
        FROM users as u inner join employees as e on u.id = e.user_id where e.user_name = '$user'";
        $result = $this->db->getConnection()->query($query)->fetch_assoc();
        $this->db->closeConnec();
        if (count($result) > 0) {
            if (strcmp($result['password'], $password) == 0) {
                $_SESSION['name'] = $result['name']." ".$result ['last_name'];
                $_SESSION['id'] = $result['id'];
                $_SESSION['user'] = $result['user_name'];
                $_SESSION['rol'] = $result['rol'];
                $_SESSION['genero'] = $result['gender'];
                return true;
            }
        }
        return false;
    }

    function validateUser($id)
    {
        include 'models/usersModel.php';
        $user = new UsersModel();
        return $user->getUserForUsername($id);
    }

    function updateLogin($id)
    {
        $time = date('Y-m-d H:i:s');
        $query = "UPDATE `employees` SET `last_connec`='$time' WHERE id = '$id';";
        $this->db->connect();
        $this->db->getConnection()->query($query);
        $this->db->closeConnec();
        return true;
    }

    //INSERT INTO `users`(`id`, `user_name`, `password`, `date_created`, `last_con`, `name`) VALUES ('642a113027449', 'admin','admin','2023-04-02 18:00:00','2023-04-02 18:00:00','Administrator');
}
