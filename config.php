<?php
session_start();
    $con = mysqli_connect("localhost","root","");

            if(mysqli_connect_error()){
                    echo  "Failed to connect to MySQL: " . mysqli_connect_error();
                                        }


    $base = "CREATE DATABASE IF NOT EXISTS product";

            if(!mysqli_query($con,$base)){
                    echo  "Error creating database: " . mysqli_error($con);
                                        }



    $con = mysqli_connect("localhost","root","","product");

            if(mysqli_connect_error()){
                    echo  "Failed to connect to MySQL: " . mysqli_connect_error();
                                        }



    $base = "CREATE TABLE IF NOT EXISTS `users` (id int NOT NULL AUTO_INCREMENT, first_name varchar(30) NOT NULL,
                                        email varchar(30)  NOT NULL, password varchar(32)   NOT NULL , PRIMARY KEY(id), UNIQUE (email))";

            if(!mysqli_query($con,$base)){
                    echo "Error creating table: " . mysqli_error($con);
                                       }



