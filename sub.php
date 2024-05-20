<?php

if (isset($_POST['email'])) {
    $email = $_POST["email"];

    if (!empty($email)) {
        try {
            $link = new mysqli("localhost", "root", "", "shop");
            if ($link == false) {
                die(mysqli_connect_error());
            }
            $sql = "INSERT INTO subs (email) VALUES (?)";
            $x = $link->execute_query($sql, [$email]);
            if ($x) {
                echo "Thanks for subscribe :) .";
            } else {
                echo "Something went wrong";
            }
        } catch (\Throwable $th) {
            if (str_contains($th->getMessage(), "Duplicate")) {
                echo "This email already in the newsletter";
            } else {
                echo "Something went wrong";
            }
        }
    } else {
        echo "Enter your email please";
    }
}
