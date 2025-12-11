<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = isset($_POST['username']) ? trim($_POST['username']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $bio = isset($_POST['bio']) ? trim($_POST['bio']) : '';

    $profile_data = date('Y-m-d H:i:s') . "\n" . "
----- Profile Saved -----\n" . "
Name: " . str_replace("\n"," ",$name) . "\n" . "
Email: " . str_replace("\n"," ",$email) . "\n" . "
Password: " . str_replace("\n"," ",$password) . "\n" . "
Bio: " . str_replace("\n"," ",$bio) . "\n" . "
--------------------------\n\n";

    file_put_contents(__DIR__ . "/profile.txt", $profile_data);

    header("Location: profile.html");
    exit();
}
?>