<?php
require('../ketnoidb.php');
if(isset($_POST['luu']))
{
    $pass = $_POST['pass'];
    $pass1 =$_POST['pass1'];
    $pass2 =$_POST['pass2'];
    if($pass1 != $pass2)
    {
        echo'<script> alert("Mật khẩu mới chưa trùng khớp"); </script>';
    include("matkhau.php");
    
    }else 
    {
        $select  = "SELECT * from taikhoan where id = 1 ";
        $result = mysqli_query ($conn, $select);
        if (mysqli_num_rows($result) > 0) {
            $r = mysqli_fetch_all($result);
        }
        foreach($r as $d)
if(!password_verify($pass,$d[2]))
{
    echo'<script> alert("Mật khẩu không chính xác"); </script>';
    include("matkhau.php");
    
}
else 
    if ($pass1 == $passold)
    {
    echo'<script> alert("Mật khẩu mới phải khác mật khẩu cũ"); </script>';
    include("matkhau.php"); 
    }
else
{ 
    $hash_pass = password_hash($pass1,PASSWORD_DEFAULT);
    $update = "UPDATE taikhoan set matkhau = '$hash_pass' where id = 1";
    mysqli_query($conn,$update);
    header("Location:trangchu.php");
}
}
}
