<?php

// $url = "http://localhost/php-phase2/Assignment/?List=ttdg";
// $url_components = parse_url($url);

// parse_str($url_components['query'] , $todolist);

// echo $todolist['List']

$task =$_GET['task'];
$dec_task = base64_decode($task);

echo $dec_task;
?>
