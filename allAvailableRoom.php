<?php
     require_once 'class/room.php';
     $room = new Room();
     $result = $room->getavailableRooms();
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL AVALABIL ROOMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="display-4">All Available Rooms</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        
                        
                        <th>Room Type</th>
                        <th>Room View</th>
                        <th>Room Price</th>
                        <th>Adult Capacity</th>
                        <th>Children Capacity</th>
                        <th>Room Status</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($result as $row) {
                            $id = $row['room_id'];
                            $_SESSION['type']=$row['room_type'];
                            $_SESSION['view']=$row['room_view'];
                            $_SESSION['price']=$row['room_price'];
                            $_SESSION['cap_adult']=$row['cap_adult'];
                            $_SESSION['cap_kids']=$row['cap_kids'];
                            echo "
                            <tr>
                                <td>".$row['room_type']."</td>
                                <td>".$row['room_view']."</td>
                                <td>".$row['room_price']."</td>
                                <td>".$row['cap_adult']."</td>
                                <td>".$row['cap_kids']."</td>
                                <td>".$row['room_status']."</td>
                                <td><a href='editRooms.php?id=$id' class='btn btn-info btn-sm'>BOOK</a></td>
                            </tr>";
                        }
                    ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>