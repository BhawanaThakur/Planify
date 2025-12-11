<?php
$days = ["mon","tue","wed","thu","fri","sat","sun"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $content = date('Y-m-d H:i:s') . " ----- Weekly Entry -----\n";

    foreach ($days as $day) {
        $text = isset($_POST[$day]) ? trim($_POST[$day]) : '';
        $content .= ucfirst($day) . ": " . str_replace("\n"," ",$text) . "\n";
    }

    $content .= "-------------------------\n\n";

    file_put_contents(__DIR__ . "/weekly_tasks.txt", $content, FILE_APPEND);

    header("Location: weekly.html");
    exit();
}
?>