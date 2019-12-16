<?php
    require_once 'class/user.php';
    $user = new User();
    
    $userid = $_GET['id'];
    $getSpecUser = $user->getSpecUser($userid);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT USER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container w-75 mt-5">
    <h3 class="display-3 text-center">Edit User</h3>
    <form action="action/userAction.php" method="post">
        <div class="form-group mx-auto p-4 w-50">

            <div class="row">
                <div class="col-md-6">
                    <label>FirstName<span style="color: red;"> *</span></label>
                    <input type="text" name="newFname" value="<?php echo $getSpecUser['firstname']?>" placeholder="  <?php echo $getSpecUser['firstname']?>" class="form-control m-3" style="border-top: none; border-right: none; border-left: none;"required>
                </div>

                <div class="col-md-6">
                    <label>Last Name<span style="color: red;"> *</span></label>
                    <input type="text" name="newLname" value="<?php echo $getSpecUser['lastname']?>" placeholder="  <?php echo $getSpecUser['lastname']?>" class="form-control m-3" style="border-top: none; border-right: none; border-left: none;"required>
                </div>

            </div>
                
            <label>Contact Number<span style="color: red;"> *</span></label>
            <input type="number" name="newNumber" value="<?php echo $getSpecUser['number']?>" class="form-control m-3" placeholder="  <?php echo $getSpecUser['number']?>" style="border-top: none; border-right: none; border-left: none;"required>
                
            <label>Email<span style="color: red;"> *</span></label>
            <input type="email" name="newEmail" value="<?php echo $getSpecUser['email']?>" class="form-control m-3" placeholder="  <?php echo $getSpecUser['email']?>" style="border-top: none; border-right: none; border-left: none;"required>
                                
            <!-- <label>Picture Update</label>
            <input type="password" name="pword" class="form-control m-3" placeholder="  " style="border-top: none; border-right: none; border-left: none;"> -->
            <input type="hidden" name="id" value="<?php echo $getSpecUser['user_id']?>"><br>

            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <label for=""></label>
                    <input type="submit" name="edit" value="EDIT USER" class="btn btn-dark btn-lg text-white form-control m-3 my-4 rounded-pill">
                </div>
            </div>   
        </div>           
    </form>
</div>
</body>
</html>
