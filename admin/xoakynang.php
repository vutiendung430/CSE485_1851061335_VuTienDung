<?php
require ('../ketnoidb.php');
$id = $_GET["id"];
$delete = "DELETE from ky_nang where id_kn = $id ";
if(!mysqli_query($conn,$delete))
{
    die("Không thành công".mysqli_error($conn));
}
else
{ 
    header("Location:trangchu.php");
}
