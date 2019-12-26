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
        <h3 class="display-3">Final Comfimation</h3>
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

                    <h5>Check in Date: </h5>
                    <p><?php echo $_SESSION['checkin']?></p>

                    <h5>Check out Date: </h5>
                    <p><?php echo $_SESSION['checkout']?></p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <p>Adult:  </p>
                            <p><?php echo $_SESSION['final_adult']?></p>
                        </div>
                        <div class="col-md-6">
                            <p>Children:</p>
                            <p><?php echo $_SESSION['final_kids']?></p> 
                        </div>
                    </div>
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

            <input type="hidden" name="checkin" value="<?php echo $_SESSION['checkin']?>">
            <input type="hidden" name="checkout" value="<?php echo $_SESSION['checkout']?>">
            <input type="hidden" name="final_adult" value="<?php echo $_SESSION['final_adult']?>">
            <input type="hidden" name="final_kids" value="<?php echo $_SESSION['final_kids']?>">
            <input type="hidden" name="id" value="<?php echo $getSpecRoom['room_id']?>">
            <input type="hidden" name="userID" value="<?php echo $_SESSION['userid']?>">
            <input type="hidden" name="fname" value="<?php echo $_SESSION['fname']?>">


            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <input type="submit" name="finalBook" value="SUBMIT" class="btn btn-dark btn-lg text-white form-control rounded-pill">
                </div>
            </div>   
        </div>           
    </form>
    </div>
    </div>
</div>
</body>
</html>
