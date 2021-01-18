<?php
require("../ketnoidb.php");
if (isset($_GET['id'])) {

    $sql = "SELECT * from hoc_van where id_hv = '" . $_GET['id'] . "' ";
    $result = mysqli_query($conn, $sql);
    $r = mysqli_fetch_all($result);
}
if (isset($_POST['bd'])) {
    $id = $_POST['idhv'];
    $bd = $_POST['bd'];
    $kt = $_POST['kt'];
    $truong = $_POST['truong'];
    $nganh = $_POST['nganh'];
    $xloai = $_POST['xloai'];
    $diem = $_POST['diem'];
    $update = "UPDATE hoc_van set Thoi_gian = '$bd', ket_thuc = '$kt', truong = '$truong', Nganh= '$nganh', 
    Xep_loai = '$xloai', Diem= '$diem'  where id_hv = '$id'";
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
    <title>Admin| Sửa học vấn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    include('dautrang.php');
    ?>
    <div class="container">
        <h2 style="padding-left: 300px;">Sửa học vấn</h2>
        <form action="suahocvan.php" method="POST">
            <div class="col-7">
                <div class="form-group" style="margin-left:200px;">
                    <input type="hidden" name="idhv" class="form-control" value="<?php echo "" . $r[0][0] . "" ?>">
                    <label>Thời gian bắt đầu</label>
                    <input type="date" name="bd" class="form-control" value="<?php echo "" . $r[0][1] . "" ?>">
                    <label>Thời gian kết thúc</label>
                    <input type="date" name="kt" class="form-control" value="<?php echo "" . $r[0][2] . "" ?>">
                    <label>Trường</label>
                    <input type="text" name="truong" class="form-control" value="<?php echo "" . $r[0][3] . "" ?>">
                    <label>Ngành</label>
                    <input type="text" name="nganh" class="form-control" value="<?php echo "" . $r[0][4] . "" ?>">
                    <label>Xếp loại</label>
                    <input type="text" name="xloai" class="form-control" value="<?php echo "" . $r[0][5] . "" ?>">
                    <label>Điểm</label>
                    <input type="text" name="diem" class="form-control" value="<?php echo "" . $r[0][6] . "" ?>">
                    </br>
                    <button type="submit" name="updatekn" class="btn btn-primary">Sửa</button>
                    <button type="submit" class="btn btn-primary"><a onclick="return window.confirm('Bạn có muốn hủy không?')" href="trangchu.php" class="text-light">Hủy</a></button>
                </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>