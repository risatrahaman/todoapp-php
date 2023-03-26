<?php

    require("db.php");

    if (!empty($_POST['text'])){

        $text = $_POST['text'];
        mysqli_query($conn, "insert into todo(task) values('$text')");
        $text = "";

        header("location:/todo/index.php");
    }
    header("location:/todo/index.php");

?>