<!doctype html>
<html lang="en">

<head>
    <title>Admin| Trang chủ </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css?fbclid=IwAR3OQZxd3dQdxFKW234SQIWWjoIh2JxCI6ynWoJbtLGAnsBMcKYSwhxqWYQ">
</head>

<body>
    <?php
    include('dautrang.php');
    ?>
    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab-javascript" data-toggle="tab" href="#thongtin" role="tab" aria-controls="content-javascript" aria-selected="false">
                Thông tin cá nhân
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-css" data-toggle="tab" href="#kynang" role="tab" aria-controls="content-css" aria-selected="false">
                Kỹ năng
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-css" data-toggle="tab" href="#muctieu" role="tab" aria-controls="content-css" aria-selected="false">
                Mục tiêu
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-css" data-toggle="tab" href="#hocvan" role="tab" aria-controls="content-css" aria-selected="false">
                Học vấn
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-css" data-toggle="tab" href="#kinhnghiem" role="tab" aria-controls="content-css" aria-selected="false">
                Kinh nghiệm
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-css" data-toggle="tab" href="#sothich" role="tab" aria-controls="content-css" aria-selected="false">
                Sở thích
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-css" data-toggle="tab" href="#homthu" role="tab" aria-controls="content-css" aria-selected="false">
                Hòm thư
            </a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active " id="thongtin" role="tabpanel" aria-labelledby="tab-javascript">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>

                        <th>Họ tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Ảnh</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('../ketnoidb.php');
                    $sql = 'SELECT * from nguoidung';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $_POST = mysqli_fetch_all($result);
                    }
                    ?>
                    <tr>
                        <?php
                        foreach ($_POST as $r) {
                            $newDate1 = date("d-m-Y", strtotime($r[2]));
                        ?>
                    <tr>
                        <td scope="row"><?php echo $r[1] ?></td>
                        <td><?php echo $newDate1 ?></td>
                        <td><?php echo $r[3] ?></td>
                        <td><?php echo $r[4] ?></td>
                        <td><?php echo $r[5] ?></td>
                        <td><?php echo $r[6] ?></td>
                        <td><?php echo $r[7] ?></td>
                        <td>
                            <a href=<?php echo "suathongtin.php?id=".$r[0]?>><i class="fas fa-user-edit" title="Sửa"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="kynang" role="tabpanel" aria-labelledby="tab-css">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>

                        <th>Kỹ năng</th>
                        <th>Trình độ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('../ketnoidb.php');
                    $sql = 'SELECT * from ky_nang';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $_POST = mysqli_fetch_all($result);
                    }
                    ?>
                    <tr>
                        <?php
                        foreach ($_POST as $r) {
                        ?>
                    <tr>
                        <td scope="row"><?php echo $r[1] ?></td>
                        <td><?php echo $r[2] ?></td>
                        <td>
                            <a href=<?php echo "suakynang.php?id=" . $r[0] ?>><i class="fas fa-user-edit" title="Sửa"></i></a>
                            <a onclick="return window.confirm('Bạn có muốn xóa không?')" href=<?php echo "xoakynang.php?id=" . $r[0] ?>><i class="fas fa-trash-alt" title="Xóa"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="muctieu" role="tabpanel" aria-labelledby="tab-javascript">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>

                        <th>Mục tiêu</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('../ketnoidb.php');
                    $sql = 'SELECT * from muctieu';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $_POST = mysqli_fetch_all($result);
                    }
                    ?>
                    <tr>
                        <?php
                        foreach ($_POST as $r) {
                        ?>
                    <tr>
                        <td scope="row"><?php echo $r[1] ?></td>
                        <td>
                            <a href=<?php echo "suamtieu.php?id=" . $r[0] ?>><i class="fas fa-user-edit" title="Sửa"></i></a>
                            <a onclick="return window.confirm('Bạn có muốn xóa không?')" href=<?php echo "xoamt.php?id=" . $r[0] ?>><i class="fas fa-trash-alt" title="Xóa"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="hocvan" role="tabpanel" aria-labelledby="tab-javascript">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>

                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Trường</th>
                        <th>Ngành</th>
                        <th>Xếp loại</th>
                        <th>Điểm</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('../ketnoidb.php');
                    $sql = 'SELECT * from hoc_van';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $_POST = mysqli_fetch_all($result);
                    }
                    ?>
                    <tr>
                        <?php
                        foreach ($_POST as $r) {
                            $newDate1 = date("d-m-Y", strtotime($r[1]));
                            $newDate2 = date("d-m-Y", strtotime($r[2]));
                        ?>
                    <tr>
                        <td scope="row"><?php echo $newDate1 ?></td>
                        <td><?php echo $newDate2 ?></td>
                        <td><?php echo $r[3] ?></td>
                        <td><?php echo $r[4] ?></td>
                        <td><?php echo $r[5] ?></td>
                        <td><?php echo $r[6] ?></td>
                        <td>
                            <a href=<?php echo "suahocvan.php?id=" . $r[0] ?>><i class="fas fa-user-edit" title="Sửa"></i></a>
                            <a onclick="return window.confirm('Bạn có muốn xóa không?')" href=<?php echo "xoahocvan.php?id=" . $r[0] ?>><i class="fas fa-trash-alt" title="Xóa"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="kinhnghiem" role="tabpanel" aria-labelledby="tab-javascript">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>

                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Tên đề tài</th>
                        <th>Công việc</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('../ketnoidb.php');
                    $sql = 'SELECT * from kinh_nghiem';
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $_POST = mysqli_fetch_all($result);
                    }
                    ?>
                    <tr>
                        <?php
                        foreach ($_POST as $r) {
                            $newDate1 = date("d-m-Y", strtotime($r[1]));
                            $newDate2 = date("d-m-Y", strtotime($r[2]));
                        ?>
                    <tr>
                        <td scope="row"><?php echo $newDate1 ?></td>
                        <td><?php echo $newDate2 ?></td>
                        <td><?php echo $r[3] ?></td>
                        <td><?php echo $r[4] ?></td>
                        <td>
                            <a href=<?php echo "suakinhnghiem.php?id=" . $r[0] ?>><i class="fas fa-user-edit" title="Sửa"></i></a>
                            <a onclick="return window.confirm('Bạn có muốn xóa không?')" href=<?php echo "xoakinhnghiem.php?id=" . $r[0] ?>><i class="fas fa-trash-alt" title="Xóa"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="sothich" role="tabpanel" aria-labelledby="tab-javascript">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>

                        <th>Sở thích</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('../ketnoidb.php');
                    $select = "SELECT * from sothich";
                    $result = mysqli_query($conn, $select);
                    while ($r = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo $r[1] ?></td>
                            <td>
                                <a href=<?php echo "suasothich.php?id=" . $r[0] ?>><i class="fas fa-user-edit" title="Sửa"></i></a>
                                <a onclick="return window.confirm('Bạn có muốn xóa không?')" href=<?php echo "xoast.php?id=" . $r[0] ?>><i class="fas fa-trash-alt" title="Xóa"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="homthu" role="tabpanel" aria-labelledby="tab-javascript">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Họ tên người gửi</th>
                        <th>Email người gửi</th>
                        <th>Tin nhắn</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('../ketnoidb.php');
                    $select = "SELECT * from homthu";
                    $result = mysqli_query($conn, $select);
                    while ($r = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td scope="row"><?php echo $r[1] ?></td>
                            <td><?php echo $r[2] ?></td>
                            <td><?php echo $r[3] ?></td>
                            <td>
                                <a onclick="return window.confirm('Bạn có muốn xóa không?')" href=<?php echo "xoahomthu.php?id=".$r[0] ?>><i class="fas fa-trash-alt" title="Xóa"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>