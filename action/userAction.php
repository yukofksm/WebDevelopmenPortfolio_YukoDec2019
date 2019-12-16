<?php
    require_once '../class/user.php';
    $user = new User();
    session_start();

    //｀user｀にinsertするやつ
    if(isset($_POST['save'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $pword = md5($_POST['pword']);

        $user->userDatail($fname,$lname,$number,$email,$gender,$pword);

    // LOGIN
    }elseif(isset($_POST['login'])){
        $email = $_POST['email'];
        $pword = md5($_POST['pword']);

        $login = $user->login($email,$pword);
        
        if($login == 'U'){
            // echo "OK";
                header("Location: ../index.php");
                // echo $_SESSION['fname'];
        }else if ($login=='A'){
                header("Location: ../menuAdmin.php");
        }
        else{
            echo "Incorrect username and password";
        }

    //EDIT USER
    }elseif(isset($_POST['edit'])){
        $newFname = $_POST['newFname'];
        $newLname = $_POST['newLname'];
        $newNumber= $_POST['newNumber'];
        $newEmail= $_POST['newEmail'];
        $userID= $_POST['id'];

        $user->editUser($newFname,$newLname,$newNumber,$newEmail,$userID);


    }elseif ($_GET['actiontype']=='delete_user') {
        $id = $_GET['user_id'];

        $user->deleteUser($id);
    }

?>