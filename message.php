<?php
    require_once 'class/user.php';
    $user = new User();
    $result = $user->getMessage();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL ROOMS</title>
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
                <a href="message.php" class="nav-link text-white pb-0 px-3"><p>    Message</p></a>
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
    <div class="container mt-5">
        <div class="card w-75 mx-auto">
            <div class="card-header">
                <h3 class="display-4">All Message</h3>
               
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>date</th>
                        <th>subject</th>
                        <th>name</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($result as $row) {
                            $id = $row['contact_id'];
                            echo "
                            <tr>
                                <td>".$row['contact_id']."</td>
                                <td>".$row['date']."</td>
                                <td>".$row['subject']."</td>
                                <td>".$row['name']."</td>
                                <td><a href='messageDetail.php?id=$id' class='btn btn-warning text-white btn-sm'>Detail</a></td>
                                <td><a href='action/userAction.php?actiontype=delete_message&contact_id=$id' class='btn btn-danger btn-sm'>DELETE</a></td>
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