<?php

class IframeModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function getDayReservation($fecha){
        // Disponible => 1 || No disponible => 0
        $hours = [
            "14" => ["avalible"=>"1","time"=>"14"],
            "15" => ["avalible"=>"1","time"=>"15"],
            "16" => ["avalible"=>"1","time"=>"16"],
            "17" => ["avalible"=>"1","time"=>"17"],
            "18" => ["avalible"=>"1","time"=>"18"],
            "19" => ["avalible"=>"1","time"=>"19"],
            "20" => ["avalible"=>"1","time"=>"20"],
            "21" => ["avalible"=>"1","time"=>"21"],
            "22" => ["avalible"=>"1","time"=>"22"]
            ];

        $disp = $this->getBowldFree();
        $this->db->connect();
        $query = "SELECT COUNT(date_booking) as 'count', HOUR(date_booking) as 'hour' FROM bookings WHERE date_booking like '%$fecha%' GROUP BY date_booking;";
        $result = $this->db->getConnection()->query($query);
        while ($row = $result->fetch_assoc()) {
            if ($row['count'] == $disp){
                $hours[$row['hour']] = "0";
            }            
        }
        return json_encode($hours);
    }

    function getBowldFree(){
        $this->db->connect();
        $result = $this->db->getConnection()->query("SELECT COUNT(*) as 'count' FROM bowling_line WHERE status = 0;");
        $row = $result->fetch_assoc();
        return $row['count'];
    }

    // function sendReservation($data){
    //     $this->db->connect();
    //     if (!$this->validateUser($data['phone'])){uniqid()

    //     }
    // }

    // function validateUser($user){
    //     $result = $this->db->getConnection()->query("SELECT COUNT(*) as 'count' FROM users WHERE user_id = $user;");
    //     if ($result->fetch_assoc()['count'] > 0) {
    //         return true;
    //     }
    //     return false;
    // }

    // function

    

}