<?php
    require_once '../class/room.php';
    $room = new Room();

    session_start();

    //ADD ROOM
    if(isset($_POST['add'])){
        $number = $_POST['number'];
        $type = $_POST['type'];
        $view = $_POST['view'];
        $price = $_POST['price'];
        $cap_adult = $_POST['cap_adult'];
        $cap_kids = $_POST['cap_kids'];

        $img_name = $_FILES['picture']['name'];
        
        $room->addRoom($number,$type,$view,$price,$cap_adult,$cap_kids,$img_name);

    //EDIT ROOM
    }elseif(isset($_POST['edit'])){
        $newNumber = $_POST['newNumber'];
        $newType = $_POST['newType'];
        $newView = $_POST['newView'];
        $newPrice= $_POST['newPrice'];
        $newAdultCap= $_POST['newAdultCap'];
        $newKidsCap= $_POST['newKidsCap'];
        $newStatus = $_POST['newStatus'];
        $roomID= $_POST['id'];
        
        $picture= $_POST['oldPicture'];
        $img_name = $_FILES['picture']['name'];

        if(empty($img_name)){
            $room->editRoom1($newNumber,$newType,$newView,$newPrice,$newAdultCap,$newKidsCap,$picture,$newStatus,$roomID);
        }else{
            $room->editRoom2($newNumber,$newType,$newView,$newPrice,$newAdultCap,$newKidsCap,$img_name,$newStatus,$roomID);
        }

    }elseif ($_GET['actiontype']=='delete_room') {
        $id = $_GET['room_id'];

        $room->deleteRoom($id);

    //Date 空いてるか確認するやつ    
    }elseif(isset($_POST['check'])){
        
        $id = $_POST['id'];
        
        $checkIn = date_create($_POST['checkIn']);
        $checkIn = date_format($checkIn, 'Y-m-d');
        $checkOut = date_create($_POST['checkOut']);
        $checkOut = date_format($checkOut, 'Y-m-d');

        $dayCount = ((strtotime($checkOut) - strtotime($checkIn)) / 86400);

        $_SESSION['checkin'] = $checkIn;
        $_SESSION['checkout'] = $checkOut;
        
        $room->checkDate($checkIn,$checkOut,$id,$day);
        // $display = $room->displayAvailableRoom($result);

        // if($room->checkDate($checkIn,$checkOut,$roomType)){
        // }

     //bookRoom.phpからFinal Confirmationへいくやつ
    }elseif(isset($_POST['book'])){ 
        
        $id = $_POST['id'];
        $_SESSION['final_adult']= $_POST['adult'];
        $_SESSION['final_kids']= $_POST['kids'];

        
        if($_SESSION['login'] == "logined"){
            header("Location: ../finalComfimation.php?id=$id");
        }else {
            echo "NG";
        }

    }elseif(isset($_POST['finalBook'])){
        
        $checkIn = $_POST['checkin'];
        $checkOut = $_POST['checkout'];
        $adult = $_POST['final_adult'];
        $kids = $_POST['final_kids'];
        $roomID = $_POST['id'];
        $userID = $_POST['userID'];
        $fname = $_POST['fname'];

        $room->finalBook($checkIn,$checkOut,$adult,$kids,$roomID,$userID,$fname);
    }
    

?>