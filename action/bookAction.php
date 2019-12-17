<?php
    require_once '../class/book.php';
    $book = new Book();

    if(isset($_POST['check'])){
        // $checkIn = $_POST['checkIn'];
        // $checkOut = $_POST['checkOut'];
        $adult = $_POST['adult'];
        $kids = $_POST['kids'];
        $roomType = $_POST['roomType'];

        $checkIn = date_create($_POST['checkIn']);
        $checkIn = date_format($checkIn, 'Y-m-d');
        $checkOut = date_create($_POST['checkOut']);
        $checkOut = date_format($checkOut, 'Y-m-d');

        // echo $checkIn,$checkOut,$adult,$kids,$roomType;
        // $book->checkBookAvailability($checkIn,$checkOut,$adult,$kids,$roomType);
        $result = $book->checkDate($checkIn,$checkOut,$roomType,$adult,$kids);
        // $result = $book->checkDate($checkIn, $checkOut, $roomType);

        // print_r($result);

        if($result){
            header("Location: ../availableRoom.php");
        }else{
            echo "noooo";
        }
    }

?>