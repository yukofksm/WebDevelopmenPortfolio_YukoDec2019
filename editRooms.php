<?php
    require_once 'class/room.php';
    $room = new Room();
    
    $roomid = $_GET['id'];
    $getSpecRoom = $room->getSpecRoom($roomid);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT ROOM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container w-75 mt-5">
    <h3 class="display-3 text-center">Edit Room</h3>
    <form action="action/roomAction.php" method="post">
        <div class="form-group mx-auto p-4 w-50">

            <div class="row">
                <div class="col-md-5">
                    <label>Room Number<span style="color: red;"> *</span></label>
                    <input type="number" name="newNumber" value="<?php echo $getSpecRoom['room_num']?>" placeholder="  <?php echo $getSpecRoom['room_num']?>" class="form-control m-3" style="border-top: none; border-right: none; border-left: none;"required>
                </div>

                <div class="col-md-7">
                    <label>Room Type<span style="color: red;"> *</span></label>
                    <select name="newType" class="form-control m-3" required>
                    <option value="<?php echo $getSpecRoom['room_type']?>" selected disabled>
                    
                    <?php echo $getSpecRoom['room_type']?> Room</option>
                    <option value="superior">Superior Room</option>
                    <option value="deluxe">Deluxe Room</option>
                    <option value="sign">Signature Room</option>
                    <option value="couple">Couple Room</option>
                    </select>
                </div>

            </div>
                
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
                                
            <!-- <label>Picture Update</label>
            <input type="password" name="pword" class="form-control m-3" placeholder="  " style="border-top: none; border-right: none; border-left: none;"> -->
            <input type="hidden" name="id" value="<?php echo $getSpecRoom['room_id']?>"><br>

            <div class="row">
                <div class="col-md-6">
                    <label>Room Status<span style="color: red;"> *</span></label>
                    <select name="newStatus" class="form-control m-3" required>
                    <option value="<?php echo $getSpecRoom['room_status']?>" selected disabled>
                    <option value="available">Available</option>
                    <option value="reserved">Reserved</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <input type="submit" name="edit" value="EDIT ROOM" class="btn btn-dark btn-lg text-white form-control m-3 my-4 rounded-pill">
                </div>
            </div>   
        </div>           
    </form>
</div>
</body>
</html>
