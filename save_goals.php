<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fitness = isset($_POST['fitness']) ? trim($_POST['fitness']) : '';
    $study = isset($_POST['study']) ? trim($_POST['study']) : '';
    $career = isset($_POST['career']) ? trim($_POST['career']) : '';
    $personal = isset($_POST['personal']) ? trim($_POST['personal']) : '';
    $gratitude = isset($_POST['gratitude']) ? trim($_POST['gratitude']) : '';

    $entry = date('Y-m-d H:i:s') . "\n" . "
------ Goals Entry ------\n" . "
Fitness: " . str_replace("\n"," ",$fitness) . "\n\n" . "
Study: " . str_replace("\n"," ",$study) . "\n\n" . "
Career: " . str_replace("\n"," ",$career) . "\n\n" . "
Personal: " . str_replace("\n"," ",$personal) . "\n\n" . "
Gratitude / Notes: " . str_replace("\n"," ",$gratitude) . "\n" . "
------------------------------\n\n";

    file_put_contents(__DIR__ . "/goals_data.txt", $entry, FILE_APPEND);

    header("Location: goals.html");
    exit();
}
?>