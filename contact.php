<?php


if (isset($_POST['msg'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg = $_POST["msg"];

    if (!empty($email && $name && $subject && $msg)) {
            $link = new mysqli("localhost", "root", "", "shop");
            if ($link == false) {
                die(mysqli_connect_error());
            }
            $sql = "INSERT INTO contact (name , email , subject , msg) VALUES (? , ? , ? , ?)";
            $x = $link->execute_query($sql, [$name , $email , $subject , $msg]);
            if ($x) {
                echo "Thanks for contacting us :) .";
            } else {
                echo "Something went wrong";
            } 
        }
    } else {
        echo "Enter your email please";
    }
