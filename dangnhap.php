<?php
require('ketnoidb.php');
if(isset($_POST['submit']) && $_POST['email']!= "" && $_POST['pass']!= "")
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT * from taikhoan ";
    $user = mysqli_query($conn,$sql);
    if(mysqli_num_rows($user)> 0)
{  
    $r = mysqli_fetch_all($user);
    foreach($r as $d)
    if(!password_verify($pass,$d[2]))
    {
    echo'<script> alert("Tên đăng nhập hoặc mật khẩu không chính xác");</script>';
    include("admin.php");
    }
    if($email != $d[1])
    {
    echo'<script> alert("Tên đăng nhập hoặc mật khẩu không chính xác");</script>';
    include("admin.php");
    } 
    
    else 
    {
        header("Location:./admin/trangchu.php");
    }
}
}
else
{
    echo'<script> alert("Bạn chưa nhập đầy đủ thông tin đăng nhập");</script>';
    include("admin.php");
}
