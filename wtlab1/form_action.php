<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $Gender = $_POST["Gender"];
    $email = $_POST["email"];
    $Mobile_No = $_POST["tel"];
    $country = $_POST["country"];
    $location = $_POST["address"];

    if(empty($fname)) {
        echo nl2br("First Name is empty.\n");
    }
    if(empty($lname)) {
        echo nl2br("Last Name is empty.\n");
    }
    if(empty($Gender)) {
        echo nl2br("Gender is not selected.\n");
    }
    if(empty($email)) {
        echo nl2br("Email is empty.\n");
    }
    if(empty($Mobile_No)) {
        echo nl2br("Mobile No is empty.\n");
    }
    if(empty($house)) {
        echo nl2br("Address is empty.\n");
    }
    if(empty($country)) {
        echo nl2br("Country is empty.\n");
    }
    else {
        echo nl2br("Registration is completed successfuly.\n");
    }
?>