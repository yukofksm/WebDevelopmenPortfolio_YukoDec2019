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
    <title>BOOK ROOM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container w-50 mt-5">
    <div class="card">
    <div class="card-header">
        <h3 class="display-3">Check </h3>
    </div>
    <div class="card-body">
    <form action="action/roomAction.php" method="post">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <h5>Room Type:</h5>
                    <p><?php echo $getSpecRoom['room_type']?> Room</p>
                            
                    <h5>Room View:</h5>
                    <p><?php echo $getSpecRoom['room_view']?> Room</p>
                    
                    <h5>Room Price: </h5>
                    <p>$ <?php echo $getSpecRoom['room_price']?>-</p>
                    
                    <h5 for="">Adult:</h5>
                    <p><?php echo $_SESSION['final_adult']?></p>
                
                    <h5 for="">Children:</h5>
                    <p><?php echo $_SESSION['final_kids']?></p> 
                </div> 

                <div class="col-md-6">
                    <h5 for="">Name:</h5>
                    <p><?php echo $_SESSION['fname']?> <?php echo $_SESSION['lname']?></p>

                    <h5>Contact Number:</h5>
                    <p><?php echo $_SESSION['number'] ?></p>

                    <h5>Email:</h5>
                    <p><?php echo $_SESSION['email'] ?></p>

                    <h5>gender:</h5>
                    <p><?php echo $_SESSION['gender'] ?></p>
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $getSpecRoom['room_id']?>">
            <input type="hidden" name="type" value="<?php echo $getSpecRoom['room_type']?>">
            <input type="hidden" name="view" value="<?php echo $getSpecRoom['room_view']?>">
            <input type="hidden" name="price" value="<?php echo $getSpecRoom['room_price']?>">
            <input type="hidden" name="final_adult" value="<?php echo $_SESSION['final_adult']?>">
            <input type="hidden" name="final_kids" value="<?php echo $_SESSION['final_kids']?>">

            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <input type="submit" name="book2" value="BOOK" class="btn btn-dark btn-lg text-white form-control rounded-pill">
                </div>
            </div>   
        </div>           
    </form>
    </div>
    </div>
</div>
</body>
</html>
