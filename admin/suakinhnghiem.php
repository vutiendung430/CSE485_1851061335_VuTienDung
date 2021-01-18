<?php
require("../ketnoidb.php");
if (isset($_GET['id'])) {
    
    $sql = "SELECT * from kinh_nghiem where id_kn = '" . $_GET['id'] . "' ";
    $result = mysqli_query($conn, $sql);
    $r = mysqli_fetch_all($result);
}
if (isset($_POST['tgbd'])) {
    $tgbd = $_POST['tgbd'];
    $tgkt = $_POST['tgkt'];
    $sst = $_POST['sst'];
    $cviec = $_POST['cviec'];
    $update = "UPDATE kinh_nghiem set t_gian = '$tgbd', t_giankt = '$tgkt', ten_dtai = '$sst', Cong_viec= '$cviec'  
    where id_kn = '" . $_POST['idkn'] . "'";
    if (mysqli_query($conn, $update)) {
        header("Location:trangchu.php");
    } else {
        echo'<script> alert("Lỗi");</script>';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin| Sửa kinh nghiệm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    include('dautrang.php');
    ?>
    <div class="container">
        <h2 style="padding-left: 300px;">Sửa kinh nghiệm</h2>
        <form action="suakinhnghiem.php" method="POST">
            <div class="col-7">
                <div class="form-group" style="margin-left:200px;">
                    <input type="hidden" name="idkn" class="form-control" value="<?php echo "" . $r[0][0] . "" ?>" >
                    <label>Thời gian bắt đầu</label>
                    <input type="date" name="tgbd" class="form-control" value="<?php echo "" . $r[0][1] . "" ?>">
                    <label>Thời gian kết thúc</label>
                    <input type="date" name="tgkt" class="form-control" value="<?php echo "" . $r[0][2] . "" ?>">
                    <label>Tên đề tài</label>
                    <input type="text" name="sst" class="form-control" value="<?php echo "" . $r[0][3] . "" ?>">
                    <label>Công việc</label>
                    <input type="text" name="cviec" class="form-control" value="<?php echo "" . $r[0][4] . "" ?>">
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