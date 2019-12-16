<?php
    require_once 'database.php';
    session_start();

    class Book extends Database{

        public function checkDate($checkIn,$checkOut){
            // $sql = "SELECT * FROM `book` WHERE checkin != '$checkIn' AND checkout != '$checkOut'";



            $result = $this->conn->query($sql);

            // echo $result;
            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function checkCapacity($adult,$kids){

            $sql = "SELECT * FROM `room` WHERE cap_adult >= '$adult' AND cap_kids >= '$kids'";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0){
                $this->checkDate($checkIn,$checkOut);
            }else{
                echo "ROOM IS NOT AVAILABLE";
            }
        }

        public function chooseRoomType($roomType){
            $sql = "SELECT * FROM room WHERE room_type='$roomType'";
            
            $result = $this->conn->query($sql);
            // print_r($result->fetch_assoc());
            if($result->num_rows > 0){
                $this->checkCapacity($adult,$kids);
            }else{
                echo "ROOM IS NOT AVAILABLE";
            }
        }
    }

?>