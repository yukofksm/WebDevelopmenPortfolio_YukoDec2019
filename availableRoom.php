<?php
    require_once 'class/room.php';
    $room = new Room();
    $booking = checkDate($checkIn,$checkOut,$roomType);

    echo "checking".$checkIn, $checkOut, $roomType;

    // print_r($booking);

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AVAILABLE ROOMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="display-4">Available Rooms</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Room Type</th>
                        <th>Room View</th>
                        <th>Room Price</th>
                        <th>Adult Capacity</th>
                        <th>Children Capacity</th>
                        <th></th>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($booking as $row) {
                            // $id = $row['room_id'];
                            echo "
                            <tr>
                                <td>".$row['room_type']."</td>
                                <td>".$row['room_view']."</td>
                                <td>".$row['room_price']."</td>
                                <td>".$row['cap_adult']."</td>
                                <td>".$row['cap_kids']."</td>
                                <td><a href='bookRoom.php?id=$id' class='btn btn-info btn-sm'>BOOK</a></td>
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