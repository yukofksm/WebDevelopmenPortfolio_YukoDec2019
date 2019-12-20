<?
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Details</title>
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
    <div class="container w-75 mt-5">
    <h3 class="display-3 text-center">Enter Your Details</h3>
        <form action="action/userAction.php" method="post">
            <div class="form-group mx-auto p-4 w-50">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label> First Name<span style="color: red;"> *</span></label>
                    <input type="text" name="fname" class="form-control m-3" placeholder="  Your  First Name" style="border-top: none; border-right: none; border-left: none;" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label>last Name<span style="color: red;"> *</span></label>
                    <input type="text" name="lname" class="form-control m-3" placeholder="  Your  Last Name" style="border-top: none; border-right: none; border-left: none;"required>
                    </div>
                </div>
                <label>Contact Number<span style="color: red;"> *</span></label>
                <input type="text" name="number" class="form-control m-3" placeholder="  Contact Number" style="border-top: none; border-right: none; border-left: none;"required>
                <label>Email<span style="color: red;"> *</span></label>
                <input type="email" name="email" class="form-control m-3" placeholder="  Your Email" style="border-top: none; border-right: none; border-left: none;"required>
                <div class="row">
                    <div class="form-group col-md-8">
                    <label>Password<span style="color: red;"> *</span></label>
                    <input type="password" name="pword" class="form-control m-3" placeholder="  Password" style="border-top: none; border-right: none; border-left: none;"required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for=""></label>
                    <input type="submit" name="save" value="SAVE" class="btn btn-dark btn-lg text-white form-control m-3 my-4 rounded-pill">
                    </div>
                </div>
            </div>          
        </form>
    </div>
    
</body>
</html>