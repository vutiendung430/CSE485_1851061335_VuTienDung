<?php
require("../ketnoidb.php");
if (isset($_POST["sthich"])) {
    $st = $_POST["sthich"];
    if (!empty($st)) {
        $i = "INSERT into sothich (TenST) values ('$st')";
        if (mysqli_query($conn, $i)) {
            header("Location:trangchu.php");
        } else {
            echo '<script> alert("Lỗi"); </script>';
            include("trangchu.php");
        }
    } else {
        echo '<script> alert("Không được để trống"); </script>';
        include("trangchu.php");
    }
}