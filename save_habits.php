<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = date('Y-m-d H:i:s') . " | ---- Habit Entry ----\n";
    foreach ($_POST as $habit => $value) {
        
        if ($value) {
            $data .= "$habit : $value\n";
        }
    }

    $data .= "----------------------\n\n";

    file_put_contents(__DIR__ . "/habits_data.txt", $data, FILE_APPEND);

    header("Location: habits.html");
    exit();
}
?>