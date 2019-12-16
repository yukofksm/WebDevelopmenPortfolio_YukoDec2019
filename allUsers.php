<?php
    require_once 'class/user.php';
    $user = new User();
    $result = $user->getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL USERS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="display-4">All Users</h3>
                <p  class="btn text-dark"><a href="addUser.php">add user</a></p> 
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($result as $row) {
                            $id = $row['user_id'];
                            echo "
                            <tr>
                                <td>".$row['user_id']."</td>
                                <td>".$row['firstname']."</td>
                                <td>".$row['lastname']."</td>
                                <td>".$row['number']."</td>
                                <td>".$row['email']."</td>
                                <td><a href='editUsers.php?id=$id' class='btn btn-info btn-sm'>EDIT</a></td>
                                <td><a href='action/userAction.php?actiontype=delete_user&user_id=$id' class='btn btn-danger btn-sm'>DELETE</a></td>
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