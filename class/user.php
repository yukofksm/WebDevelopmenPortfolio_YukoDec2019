<?php
    require_once 'database.php';
    session_start();

    class User extends Database{

        //USER登録
        public function userDatail($fname,$lname,$number,$email,$gender,$pword){
            $add = "INSERT INTO `user`(firstname,lastname,number,email,gender,password) VALUES('$fname','$lname','$number','$email','$gender','$pword')";
            if($this->conn->query($add)){
                // echo "OK";
                header("Location: ../login/login2.php");
            }else{
                echo "ERROR".$this->conn->error;
            }
        }

        //LOGIN
        public function login($email,$pword){
            $sql = "SELECT * FROM `user` WHERE email='$email' AND password='$pword'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                $_SESSION['userid'] = $row['user_id'];
                $_SESSION['fname'] = $row['firstname'];
                $_SESSION['lname'] = $row['lastname']; 
                $_SESSION['number'] = $row['number']; 
                $_SESSION['email'] = $row['email']; 
                $_SESSION['gender'] = $row['gender']; 

                $_SESSION['login'] = "logined";

                return $row['status'];
            }else{
                return false;
            }
        }

        //ALL USER 表示
        public function getUsers(){
            $sql = "SELECT * FROM user";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        //EDIT USERで表示するやつ
        public function getSpecUser($userid){
            $sql = "SELECT * FROM user WHERE user_id = '$userid'";
            $result = $this->conn->query($sql);

            if($result == false){
                die("No record ".$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }
        }

        //UPDATE USER 未
        public function editUser($newFname,$newLname,$newNumber,$newEmail,$userID){
            $sql = "UPDATE user SET firstname='$newFname', lastname='$newLname',number='$newNumber',email='$newEmail' WHERE user_id='$userID'";

            $result = $this->conn->query($sql);

            if($result==false){
                die("Cannot Update:".$this->conn->error);
            }else{
                header("Location: ../allUsers.php");
            }
        }

        //DELETE user 未
        public function deleteUser($id){
            $sql = "DELETE FROM user WHERE user_id = '$id'";
            $result = $this->conn->query($sql);

            if($result){
                header("Location: ../allUsers.php");
            }else{
                echo "ERROR IN DELETING:" .$this->conn->error;
            }
        }

        //USER DETAIL
        public function userDetail($id){
            $sql = "SELECT * FROM user WHERE user_id = '$id'";
            $result = $this->conn->query($sql);

            if($result == false){
                die("No record ".$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }
        }

        public function contact($message,$name,$email,$subject){

            $add = "INSERT INTO `contact`(message,name,email,subject) VALUES('$message','$name','$email','$subject')";
            if($this->conn->query($add)){
                echo "OK";
                // header("Location: ../login/login2.php");
            }else{
                echo "ERROR".$this->conn->error;
            }
        }

        public function getMessage(){
            $sql = "SELECT * FROM contact";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function messageDetail($id){
            $sql = "SELECT * FROM contact WHERE contact_id = '$id'";
            $result = $this->conn->query($sql);

            if($result == false){
                die("No record ".$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }
        }



        
    }
?>