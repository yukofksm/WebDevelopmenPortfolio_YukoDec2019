<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h3 class="display-3">Hello,  <?php echo $_SESSION['fname']?>!</h3>
        </div>
        <div class="card-body">
        
            <h5 class="display-4"><a href="addRoom.php"> Add Room</a></h5>
            <h5 class="display-4"><a href="allRooms.php"> All Rooms</a></h5>
            <h5 class="display-4"><a href="allUsers.php"> Users Info</a></h5>
            <h5 class="display-4"><a href="all.php"> All Reservation</a></h5>
        </div>

    
    </div>
</div>
    
</body>
</html>