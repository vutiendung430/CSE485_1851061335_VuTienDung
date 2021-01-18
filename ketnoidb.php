<?php
$conn = mysqli_connect('localhost','root','','cvonline');
if(!$conn)
{
    die('Không thể kết nối vào cơ sở dữ liệu!'.mysqli_connect_error());
}
?>