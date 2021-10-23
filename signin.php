<?php
    $con = mysqli_connect('localhost','root','','facebookclone');

    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $checkdata = mysqli_query($con, "SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'");
    $check = mysqli_num_rows($checkdata);

    if($check > 0){
        echo "Email already exists";
    }
    else{
        echo "Login Failed";
    }
?>