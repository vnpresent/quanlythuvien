<div class="container col-10">
    <form action="index.php?controller=createcard&action=update" method="post">

        <input type="text" hidden name="MaDK" class="form-control" required="required" value="<?php echo $data['MaDK'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">HoTen</label>
            <div class="col-sm-5">
                <input type="text" name="HoTen" class="form-control" required="required" value="<?php echo $data['HoTen'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">NamSinh</label>
            <div class="col-sm-5">
                <input type="date" name="NamSinh" class="form-control" required="required" value="<?php echo $data['NamSinh'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">GioiTinh</label>
            <div class="col-sm-5">
                <select class="form-control" name="GioiTinh" id="">
                    <option value="nam" <?php echo $data['GioiTinh']=="nam"?"selected":""; ?>>Nam</option>
                    <option value="nu" <?php echo $data['GioiTinh']=="nu"?"selected":""; ?>>Nữ</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">ChucDanh</label>
            <div class="col-sm-5">
                <input type="text" name="ChucDanh" class="form-control" required="required" value="<?php echo $data['ChucDanh'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">MaDV</label>
            <div class="col-sm-5">
                <select name="MaDV" class="form-control" aria-label="Default select example">
                    <?php
                    foreach ($units as $unit) {
                        echo "<option value='" . $unit['MaDV'] . "' ".($unit['MaDV']==$data['MaDV']?'selected':'').">" . $unit['TenDV'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">MaLop</label>
            <div class="col-sm-5">
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
            <label for="inputEmail3" class="col-1 col-form-label">KhoaHoc</label>
            <div class="col-sm-5">
                <input type="text" name="KhoaHoc" class="form-control" required="required" value="<?php echo $data['KhoaHoc'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">DienThoai</label>
            <div class="col-sm-5">
                <input type="text" name="DienThoai" class="form-control" required="required" value="<?php echo $data['DienThoai'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" name="Email" class="form-control" required="required" value="<?php echo $data['Email'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">AnhThe</label>
            <div class="col-sm-5">
                <input type="text" name="AnhThe" class="form-control" required="required" value="<?php echo $data['AnhThe'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">HinhThucDK</label>
            <div class="col-sm-5">
                <select class="form-control" name="HinhThucDK" id="">
                    <option value="online" <?php echo $data['HinhThucDK']=="online"?"selected":""; ?>>Online</option>
                    <option value="offline"<?php echo $data['HinhThucDK']=="offline"?"selected":""; ?>>Offline</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">LoaiDK</label>
            <div class="col-sm-5">
                <select class="form-control" name="LoaiDK" id="">
                    <option value="lamlai" <?php echo $data['LoaiDK']=="lamlai"?"selected":""; ?> >Làm Lại</option>
                    <option value="taomoi" <?php echo $data['LoaiDK']=="taomoi"?"selected":""; ?>>Tạo Mới</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">KTLePhi</label>
            <div class="col-sm-5">
                <select class="form-control" name="KTLePhi" id="">
                    <option value="yes" <?php echo $data['KTLePhi']=="yes"?"selected":""; ?>>Đã đóng</option>
                    <option value="no" <?php echo $data['KTLePhi']=="no"?"selected":""; ?>>Chưa Đóng</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Tài khoản bị trùng" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <button type="submit" class="btn btn-primary"> Cập Nhật</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=createcard" role="button">Thoát</a>
        </div>
    </form>
</div>
