<!doctype html>
<html lang="en">

<head>
    <title>Đổi mật khẩu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include('../admin/dautrang.php');
    require('../ketnoidb.php');
    $sql = "SELECT * from taikhoan where id = 1 ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $r = mysqli_fetch_all($result);
    }
    foreach ($r as $d) {
        $email = $d[1];
    }
    ?>
    <div class="container">
        <h3 class="text text-center">Đổi mật khẩu</h3>
        <div class="container col-sm-6">
            <form action="doimatkhau.php" method="POST">
                <div class="form-row">
                    <label for="">Tên đăng nhập</label>
                    <input type="email" name="email" class="form-control" <?php echo " value=' $email ' " ?> disabled>
                </div>
                <div class="form-row">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <div class="form-row">
                    <label for="">Mật khẩu mới</label>
                    <input type="password" class="form-control" name="pass1">
                </div>
                <div class="form-row">
                    <label for="">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" name="pass2">
                </div>
                <button type="submit" class="btn btn-primary mt-3" name="luu">Lưu</button>
                <button type="submit" class="btn btn-primary mt-3"><a onclick="return window.confirm('Bạn có muốn hủy không?')" href="trangchu.php" class="text-light">Hủy</a></button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>