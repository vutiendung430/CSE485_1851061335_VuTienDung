<?php
require("../ketnoidb.php");
if (isset($_GET['id'])) {
    
    $sql = "SELECT * from muctieu where id_mt = '" . $_GET['id'] . "' ";
    $result = mysqli_query($conn, $sql);
    $r = mysqli_fetch_all($result);
}
if (isset($_POST['mtieu'])) {
    $idmt = $_POST['idmt'];
    $mtieu = $_POST['mtieu'];
    $update = "UPDATE muctieu set ten_mtieu = '$mtieu' where id_mt = '$idmt'";
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
    <title>Admin| Sửa mục tiêu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    include('dautrang.php');
    ?>
    <div class="container">
        <h2 style="padding-left: 300px;">Sửa mục tiêu</h2>
        <form action="suamtieu.php" method="POST">
            <div class="col-7">
                <div class="form-group" style="margin-left:200px;">
                    <input type="hidden" name="idmt" class="form-control" value="<?php echo "" . $r[0][0] . "" ?>" >
                    <label>Mục tiêu</label>
                    <input type="text" name="mtieu" class="form-control" value="<?php echo "" . $r[0][1] . "" ?>">
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