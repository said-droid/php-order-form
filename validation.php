<?php

//require 'index.php';
require 'form-view.php';

$city = $email = $zipcode = $street = $streetNumber = "";
$cityErr = $emailErr = $streetErr = $streetNumberErr = $zipcodeErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $city = test_input($_POST["city"]);
    //$email = test_input($_POST["email"]);
    $zipcode = test_input($_POST["zipcode"]);
    $street = test_input($_POST["street"]);
    $streetNumber = test_input($_POST["streetNumber"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["city"])) {
        $cityErr = "city is required";
    } else {
        $city = test_input($_POST["city"]);
    }

    /*if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }*/

    if (empty($_POST["street"])) {
        $streetErr = "street is required";
    } else {
        $street = test_input($_POST["street"]);
    }

    if (empty($_POST["streetNumber"])) {
        $streetNumberErr = "streetNumber is required";
    } else {
        $streetNumber = test_input($_POST["streetNumber"]);
    }

    if (empty($_POST["zipcode"])) {
        $zipcodeErr = "zipcode is required";
    } else {
        $zipcode = test_input($_POST["zipcode"]);
    }
}

