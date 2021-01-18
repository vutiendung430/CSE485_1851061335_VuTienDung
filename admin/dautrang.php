<nav class="navbar navbar-blue navbar-expand bg-dark ">
<img src="../img/logo_cv.png" width="90px" alt="">
  <div class="container">
    <a class="navbar-brand text-center" href="http://Localhost/btl/admin/trangchu.php">
      <h1>CV Online</h1>
    </a>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown"><a class=" btn btn-primary nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xem thêm</a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" data-toggle="modal" href="#knang">Thêm kỹ năng</a>
            <a class="dropdown-item" data-toggle="modal" href="#mtieu">Thêm mục tiêu</a>
            <a class="dropdown-item" data-toggle="modal" href="#hvan">Thêm học vấn</a>
            <a class="dropdown-item" data-toggle="modal" href="#exp">Thêm kinh nghiệm</a>
            <a class="dropdown-item" data-toggle="modal" href="#sthich">Thêm sở thích</a>
            <a class="dropdown-item" href="http://localhost/btl/admin/doiavatar.php">Đổi ảnh đại diện</a>
            <a class="dropdown-item" href="http://localhost/btl/admin/matkhau.php">Đổi mật khẩu</a>
            <a class="dropdown-item" href="http://localhost/btl/dangxuat.php">Đăng xuất</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="text-left">
  <div class="modal fade" id="knang" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Thêm kỹ năng</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="themknang.php" method="POST">
            <div class="form-group">
              <label >Tên</label>
              <input type="text" class="form-control" name="knang">
            </div>
            <div class="form-group">
              <label for="">Trình độ</label>
              <input type="text" class="form-control" name="tdo">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary bg-primary d-block">Thêm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="text-left">
  <div class="modal fade" id="mtieu" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Thêm mục tiêu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="themmt.php" method="POST">
            <div class="form-group">
              <label >Tên</label>
              <input type="text" class="form-control" name="mtieu">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary bg-primary d-block">Thêm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="text-left">
  <div class="modal fade" id="hvan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Thêm học vấn</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="themhv.php" method="POST">
            <div class="form-group">
              <label >Thời gian bắt đầu</label>
              <input type="date" class="form-control" name="tbd">
            </div>
            <div class="form-group">
              <label for="">Thời gian kết thúc</label>
              <input type="date" class="form-control" name="tkt">
            </div>
            <div class="form-group">
              <label for="">Trường</label>
              <input type="text" class="form-control" name="truong">
            </div>
            <div class="form-group">
              <label for="">Ngành</label>
              <input type="text" class="form-control" name="nganh">
            </div>
            <div class="form-group">
              <label for="">Xếp loại</label>
              <input type="text" class="form-control" name="xloai">
            </div>
            <div class="form-group">
              <label for="">Điểm</label>
              <input type="text" class="form-control" name="diem">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary bg-primary d-block">Thêm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="text-left">
  <div class="modal fade" id="exp" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Thêm kinh nghiệm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="themkn.php" method="POST">
            <div class="form-group">
              <label >Thời gian bắt đầu</label>
              <input type="date" class="form-control" name="tgbd">
            </div>
            <div class="form-group">
              <label for="">Thời gian kết thúc</label>
              <input type="date" class="form-control" name="tgkt">
            </div>
            <div class="form-group">
              <label >Tên đề tài</label>
              <input type="text" class="form-control" name="dtai">
            </div>
            <div class="form-group">
              <label >Công việc</label>
              <input type="text" class="form-control" name="cviec">
            </div>
            <div class="form-group">
              <button type="submit4" class="btn btn-primary bg-primary d-block">Thêm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="text-left">
  <div class="modal fade" id="sthich" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Thêm sở thích</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="themsthich.php" method="POST">
            <div class="form-group">
              <label >Tên</label>
              <input type="text" class="form-control" name="sthich">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary bg-primary d-block">Thêm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>