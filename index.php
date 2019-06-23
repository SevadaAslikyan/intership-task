<?php include("register.php");?>
<?php
include ('config.php');
if(!isset($_COOKIE['id'])) {
    if(isset($_POST['submit'])) {
        $logEmail = mysqli_real_escape_string($con, trim($_POST['logEmail']));
        $logPassword = mysqli_real_escape_string($con, trim($_POST['logPassword']));
        if(!empty( $logEmail) && !empty($logPassword)) {
            $query = "SELECT `id` , `email` FROM `users` WHERE email = '$logEmail' AND password = md5('$logPassword')";
            $data = mysqli_query($con,$query);
            if(mysqli_num_rows($data) == 1) {
                $row = mysqli_fetch_assoc($data);
                setcookie('id', $row['id'], time() + (60*60*24*30), '/');
                setcookie('logEmail', $row['logEmail'], time() + (60*60*24*30), '/');
                $home_url = 'http://' . $_SERVER['HTTP_HOST'];
                header('Location: ' . $home_url);
                die();
            }
            else {
                echo 'Wrong email or password';
            }
        }
        else {
            echo 'Empty email or password';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>


            <!--  Header PART -->


    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4 logo"> <i> Mobile Phones </i> </div>
                <div class="col-md-8 login">
                    <?php
                    if (empty($_COOKIE['id'])) {
                        ?>
                    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <label id="headlabel"> Login </label>
                        <input type="email" placeholder="email" name="logEmail">
                        <input type="password" placeholder="password" name="logPassword">
                        <button type="submit" name="submit">Log In</button>
                    </form>
                        <?php
                    }
                    else {
                        ?>
                        <p><a href="main.php">My Profile</a></p>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>



<!--Section 1-->

    <section class="container-fluid">
        <div class="container">
            <div class="row sec1row">
                <div class="col-md-4">
                    <img class="img-responsive" src="assest/nghenhinvietnam_vn_phone_brands_nrtu.jpg" alt="brands" width="460" height="600">
                </div>
                <div class="col-md-8 sec1col2">
                    <form  method="post">

                        <label id="sec1label"> Registration </label> <br>
                        <span class="error">   <?php echo $errName ?> </span><br><input class="input" type="text" placeholder="Name" name="f_name"><br>
                        <span class="error"><?php echo $errEm ; echo $emailTaken?></span><br><input class="input" type="email" placeholder="email" name="email"><br>
                        <span class="error"><?php echo $errPass ?></span><br> <input class="input" type="password" placeholder="password" name="password"><br>
                            <input class="input" type="submit" name="enter" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </section>




<script src="jquery.js"> </script>
<script src="script.js"> </script>
</body>
</html>