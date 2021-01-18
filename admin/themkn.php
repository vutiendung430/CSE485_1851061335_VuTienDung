<?php
require("../ketnoidb.php");
if (isset($_POST["tgbd"])) {
    $tgbd = $_POST["tgbd"];
    $tgkt = $_POST["tgkt"];
    $dtai = $_POST["dtai"];
    $cviec = $_POST["cviec"];
    if (!empty($tgbd)&&!empty($tgkt)&&!empty($dtai)&&!empty($cviec)) {
        $i = "INSERT into kinh_nghiem (t_gian,t_giankt,ten_dtai,Cong_viec) values ('$tgbd','$tgkt','$dtai','$cviec')";
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
