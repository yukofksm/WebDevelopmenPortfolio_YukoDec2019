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

    //bookRoom.phpからFinal Confirmationへいくやつ
    }elseif(isset($_POST['book'])){ 
        
        $id = $_POST['id'];
        $_SESSION['final_adult']= $_POST['adult'];
        $_SESSION['final_kids']= $_POST['kids'];

        
        if($_SESSION['login'] == "logined"){
            header("Location: ../bookRoom2.php?id=$id");
        }else {
            echo "NG";
        }
    }elseif(isset($_POST['book2'])){



    //checkからavailableRoomにいくやつ    
    }elseif(isset($_POST['check'])){
        
        $id = $_POST['id'];
        
        $checkIn = date_create($_POST['checkIn']);
        $checkIn = date_format($checkIn, 'Y-m-d');
        $checkOut = date_create($_POST['checkOut']);
        $checkOut = date_format($checkOut, 'Y-m-d');

        $checkIn = $_SESSION['checkin'];
        $checkIn = $_SESSION['checkout'];
        
        $room->checkDate($checkIn,$checkOut,$id);
        // $display = $room->displayAvailableRoom($result);

        // if($room->checkDate($checkIn,$checkOut,$roomType)){
        // }

    //image upload
    }elseif(isset($_POST['upload'])) {
        $img_name = $_FILES['picture']['name'];
        //['picture'] = name of the element inside the form
        //['name'] = any name automatically created by the computer; refers to attribute df the element

        $target_dir = "img/"; //the directory/folder where you will place the files
        $target_file = $target_dir.basename($_FILES['picture']['name']);

        $room->imageUpload($img_name,$target_dir,$target_file);

        
    }
    

?>