<?php
    require_once 'class/room.php';
    $room = new Room();
    
    $roomid = $_GET['id'];
    $getSpecRoom = $room->getSpecRoom($roomid);
    session_start();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOK ROOM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container w-75 mt-5">
    <h3 class="display-3 text-center">Book Room</h3>
    <form action="action/roomAction.php" method="post">
        <div class="form-group mx-auto p-4 w-50">

            <div class="row">
                <div class="col-md-6">
                    <label>Room Type</label>
                    <h4><?php echo $getSpecRoom['room_type']?></h4>
                </div>

                <div class="col-md-6">
                    <label>Room View</label>
                    <h4><?php echo $getSpecRoom['room_view']?></h4>
                </div>

            </div>
                
            <label>Room Price</label>
            <h4>$ <?php echo $getSpecRoom['room_price']?></h4>
                
            <div class="row">   
                <div class="col-xl-6">
                    <select class="form-select wide" id="default-select" name="adult" class="">
                        <option data-display="Adult"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="col-xl-6">
                    <select class="form-select wide" id="default-select" name="kids"
                    class="">
                        <option data-display="Children"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div> 
                                
            <!-- <label>Picture Update</label>
            <input type="password" name="pword" class="form-control m-3" placeholder="  " style="border-top: none; border-right: none; border-left: none;"> -->
            <input type="hidden" name="id" value="<?php echo $getSpecRoom['room_id']?>"><br>
            <input type="hidden" name="type" value="<?php echo $getSpecRoom['room_type']?>"><br>
            <input type="hidden" name="view" value="<?php echo $getSpecRoom['room_view']?>"><br>
            <input type="hidden" name="price" value="<?php echo $getSpecRoom['room_price']?>"><br>

            <div class="row">
                <div class="col-md-6">
                    
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <input type="submit" name="book" value="BOOK" class="btn btn-dark btn-lg text-white form-control m-3 my-4 rounded-pill">
                </div>
            </div>   
        </div>           
    </form>
</div>
</body>
</html>
