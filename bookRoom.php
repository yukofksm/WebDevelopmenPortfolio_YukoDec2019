<?php
    require_once 'class/room.php';
    $room = new Room();
    
    $id = $_GET['id'];
    $getSpecRoom = $room->getSpecRoom($id);

    session_start();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Date</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-white bg-secondary text-white">
        <ul class="nav navbar-nav mr-auto pb-0 mb-0">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-white pb-0 px-3"><p>HOME</p></a>
            </li>
            <li class="nav-item">
                <a href="allRoomsU.php" class="nav-link text-white pb-0 px-3"><p>    All Rooms</p></a>
            </li>
            
            <li class="nav-item">
                <a href="allReservation.php" class="nav-link text-white pb-0 px-3"><p>    Your Reservation</p></a>
            </li>
            <li class="nav-item">
                <a href="blog.php" class="nav-link text-white pb-0 px-3"><p>    Blog</p></a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link text-white pb-0 px-3"><p>    About</p></a>
            </li>
        </ul>
        <ul  class="nav navbar-nav float-right">
            <li>
                <?php
                    $loginid = $_SESSION['userid'];
                    echo "<h6><i class='fas fa-user'></i><a href='menuAdmin.php?id=".$loginid."' class='nav-link text-white d-inline pb-0'>Welcome! ".$_SESSION['fname']."</a></h6>";
                ?>
            </li>
            <li>
                <h6><i class="fas fa-user-times"></i><a href="logout.php" class="nav-link text-white d-inline pb-0">Logout</a></h6>
            </li>
        </ul>
    </nav>

<div class="container w-75 mt-5">
    <h3 class="display-3 text-center">Book Room</h3>
    <form action="action/roomAction.php" method="post">
        <div class="form-group mx-auto p-4 w-50">

            
            <label>Room Type:</label>
            <h4><?php echo $getSpecRoom['room_type']?> Room</h4>
        
            <label>Room View:</label>
            <h4><?php echo $getSpecRoom['room_view']?> Room</h4>
               
            <label>Room Price: </label>
            <h4>$ <?php echo $getSpecRoom['room_price']?>-</h4>
            <input type="hidden" name="room_price" value="<?php echo $getSpecRoom['room_price']?>">

            <div class="row">
                <div class="col-md-6">
                    <label for="">Check In Date</label>
                    <input type="date" id="datepicker" name="checkIn" placeholder="Check in date" class="form-select wide form-control" >
                </div>
                <div class="col-md-6">
                    <label for="">Check Out Date</label>
                    <input type="date" id="datepicker2" name="checkOut" placeholder="Check out date" class="form-select wide form-control">
                </div>
            </div>
                 

            <input type="hidden" name="id" value="<?php echo $getSpecRoom['room_id']?>">

            <div class="row">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <input type="submit" name="check" value="Check Date" class="btn btn-dark btn-lg text-white form-control m-3 my-4 rounded-pill">
                </div>
            </div>   
        </div>           
    </form>
</div>
</body>
<script>
        $('#datepicker').datepicker({
            dateFormat: "yy/mm/dd",
            changeMonht: true,
            changeYear: true,
            minDate: "dateToday",

            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            dateFormat: "yy/mm/dd",
            changeMonht: true,
            changeYear: true,
            minDate: "dateToday",

            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>
</html>
