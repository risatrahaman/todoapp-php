<?php

    require('db.php');

    $task_id = $_GET['task_id'];

    mysqli_query($conn, "delete from todo where id = $task_id");
    header("location:/todo/index.php");

?>