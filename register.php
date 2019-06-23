<?php
        include('config.php');

    $fullName = $_POST['f_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errName  = $errPass = $errEm   = $emailTaken = '';

            if(isset($_POST['enter'])){

                    $taken_a = "SELECT * FROM users WHERE email = '$email'";
                    $taken_b = mysqli_query($con, $taken_a ) or die(mysqli_error($con));


            if(empty($_POST['f_name'])){
                    $errName = '* input name please';
                                         }


            if(empty($_POST['email'])){
                    $errEm = '* input email please';
                                         }


            if(empty($_POST['password'])){
                    $errPass = '* input password please';
                                         }


            if (mysqli_num_rows($taken_b) > 0){
                    $emailTaken = "Sorry... Email already taken";
                                         }


            if(!empty($_POST['f_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !mysqli_num_rows($taken_b) > 0 ) {

                    $con->query("INSERT INTO users (first_name, email, password)
                                       VALUES ('$fullName', '$email', '".md5("$password")."')");
            }

                                         }


