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
                
            <div class="row">
                <div class="col-md-6">
                <label>Check In Date: </label>
                <h4><?php echo $_SESSION['checkin']?></h4>
                </div>
                <div class="col-md-6">
                <label>Check Out Date: </label>
                <h4><?php echo $_SESSION['checkout']?></h4>
                </div>
            </div>
            <label>Room Price: </label>
            <h4>$ <?php echo $_SESSION['total']?></h4>

            <div class="row">   
                <div class="col-xl-6">
                    <label for="">Adult</label>
                    <select class="form-select wide form-control" id="default-select" name="adult">
                        <option data-display="Adult"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="col-xl-6">
                    <label for="">Children</label>
                    <select class="form-select wide form-control" id="default-select" name="kids">
                        <option data-display="Children"></option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
            </div> 

            

            <div class="row">
                <div class="col-md-6">      
                    <input type="hidden" name="id" value="<?php echo $getSpecRoom['room_id']?>">
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <input type="submit" name="book" value="Book" class="btn btn-dark btn-lg text-white form-control m-3 my-4 rounded-pill">
                </div>
            </div>   
        </div>           
    </form>
</div>
</body>

</html>
