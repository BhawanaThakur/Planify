<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $month_goals = isset($_POST['month_goals']) ? trim($_POST['month_goals']) : '';
    $weekly_highlights = isset($_POST['weekly_highlights']) ? trim($_POST['weekly_highlights']) : '';
    $wellness = isset($_POST['wellness']) ? trim($_POST['wellness']) : '';
    $notes = isset($_POST['notes']) ? trim($_POST['notes']) : '';

    $data = date('Y-m-d H:i:s') . "\n" . "
-------- Monthly Entry --------\n" . "
Month Goals: " . str_replace("\n"," ",$month_goals) . "\n\n" . "
Weekly Highlights: " . str_replace("\n"," ",$weekly_highlights) . "\n\n" . "
Wellness: " . str_replace("\n"," ",$wellness) . "\n\n" . "
Notes: " . str_replace("\n"," ",$notes) . "\n" . "
----------------------------------\n\n";

    file_put_contents(__DIR__ . "/monthly_data.txt", $data, FILE_APPEND);

    header("Location: monthly.html");
    exit();
}
?>