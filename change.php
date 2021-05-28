<?php
if (isset($_POST['start']))
{
if($_POST["start"] == "topLeft"){
    include 'cyclicMatrixTopLeft.php';
}
if($_POST["start"] == "topRight"){
    include 'cyclicMatrixTopRight.php';
}    
}
?>