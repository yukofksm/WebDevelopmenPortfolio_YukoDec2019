<?php
    require_once 'database.php';
    session_start();

    class Room extends Database{

        //ROOMの追加
        public function addRoom($number,$type,$view,$price,$cap_adult,$cap_kids,$img_name){
            $target_dir = "img/rooms"; 
            $target_file = $target_dir.basename($_FILES['picture']['name']);

            $add = "INSERT INTO `room`(room_num,room_type,room_view,room_price,cap_adult,cap_kids,room_img) VALUES('$number','$type','$view','$price','$cap_adult','$cap_kids','$img_name')";
            if($this->conn->query($add)){
                // echo "OK";
                header("Location: ../allRooms.php");
            }else{
                echo "ERROR".$this->conn->error;
            }
        }

        //ALL ROOMを表示
        public function getRooms(){
            $sql = "SELECT * FROM room";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        //Room Detail
        public function roomDetail($id){
            $sql = "SELECT * FROM room WHERE room_id = '$id'";
            $result = $this->conn->query($sql);

            if($result == false){
                die("No record ".$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }
        }


        //EDIT ROOMで表示する用
        public function getSpecRoom($id){
            $sql = "SELECT * FROM room WHERE room_id = '$id'";
            $result = $this->conn->query($sql);

            if($result == false){
                die("No record ".$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }
        }

        //UPDATE ROOM
        public function editRoom($newNumber,$newType,$newView,$newPrice,$newAdultCap,$newKidsCap,$newStatus,$roomID){
            $sql = "UPDATE room SET room_num='$newNumber', room_type='$newType',room_view='$newView',room_price='$newPrice',cap_adult='$newAdultCap',cap_kids='$newKidsCap',room_status='$newStatus'WHERE room_id='$roomID'";

            $result = $this->conn->query($sql);

            if($result==false){
                die("Cannot Update:".$this->conn->error);
            }else{
                header("Location: ../allRooms.php");
            }
        }

        //DELETE ROOM
        public function deleteRoom($id){
            $sql = "DELETE FROM room WHERE room_id = '$id'";
            $result = $this->conn->query($sql);

            if($result){
                header("Location: ../allRooms.php");
            }else{
                echo "ERROR IN DELETING:" .$this->conn->error;
            }
        }

        //Final Confimationで表示するやつ
        public function finalDisplay($id,$type,$view,$price,$adult,$kids){
            $sql = "SELECT * FROM room WHERE room_id = '$roomid'";
            $result = $this->conn->query($sql);

            if($result == false){
                die("No record ".$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }
        }

        //IMAGE upload
        public function imageUpload($img_name,$target_dir,$target_file){

            $sql = "UPDATE room SET room_img = '$img_name' WHERE room_id = $roomid";
            if($conn->query($sql)){
                echo "IMAGE HAS BEEN UPLOADED!";

                move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
                //move_upload_file($filename,$destination)

                header("..allRooms.php");
            }else{
                echo "ERROR IN UPLOADING".$conn->error;
            }
        }

        public function checkDate($checkIn,$checkOut,$roomType){
           
            $sql = "SELECT * FROM `book` INNER JOIN `room` ON book.room_id = room.room_id WHERE book.checkin <= '$checkOut' AND book.checkout >= '$checkIn' AND room.room_type = '$roomType'"; 

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                echo "NG";
            }else{
                // echo "OK";
                $this->displayAvailableRoom($checkIn, $checkOut, $roomType);
                // $check = "SELECT * FROM room";

                // $result = $this->conn->query($check);

                // // print_r($result->fetch_assoc());
                // $rows = array();

                // while ($row = $result->fetch_assoc()) {
                //     $rows[] = $row;
                // }
                // return $rows;
            }
            
        }

        public function displayAvailableRoom($checkIn, $checkOut, $roomType){

            // $sql = "SELECT * FROM `book` INNER JOIN `room` ON book.room_id = room.room_id WHERE NOT book.checkin <= '$checkOut' AND book.checkout >= '$checkIn' AND room.room_type = '$roomType'"; 

            $sql = "SELECT * FROM room";

            $result = $this->conn->query($sql);
            $rows = array();

            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;

        }


    }

?>