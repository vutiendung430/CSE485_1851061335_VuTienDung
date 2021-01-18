<?php
require("../ketnoidb.php");
if (isset($_POST["knang"])) {
    $kn = $_POST["knang"];
    $td = $_POST["tdo"];
    if (!empty($kn)&&!empty($td)) {
        $i = "INSERT into ky_nang (Ten,trinh_do) values ('$kn','$td')";
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