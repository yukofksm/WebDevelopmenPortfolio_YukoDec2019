<?php
    require_once 'class/room.php';
    $room = new Room();
    $result = $room->getReservation();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL RESERVASION</title>
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
                <a href="allRooms.php" class="nav-link text-white pb-0 px-3"><p>    All Rooms</p></a>
            </li>
            <li class="nav-item">
                <a href="addRoom.php" class="nav-link text-white pb-0 px-3"><p>    Add Room</p></a>
            </li>
            <li class="nav-item">
                <a href="allUsers.php" class="nav-link text-white pb-0 px-3"><p>    All Users</p></a>
            </li>
            <li class="nav-item">
                <a href="register/register.php" class="nav-link text-white pb-0 px-3"><p>    Add User</p></a>
            </li>
            <li class="nav-item">
                <a href="allReservation.php" class="nav-link text-white pb-0 px-3"><p>    All Reservation</p></a>
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


    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="display-4">All Reservasion</h3>
                <!-- <p  class="btn text-dark"><a href="addRoom.php">add room</a></p>  -->
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Guest Name</th>
                        <th>Room Number</th>
                        <th>Room Type</th>
                        <th>Adult</th>
                        <th>Children</th>
                        <th>Price</th>
                        <th></th>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($result as $row) {
                            $roomid = $row['room_id'];
                            $userid = $row['user_id'];
                            $bookid = $row['book_id'];
                            echo "
                            <tr>
                                <td>".$row['checkin']."</td>
                                <td>".$row['checkout']."</td>
                                <td><a href='detailUser.php?id=$userid'><i class='fas fa-user'></i></a> ".$row['firstname']." ".$row['lastname']."</td>
                                <td class='text-center'>".$row['room_num']."   <a href='detailRoom.php?id=$roomid'><i class='fas fa-door-open'></i></a></td>
                                <td>".$row['room_type']." Room</td>
                                <td>".$row['adult']."</td>
                                <td>".$row['kids']."</td>
                                <td>$".$row['room_price']."</td>
                                <td><td><a href='editBook.php?id=$bookid' class='btn btn-info btn-sm'>EDIT</a></td></td>
                                
                            </tr>";
                        }
                    ?>
                    <!-- <td><a href='editRooms.php?id=$id' class='btn btn-info btn-sm'>EDIT</a></td>
                    <td><a href='action/roomAction.php?actiontype=delete_room&room_id=$id' class='btn btn-danger btn-sm'>DELETE</a></td> -->
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>