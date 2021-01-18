<?php
require ('guimail.php');
require ('ketnoidb.php');
if(isset($_POST['email']))
{   
    $email = trim($_POST['email']);
    $hoten = trim($_POST['yourname']);
    $message = trim($_POST['message']);
    $noidung ='Cảm ơn bạn đã góp ý';
    $tieude ='Thư cảm ơn!';
    $sql = "insert into homthu (hoten,email_ht,tin_nhan) values ('$hoten','$email','$message') ";
    mysqli_query($conn,$sql);
    if(sendmail($tieude,$noidung,$email) == 1)
    {
        // echo '<script> alert ("Cảm ơn bạn đã góp ý cho chúng tôi"); </script>';
        echo '<script>window.location.replace("cv.php"); </script>';
    }else{
        echo '<script> alert ("Không gửi được thư"); </script>';
    }
}
