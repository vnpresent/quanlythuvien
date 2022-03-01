<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=createcard&action=insert" method="post">
        <h2>Thêm</h2>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">HoTen</label>
            <div class="col-sm-5">
                <input type="text" name="HoTen" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">NamSinh</label>
            <div class="col-sm-5">
                <input type="date" name="NamSinh" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">GioiTinh</label>
            <div class="col-sm-5">
                <select class="form-control" name="GioiTinh" id="">
                    <option value="nam">Nam</option>
                    <option value="nu">Nữ</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">ChucDanh</label>
            <div class="col-sm-5">
                <input type="text" name="ChucDanh" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">MaDV</label>
            <div class="col-sm-5">
                <select name="MaDV" class="form-control" aria-label="Default select example">
                    <?php
                    foreach ($units as $unit) {
                        echo "<option value='" . $unit['MaDV'] . "' selected>" . $unit['TenDV'] . "</option>";
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
                        echo "<option value='" . $grade['MaLop'] . "'>" . $grade['TenLop'] . "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">KhoaHoc</label>
            <div class="col-sm-5">
                <input type="text" name="KhoaHoc" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">DienThoai</label>
            <div class="col-sm-5">
                <input type="text" name="DienThoai" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" name="Email" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">AnhThe</label>
            <div class="col-sm-5">
                <input type="text" name="AnhThe" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">HinhThucDK</label>
            <div class="col-sm-5">
                <select class="form-control" name="HinhThucDK" id="">
                    <option value="online">Online</option>
                    <option value="offline">Offline</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">LoaiDK</label>
            <div class="col-sm-5">
                <select class="form-control" name="LoaiDK" id="">
                    <option value="lamlai">Làm Lại</option>
                    <option value="taomoi">Tạo Mới</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">KTLePhi</label>
            <div class="col-sm-5">
                <select class="form-control" name="KTLePhi" id="">
                    <option value="yes">Đã đóng</option>
                    <option value="no">Chưa Đóng</option>
                </select>
            </div>
        </div>
</div>

<div class="form-group row">
    <div class="col-sm-5"></div>
    <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result'] == 'true') ? "Thành công" : "" ?></label>
    <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result'] == 'false') ? "Tài khoản bị trùng" : "" ?></label>
</div>

<div class="form-group row mx-auto">
    <div class="col-sm-5"></div>
    <div class="col-sm-8">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=createcard" role="button">Thoát</a>
        </div>
    </div>
</div>
</form>
</div>