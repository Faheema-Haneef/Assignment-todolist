<?php
$task =$_GET['task'];
$dec_task = base64_decode($task);

echo $dec_task;
?>