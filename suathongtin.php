<?php
require("../ketnoidb.php");
if (isset($_GET['id'])) {

    $sql = "SELECT * from nguoidung ";
    $result = mysqli_query($conn, $sql);
    $r = mysqli_fetch_all($result);
}
if (isset($_POST['hoten'])) {
    $id = $_POST['ID'];
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['mail'];
    $update = "UPDATE nguoidung set ho_ten = '$hoten', ngay_sinh = '$ngaysinh', gioi_tinh = '$gioitinh', dia_chi = '$diachi', 
    so_dt = '$sdt' , email = '$email' where ID = '$id' ";
    if (mysqli_query($conn, $update)) {
        header("Location:trangchu.php");
    } else {
        echo '<script> alert("Lỗi");</script>';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin| Sửa thông tin cá nhân</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    include('dautrang.php');
    ?>
    <div class="container">
        <h2 style="padding-left: 100px;">Sửa thông tin cá nhân</h2>
        <div class="row">
            <form action="suathongtin.php" method="POST">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <input type="hidden" name="ID" class="form-control" value="<?php echo $r[0][0] ?>">
                        <label>Họ tên </label>
                        <input type="text" name="hoten" class="form-control" value="<?php echo $r[0][1] ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label>Ngày sinh </label>
                        <input type="date" name="ngaysinh" class="form-control" value="<?php echo $r[0][2] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label>Giới tính </label>
                        <select name="gioitinh">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-8">
                        <label>Địa chỉ</label>
                        <input type="text" name="diachi" class="form-control" value="<?php echo $r[0][4] ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label>Số điện thoại</label>
                        <input type="text" name="sdt" class="form-control" value="<?php echo $r[0][5] ?>">
                    </div>
                    <div class="form-group col-sm-8">
                        <label>Email</label>
                        <input type="email" name="mail" class="form-control" value="<?php echo $r[0][6] ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sửa</button>
                <button type="submit" class="btn btn-primary"><a onclick="return window.confirm('Bạn có muốn hủy không?')" href="trangchu.php" class="text-light">Hủy</a></button>
            </form>
            <div class="col-2"></div>
            <form enctype="multipart/form-data" onsubmit="return false">
                <img src="../<?php echo $r[0][7] ?>" alt="" id="img" style="width: 360px;height:280px;">
                <div class="form-group">
                    <input type="file" class="form-control" id="image" placeholder="" aria-describedby="fileHelpId">
                </div><br>
                <button class="btn btn-primary" id="upimg">Đổi ảnh đại diện</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>