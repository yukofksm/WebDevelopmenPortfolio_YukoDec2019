<?
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Rooms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d98ab22c54.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container w-75 mt-5">
    <h3 class="display-3 text-center">Add Rooms</h3>
        <form action="action/roomAction.php" method="post" enctype="multipart/form-data">
            <div class="form-group mx-auto p-4 w-50">

            <div class="row">
                <div class="col-md-5">
                    <label>Room Number<span style="color: red;"> *</span></label>
                    <input type="number" name="number" class="form-control m-3" placeholder="Room Number" style="border-top: none; border-right: none; border-left: none;"required>
                </div>
                <div class="col-md-7">
                    <label>Room Type<span style="color: red;"> *</span></label>
                    <select name="type" id="" class="form-control m-3" required>
                    <option value="Superior">Superior Room</option>
                    <option value="Deluxe">Deluxe Room</option>
                    <option value="Signature">Signature Room</option>
                    <option value="Couple">Couple Room</option>
                    </select>
                </div>
            </div>

            <label>Room View<span style="color: red;"> *</span></label>
            <select name="view" id="" class="form-control m-3" required>
                <option value="Sea view">Sea View</option>
                <option value="City view">City View</option>
                <option value="Pool view">Pool View</option>
            </select>
             
                
            <label>Room Price<span style="color: red;"> *</span></label>
            <input type="number" name="price" class="form-control m-3" placeholder="  Room Price" style="border-top: none; border-right: none; border-left: none;"required>
                    
            <div class="row">
                <div class="col-md-6">
                    <label>Room Adult Capacity <span style="color: red;"> *</span></label>
                    <input type="number" name="cap_adult" class="form-control m-3" placeholder="  Room Adult Capacity" style="border-top: none; border-right: none; border-left: none;"required>           
                </div>
                <div class="col-md-6">
                    <label>Room children Capacity <span style="color: red;"> *</span></label>
                    <input type="number" name="cap_kids" class="form-control m-3" placeholder="  Room Children Capacity" style="border-top: none; border-right: none; border-left: none;"required>           
                </div>
            </div>
            <label for="">Room Image</label>
            <input type="file" name="picture" id="" role="button" class="">
            
            
                <!-- <label>Picture Update</label>
                <input type="password" name="pword" class="form-control m-3" placeholder="  " style="border-top: none; border-right: none; border-left: none;"> -->
                
                <label for=""></label>
                <input type="submit" name="add" value="ADD ROOM" class="btn btn-dark btn-lg text-white form-control m-3 my-4 rounded-pill">
                
            </div>          
        </form>
    </div>
    
</body>
</html>