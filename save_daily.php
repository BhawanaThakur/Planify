<?php

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get task & time from form 
    $task = isset($_POST['task']) ? trim($_POST['task']) : '';
    $time = isset($_POST['time']) ? trim($_POST['time']) : '';

    //  validation
    if ($task !== '') {
        $line = date('Y-m-d H:i:s') . " | Task: " . str_replace("\n"," ",$task) . " | Time: $time\n";

        file_put_contents(__DIR__ . "/daily_tasks.txt", $line, FILE_APPEND);
    }

    header("Location: daily.html");
    exit();
}
?>