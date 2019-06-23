<?php
include("config.php") ;
$base = "CREATE TABLE IF NOT EXISTS `products` (id int NOT NULL AUTO_INCREMENT, title varchar(30) NOT NULL,
                                        description varchar(30)  NOT NULL, image varchar(32)   NOT NULL , user_id int NOT NULL , PRIMARY KEY(id))";
if(!mysqli_query($con,$base)){
    echo "Error creating table: " . mysqli_error($con);
}

$title = $_POST['title'];
$description = $_POST['description'];
if (isset($_POST['submit'])) {
    echo "lalalalala";
    if (!empty($_POST['title']) && !empty($_POST['description'])) {

        $con->query("INSERT INTO products (title, description)
                                       VALUES ('$title', '$description')");

    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="container-fluid">
    <div class="container">
        <div class="row out ">
            <div class="col-md-12">
                <p><a href="logout.php">Log Out</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form method="post">

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="title" id="title" placeholder="Title">
    <input type="text" name="description" id="description" placeholder="Description">
    <input type="file" name="image" id="file">
    <button type="submit" name="add" class="but" id="buttonAdd">ADD</button>
</form>
               <table>
                   <thead>
                        <tr>
                            <td> No </td>
                            <td> Title </td>
                            <td> Description </td>
                            <td> Image </td>
                            <td>Update/Delete</td>
                        </tr>
                   </thead>
                   <tbody id="tbody">

                   </tbody>
               </table>
            </div>
        </div>

    </div>


</div>


<script src="jquery.js"> </script>
<script src="main.js"></script>
</body>
</html>
