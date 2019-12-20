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

        

        $room->editRoom($newNumber,$newType,$newView,$newPrice,$newAdultCap,$newKidsCap,$picture,$newStatus,$roomID);


    }elseif ($_GET['actiontype']=='delete_room') {
        $id = $_GET['room_id'];

        $room->deleteRoom($id);

    //bookRoom.phpからFinal Confirmationへいくやつ
    }elseif(isset($_POST['book'])){
        $id = $_POST['id'] = $_SESSION['final_id'];
        $type = $_POST['type'] = $_SESSION['final_type'];
        $view = $_POST['view'] = $_SESSION['final_view'];
        $price = $_POST['price'] = $_SESSION['final_price'];
        $adult = $_POST['adult'] = $_SESSION['final_adult'];
        $kids = $_POST['kids'] = $_SESSION['final_kids'];

        $room->finalDisplay($id,$type,$view,$price,$adult,$kids);

    //checkからavailableRoomにいくやつ    
    }elseif(isset($_POST['check'])){
        
        $roomType = $_POST['roomType'];
        
        $checkIn = date_create($_POST['checkIn']);
        $checkIn = date_format($checkIn, 'Y-m-d');
        $checkOut = date_create($_POST['checkOut']);
        $checkOut = date_format($checkOut, 'Y-m-d');
        
        $room->checkDate($checkIn,$checkOut,$roomType);
        // $display = $room->displayAvailableRoom($result);

        if($room->checkDate($checkIn,$checkOut,$roomType)){
            header('Location: ../availableRoom.php');
        }

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