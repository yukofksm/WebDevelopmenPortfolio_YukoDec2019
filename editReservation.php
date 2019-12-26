<?php
    require_once 'class/room.php';
    $room = new Room();
    
    $bookid = $_GET['bookid'];
    $sql = $room->getSpecReservation($bookid);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT RESERVATION</title>
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
    <h3 class="display-3 text-center">Edit Reserva</h3>
    <form action="action/roomAction.php" method="post"enctype="multipart/form-data">
        <div class="form-group mx-auto p-4 w-50">

            <div class="row">
                <div class="col-md-5">
                    <label>Room Number<span style="color: red;"> *</span></label>
                    <input type="number" name="newNumber" value="<?php echo $getSpecRoom['room_num']?>" placeholder="  <?php echo $getSpecRoom['room_num']?>" class="form-control m-3" style="border-top: none; border-right: none; border-left: none;"required>
                </div>

                <div class="col-md-7">
                    <label>Room Type<span style="color: red;"> *</span></label>
                    <select name="newType" class="form-control m-3" required>
                    <option value="<?php echo $getSpecRoom['room_type']?>">
                    <?php echo $getSpecRoom['room_type']?> Room</option>
                    <option value="Superior">Superior Room</option>
                    <option value="Deluxe">Deluxe Room</option>
                    <option value="Signature">Signature Room</option>
                    <option value="Couple">Couple Room</option>
                    </select>
                </div>
            </div>
            <label>Room View<span style="color: red;"> *</span></label>
            <select name="newView" id="" class="form-control m-3" required>
                <option value="<?php echo $getSpecRoom['room_view']?>">
                <?php echo $getSpecRoom['room_view']?> Room</option>
                <option value="Sea view">Sea View</option>
                <option value="City view">City View</option>
                <option value="Pool view">Pool View</option>
            </select>
                
            <label>Room Price<span style="color: red;"> *</span></label>
            <input type="number" name="newPrice" value="<?php echo $getSpecRoom['room_price']?>" class="form-control m-3" placeholder="  <?php echo $getSpecRoom['room_price']?>" style="border-top: none; border-right: none; border-left: none;"required>
                
            <div class="row">
                <div class="col-md-6">
                    <label>Room Adult Capacity<span style="color: red;"> *</span></label>
                    <input type="number" name="newAdultCap" value="<?php echo $getSpecRoom['cap_adult']?>" class="form-control m-3" placeholder="  <?php echo $getSpecRoom['cap_adult']?>" style="border-top: none; border-right: none; border-left: none;"required>
                </div>
                <div class="col-md-6">
                    <label>Room Children Capacity<span style="color: red;"> *</span></label>
                    <input type="number" name="newKidsCap" value="<?php echo $getSpecRoom['cap_kids']?>" class="form-control m-3" placeholder="  <?php echo $getSpecRoom['cap_kids']?>" style="border-top: none; border-right: none; border-left: none;"required>
                </div>
            </div>
            <label for="">Room Image</label>
            <input type="file" name="picture" id="files" >
            <input type="hidden" name="oldPicture" value="<?php echo $getSpecRoom['room_img']?>" id="files" >
            


            <!-- <input type="password" name="pword" class="form-control m-3" placeholder="  " style="border-top: none; border-right: none; border-left: none;"> -->


            <input type="hidden" name="id" value="<?php echo $getSpecRoom['room_id']?>"><br>

            <div class="row">
                <div class="col-md-6">
                    <label>Room Status<span style="color: red;"> *</span></label>
                    <select name="newStatus" class="form-control m-3" required>
                    <option value="<?php echo $getSpecRoom['room_status']?>">
                    <option value="available">Available</option>
                    <option value="reserved">Reserved</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <input id="submitnow" type="submit" name="edit" value="EDIT ROOM" class="btn btn-dark btn-lg text-white form-control m-3 my-4 rounded-pill">
                </div>
            </div>   
        </div>           
    </form>
</div>
</body>
</html>


