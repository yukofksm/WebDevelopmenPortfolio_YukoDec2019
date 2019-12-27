<?php
    require_once 'class/user.php';
    $user = new User();

    $id = $_GET['id'];
    $result = $user->messageDetail($id);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message Detail</title>
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
                <a href="message.php" class="nav-link text-white pb-0 px-3"><p>    Message</p></a>
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
    <div class="container w-50 mx-auto mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="display-4 ml-3">Message Detail</h3>
            </div>
            <div class="card-body">
                <p><i class="fas fa-key"></i>  # <?php echo $result['contact_id']?></p><br>
                <p><i class="fas fa-user"></i>Name:  <?php echo $result['name']?></p><br>
                <p><i class="fas fa-fish"></i>Subject:  <?php echo $result['subject']?></p><br>
                <p><i class="fas fa-phone-alt"></i>Message:<?php echo $result['message']?></p><br>
                <p><i class="fas fa-envelope"></i>Email: <?php echo $result['email']?></p><br>
                
            
                <?php
                    // echo "<a href='editRooms.php?id=$id><i class='fas fa-wrench'></i>  EDIT</a>";
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>