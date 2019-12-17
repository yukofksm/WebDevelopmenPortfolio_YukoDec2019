<?php
    require_once 'database.php';
    session_start();

    class Book extends Database{

        public function checkDate($checkIn,$checkOut,$roomType,$adult,$kids){
            $sql = "SELECT * FROM book INNER JOIN room ON room.room_id = book.room_id WHERE book.checkin >= '$checkIn' AND book.checkout <= '$checkOut' AND room.room_type = '$roomType' AND room.cap_adult >= '$adult' AND room.cap_kids >= '$kids'";

            $result = $this->conn->query($sql);
            // $rows = array();

            // print_r($result->fetch_assoc());

            // while($row = $result->fetch_assoc()){
            //     $rows[] = $row;
            // }
            return $result->fetch_assoc();
        }

        // public function checkCapacity($adult,$kids,$checkIn,$checkOut,$roomType){
        //     $sql = "SELECT * FROM `room` WHERE cap_adult >= '$adult' AND cap_kids >= '$kids'";

        //     $result = $this->conn->query($sql);

        //     if($result->num_rows > 0){
        //         $this->checkDate($checkIn,$checkOut,$roomType);
        //     }else{
        //         echo "ROOM IS NOT AVAILABLE capa";
        //     }
        // }

        // public function chooseRoomType($roomType,$adult,$kids,$checkIn,$checkOut){
        //     $sql = "SELECT * FROM room WHERE room_type ='$roomType'";

        //     $result = $this->conn->query($sql);
        //     // print_r($result->fetch_assoc());
        //     if($result->num_rows > 0){
        //         $this->checkCapacity($roomType,$adult,$kids,$checkIn,$checkOut);
        //     }else{
        //         echo "ROOM IS NOT AVAILABLE type";
        //     }
        // }
    }

?>