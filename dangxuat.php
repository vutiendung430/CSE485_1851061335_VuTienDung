<?php
session_start();                
if (!isset($_SESSION['email'])) {        
header("Location:admin.php");
exit();
}else
{
session_destroy();
}
header("Location:admin.php");

?>