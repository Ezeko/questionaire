<?php

//connect to database

$conn = mysqli_connect("localhost", "root", "", "quizhandler");

if (!$conn) {
    //show error
    die(mysqli_error($conn));
} else{
    //echo ('Connected sucessfully!!');
}

?>