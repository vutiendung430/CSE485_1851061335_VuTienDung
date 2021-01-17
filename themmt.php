<?php
require("../ketnoidb.php");
if (isset($_POST["mtieu"])) {
    $mt = $_POST["mtieu"];
    if (!empty($mt)) {
        
        $i = "INSERT into muctieu (ten_mtieu) values ('$mt')";
        if (mysqli_query($conn, $i)) {
            header("Location:trangchu.php");
        } 
        else {
            echo '<script> alert("Lỗi"); </script>';
            include("trangchu.php");  
        }
    }
    else {
        echo '<script> alert("Không được để trống"); </script>';
        include("trangchu.php");   
    }
}