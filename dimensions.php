<?php

if (isset($_POST["rows"])){
        $m = $_POST["rows"];
    } else {
        $m = null;
        echo "Enter rows.";
    }?>

    <br>

    <?php
    
    if (isset($_POST["columns"])){
        $n = $_POST["columns"];
    } else {
        $n = null;
        echo "Enter columns.";
    }   

?>