<?php
require("../ketnoidb.php");
if (isset($_POST["tbd"])) {
    $tbd = $_POST["tbd"];
    $tkt = $_POST["tkt"];
    $truong = $_POST["truong"];
    $nganh = $_POST["nganh"];
    $xloai = $_POST["xloai"];
    $diem = $_POST["diem"];
    if (!empty($tbd) &&!empty($tkt)&&!empty($truong)&&!empty($nganh)&&!empty($xloai)&&!empty($diem)) {
        
        $i = "INSERT into hoc_van (Thoi_gian,ket_thuc,truong,Nganh,Xep_loai,Diem) values ('$tbd','$tkt','$truong','$nganh','$xloai','$diem')";
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