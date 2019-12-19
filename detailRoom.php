<?php
    require_once 'class/room.php';
    $room = new Room();

    $id = $_GET['id'];
    $result = $room->roomDetail($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>
<body>
    <div class="container w-75 mx-auto mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="display-4 ml-3">Room Detail</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <img src="img/<?php echo $result['room_img']?>" alt="" style="width: 100%; height: 420px;">
                    </div>
                    <div class="col-md-4">
                        <p><i class="fas fa-key"></i>  # <?php echo $result['room_num']?></p><br>
                        <p><i class="fas fa-hotel"></i>  <?php echo $result['room_type']?> room</p><br>
                        <p><i class="far fa-eye"></i>  <?php echo $result['room_view']?></p><br>
                        <p><i class="fas fa-hand-holding-usd"></i>$<?php echo $result['room_price']?>-</p><br>
                        <p><i class="fas fa-users"></i>  Capacity(Adult):    <?php echo $result['cap_adult']?></p><br>
                        <p><i class="fas fa-child"></i>  Capacity(Children):   <?php echo $result['cap_kids']?></p><br>
                        <?php
                            echo "<a href='editRooms.php?id=$id><i class='fas fa-wrench'></i>  EDIT</a>";
                        ?>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    
</body>
</html>