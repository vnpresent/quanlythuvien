<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
<h2>Chỉnh sửa</h2>
    <form action="index.php?controller=createcard&action=update" method="post">

        <input type="text" hidden name="MaDK" class="form-control" required="required" value="<?php echo $data['MaDK'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">Họ tên</label>
            <div class="col-sm-3">
                <input type="text" name="HoTen" class="form-control" required="required" value="<?php echo $data['HoTen'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">Năm sinh</label>
            <div class="col-sm-3">
                <input type="date" name="NamSinh" class="form-control" required="required" value="<?php echo $data['NamSinh'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">Giới tính</label>
            <div class="col-sm-3">
                <select class="form-control" name="GioiTinh" id="">
                    <option value="nam" <?php echo $data['GioiTinh']=="nam"?"selected":""; ?>>Nam</option>
                    <option value="nu" <?php echo $data['GioiTinh']=="nu"?"selected":""; ?>>Nữ</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">Chức danh</label>
            <div class="col-sm-3">
                <input type="text" name="ChucDanh" class="form-control" required="required" value="<?php echo $data['ChucDanh'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">Đơn vị</label>
            <div class="col-sm-3">
                <select name="MaDV" class="form-control" aria-label="Default select example">
                    <?php
                    foreach ($units as $unit) {
                        echo "<option value='" . $unit['MaDV'] . "' ".($unit['MaDV']==$data['MaDV']?'selected':'').">" . $unit['TenDV'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">Mã lớp</label>
            <div class="col-sm-3">
                <select name="MaLop" class="form-control" aria-label="Default select example">
                    <?php
                    foreach ($grades as $grade) {
                        echo "<option value='" . $grade['MaLop'] . "' ".($grade['MaLop']==$data['MaLop']?'selected':'').">" . $grade['TenLop'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">Khóa học</label>
            <div class="col-sm-3">
                <input type="text" name="KhoaHoc" class="form-control" required="required" value="<?php echo $data['KhoaHoc'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">Điện thoại</label>
            <div class="col-sm-3">
                <input type="text" name="DienThoai" class="form-control" required="required" value="<?php echo $data['DienThoai'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">Email</label>
            <div class="col-sm-3">
                <input type="text" name="Email" class="form-control" required="required" value="<?php echo $data['Email'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">Ảnh thẻ</label>
            <div class="col-sm-4">
                <input type="text" name="AnhThe" class="form-control" required="required" value="<?php echo $data['AnhThe'] ?>">
            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Hình thức đăng ký</label>
            <div class="col-sm-5">
                <select class="form-control" name="HinhThucDK" id="">
                    <option value="online" <?php echo $data['HinhThucDK']=="online"?"selected":""; ?>>Online</option>
                    <option value="offline"<?php echo $data['HinhThucDK']=="offline"?"selected":""; ?>>Offline</option>
                </select>
            </div>
        </div>


        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">Loại đăng ký</label>
            <div class="col-sm-4">
                <select class="form-control" name="LoaiDK" id="">
                    <option value="lamlai" <?php echo $data['LoaiDK']=="lamlai"?"selected":""; ?> >Làm Lại</option>
                    <option value="taomoi" <?php echo $data['LoaiDK']=="taomoi"?"selected":""; ?>>Tạo Mới</option>
                </select>
            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Kiểm tra lệ phí</label>
            <div class="col-sm-5">
                <select class="form-control" name="KTLePhi" id="">
                    <option value="yes" <?php echo $data['KTLePhi']=="yes"?"selected":""; ?>>Đã đóng</option>
                    <option value="no" <?php echo $data['KTLePhi']=="no"?"selected":""; ?>>Chưa Đóng</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Tài khoản bị trùng" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <div class="col-sm-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary"> Cập Nhật</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=createcard" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
