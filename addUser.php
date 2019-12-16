<?
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container w-75 mt-5">
    <h3 class="display-3 text-center">Enter Your Details</h3>
        <form action="action/userAction.php" method="post">
            <div class="form-group mx-auto p-4 w-50">
                <div class="row">
                    <div class="form-group col-md-6">
                    <label> First Name<span style="color: red;"> *</span></label>
                    <input type="text" name="fname" class="form-control m-3" placeholder="  Your  First Name" style="border-top: none; border-right: none; border-left: none;" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label>last Name<span style="color: red;"> *</span></label>
                    <input type="text" name="lname" class="form-control m-3" placeholder="  Your  Last Name" style="border-top: none; border-right: none; border-left: none;"required>
                    </div>
                </div>
                <label>Contact Number<span style="color: red;"> *</span></label>
                <input type="text" name="number" class="form-control m-3" placeholder="  Contact Number" style="border-top: none; border-right: none; border-left: none;"required>
                <label>Email<span style="color: red;"> *</span></label>
                <input type="email" name="email" class="form-control m-3" placeholder="  Your Email" style="border-top: none; border-right: none; border-left: none;"required>
                <div class="row">
                    <div class="form-group col-md-8">
                    <label>Password<span style="color: red;"> *</span></label>
                    <input type="password" name="pword" class="form-control m-3" placeholder="  Password" style="border-top: none; border-right: none; border-left: none;"required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for=""></label>
                    <input type="submit" name="save" value="SAVE" class="btn btn-dark btn-lg text-white form-control m-3 my-4 rounded-pill">
                    </div>
                </div>
            </div>          
        </form>
    </div>
    
</body>
</html>