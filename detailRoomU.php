<?php
    require_once 'class/room.php';
    $room = new Room();

    $id = $_GET['id'];
    $result = $room->roomDetail($id);
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
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
            <!-- <li class="nav-item"> -->
                <!-- <a href="addRoom.php" class="nav-link text-white pb-0 px-3"><p>    Add Room</p></a> -->
            <!-- </li> -->
            <!-- <li class="nav-item"> -->
                <!-- <a href="allUsers.php" class="nav-link text-white pb-0 px-3"><p>    All Users</p></a> -->
            <!-- </li>
            <li class="nav-item"> -->
                <!-- <a href="register/register.php" class="nav-link text-white pb-0 px-3"><p>    Add User</p></a> -->
            <!-- </li>
            <li class="nav-item"> -->
                <!-- <a href="allReservation.php" class="nav-link text-white pb-0 px-3"><p>    All Reservation</p></a> -->
            <!-- </li> -->
            <li class="nav-item">
                <a href="blog.php" class="nav-link text-white pb-0 px-3"><p>    Blog</p></a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link text-white pb-0 px-3"><p>    About</p></a>
            </li>
        </ul>
        <!-- <ul  class="nav navbar-nav float-right">
            <li>
                <?php
                    // $loginid = $_SESSION['userid'];
                    // echo "<h6><i class='fas fa-user'></i><a href='menuAdmin.php?id=".$loginid."' class='nav-link text-white d-inline pb-0'>Welcome! ".$_SESSION['fname']."</a></h6>";
                ?>
            </li>
            <li>
                <h6><i class="fas fa-user-times"></i><a href="logout.php" class="nav-link text-white d-inline pb-0">Logout</a></h6>
            </li>
        </ul> -->
    </nav>

    
    <div class="container w-75 mx-auto mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="display-4 ml-3">Room Detail</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <img src="img/rooms/<?php 
                        echo $result['room_img']?>" alt="" style="width: 100%; height: 420px;">
                        
                    </div>
                    <div class="col-md-4">
                        <p><i class="fas fa-key"></i>  # <?php echo $result['room_num']?></p><br>
                        <p><i class="fas fa-hotel"></i>  <?php echo $result['room_type']?> room</p><br>
                        <p><i class="far fa-eye"></i>  <?php echo $result['room_view']?></p><br>
                        <p><i class="fas fa-hand-holding-usd"></i>$<?php echo $result['room_price']?>-</p><br>
                        <p><i class="fas fa-users"></i>  Capacity(Adult):    <?php echo $result['cap_adult']?></p><br>
                        <p><i class="fas fa-child"></i>  Capacity(Children):   <?php echo $result['cap_kids']?></p><br>
                        <?php
                            echo "<a href='bookRoom.php?id=$id'><i class='fas fa-wrench'></i>  BOOK NOW</a>";
                        ?>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    
</body>
</html>