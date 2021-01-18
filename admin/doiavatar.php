<?php
  require('../ketnoidb.php');
  session_start();
  if (!empty($_FILES['file'])) {
    $duoi = explode('.', $_FILES['file']['name']); // tách chuỗi khi gặp dấu .
    $duoi = $duoi[(count($duoi) - 1)]; //lấy ra đuôi file
    $filename = rand(0, 1000) . $_FILES['file']['name'];
    if ($duoi === 'jpg' || $duoi === 'png' || $duoi === 'gif') {
      $sql = "select avatar from user ";
      $result = mysqli_fetch_all(mysqli_query($conn, $sql));
      if (move_uploaded_file($_FILES['file']['tmp_name'], 'D:/Xampp/htdocs/btl/img/' . $filename)) {
        $sql1 = "Update user set avatar='img/$filename' ";
        if (mysqli_query($conn, $sql1)) {
          // die("img/$filename"); 
          die("img/$filename");
        }
      } else {
        die('Lỗi!');
      }
    } else {
      die('Lỗi chỉ được chọn ảnh');
    }
  } else {
    die('Lock');
  }
