<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CV Online</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css?fbclid=IwAR3OQZxd3dQdxFKW234SQIWWjoIh2JxCI6ynWoJbtLGAnsBMcKYSwhxqWYQ">

</head>

<body>
  <header id="header" class="d-flex flex-column justify-content-center">
    <nav class="nav-menu">
      <ul>
        <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Trang chủ</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i><span>Thông tin cá nhân</span></a></li>
        <li><a href="#facts"><i class="fas fa-running"></i><span>Kỹ năng</span></a></li>
        <li><a href="#resume"><i class="fas fa-bullseye"></i><span>Mục tiêu</span></a></li>
        <li><a href="#portfolio"><i class="fas fa-university"></i><span>Học vấn</span></a></li>
        <li><a href="#services"><i class="fas fa-book-open"></i> <span>Kinh nghiệm làm việc</span></a></li>
      </ul>
    </nav>
  </header>
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Vũ Tiến Dũng</h1>
    </div>
  </section>
  <main id="main">
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>Thông tin cá nhân</h2>
        </div>
        <?php
        require('ketnoidb.php');
        $sql = 'SELECT * from nguoidung';
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $_POST = mysqli_fetch_all($result);
        }
        foreach ($_POST as $r) {
          $newDate1 = date("d-m-Y", strtotime($r[2]));
        ?>
          <div class="row">
            <div class="col-lg-4">
              <img src="<?php echo $_POST[0][7] ?>" alt="" style="width:360px;height:360px;">

            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
              <div class="row">

                <div class="col-lg-6">
                  <ul>

                    <li><i class="icofont-rounded-right"></i> <strong>Họ và tên: </strong><?php echo $r[1] ?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Giới tính: </strong><?php echo $r[3] ?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Ngày sinh: </strong><?php echo $newDate1 ?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Địa chỉ:</strong><?php echo $r[4] ?></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Số điện thoại: </strong><?php echo $r[5] ?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Email: </strong><?php echo $r[6] ?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Facebook: </strong> <a href="https://www.facebook.com/profile.php?id=100023328546275">https://www.facebook.com</a></li>
                  </ul>
                <?php } ?>
                </div>
              </div>
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong>Sở thích:</strong>
                  <?php
                  require('ketnoidb.php');
                  $sql = 'SELECT * from sothich';
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    $_POST = mysqli_fetch_all($result);
                  }
                  foreach ($_POST as $r) {
                    echo $r[1] . "; ";
                  } ?>
                  ...
                </li>
              </ul>
            </div>
          </div>

      </div>
    </section>

    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Kỹ năng</h2>
        </div>
        <?php
        require('ketnoidb.php');
        $sql = 'SELECT * from ky_nang';
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $_POST = mysqli_fetch_all($result);
        }
        ?>
        <table class="table table-borderless table-striped table-hover table-responsive">
          <thead class="thead-dark">
            <tr>
              <th>Kỹ năng</th>
              <th>Trình độ</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($_POST as $r) {
            ?>
              <tr>
                <td scope="row"> <?php echo $r[1] ?></td>
                <td><?php echo $r[2] ?></td>
              </tr>

          </tbody>
        <?php } ?>
        </table>
      </div>
    </section>
    <section id="resume" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title content">
          <h2>Mục tiêu</h2>
        </div>
        <?php
        require('ketnoidb.php');
        $sql = 'SELECT * from muctieu';
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $_POST = mysqli_fetch_all($result);
        }
        foreach ($_POST as $r) {
        ?>
          <ul> <i class="fas fa-angle-right"></i>
            <?php echo $r[1] ?>
          </ul>
        <?php
        }
        ?>
      </div>
    </section>

    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Học vấn</h2>
        </div>
        <?php
        require('ketnoidb.php');
        $sql = 'SELECT * from hoc_van';
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $_POST = mysqli_fetch_all($result);
        }
        ?>
        <table class="table table-borderless table-striped table-hover table-responsive">
          <thead class="thead-dark">
            <tr>
              <th>Thời gian bắt đầu</th>
              <th>Thời gian kết thúc</th>
              <th>Trường</th>
              <th>Ngành</th>
              <th>Xếp loại</th>
              <th>Điểm TB</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($_POST as $r) {
              $newDate1 = date("d-m-Y", strtotime($r[1]));
              $newDate2 = date("d-m-Y", strtotime($r[2]));
            ?>
              <tr>
                <td scope="row"> <?php echo $newDate1 ?></td>
                <td><?php echo $newDate2 ?></td>
                <td><?php echo $r[3] ?></td>
                <td><?php echo $r[4] ?></td>
                <td><?php echo $r[5] ?></td>
                <td><?php echo $r[6] ?></td>
              </tr>

          </tbody>
        <?php } ?>
        </table>

      </div>
    </section>

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kinh nghiệm làm việc</h2>
        </div>
        <?php
        require('ketnoidb.php');
        $sql = 'SELECT * from kinh_nghiem';
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $_POST = mysqli_fetch_all($result);
        }
        ?>
        <table class="table table-borderless table-striped table-hover table-responsive">
          <thead class="thead-dark">
            <tr>
              <th>Thời gian bắt đầu</th>
              <th>Thời gian kết thúc</th>
              <th>Tên đề tài</th>
              <th>Công việc</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($_POST as $r) {
              $newDate1 = date("d-m-Y", strtotime($r[1]));
              $newDate2 = date("d-m-Y", strtotime($r[2]));
            ?>
              <tr>
                <td scope="row"> <?php echo $newDate1 ?></td>
                <td><?php echo $newDate2 ?></td>
                <td><?php echo $r[3] ?></td>
                <td><?php echo $r[4] ?></td>
              </tr>

          </tbody>
        <?php } ?>
        </table>
      </div>
    </section>
  </main>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>

</html>