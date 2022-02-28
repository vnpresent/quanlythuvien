<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=document&action=update" method="post">
    <h2>Cập nhật tài liệu</h2>
        <input type="text" hidden name="MaTL" class="form-control" required="required" value="<?php echo $data['MaTL'] ?>">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TenTL</label>
            <div class="col-sm-8">
                <input type="text" name="TenTL" class="form-control" required="required" value="<?php echo $data['TenTL'] ?>">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">MaTheLoai</label>
            <div class="col-sm-2">
                <input type="text" name="MaTheLoai"  class="form-control" required="required" value="<?php echo $data['MaTheLoai'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">MaDV</label>
            <div class="col-sm-2">
                <input type="text" name="MaDV"  class="form-control" required="required" value="<?php echo $data['MaDV'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">MaTG</label>
            <div class="col-sm-2">
                <input type="text" name="MaTG"  class="form-control" required="required" value="<?php echo $data['MaTG'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">MaNXB</label>
            <div class="col-sm-2">
                <input type="text" name="MaNXB"  class="form-control" required="required" value="<?php echo $data['MaNXB'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">NamXB</label>
            <div class="col-sm-2">
                <input type="text" name="NamXB"  class="form-control" required="required" value="<?php echo $data['NamXB'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">MaNgonNgu</label>
            <div class="col-sm-2">
                <input type="text" name="MaNgonNgu"  class="form-control" required="required" value="<?php echo $data['MaNgonNgu'] ?>">
            </div>
        </div>



        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">SoTrang</label>
            <div class="col-sm-2">
                <input type="text" name="SoTrang"  class="form-control" required="required" value="<?php echo $data['SoTrang'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">KhoGiay</label>
            <div class="col-sm-2">
                <input type="text" name="KhoGiay"  class="form-control" required="required" value="<?php echo $data['KhoGiay'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">LanTB</label>
            <div class="col-sm-2">
                <input type="text" name="LanTB"  class="form-control" required="required" value="<?php echo $data['LanTB'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">GiaBia</label>
            <div class="col-sm-2">
                <input type="text" name="GiaBia"  class="form-control" required="required" value="<?php echo $data['GiaBia'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">SoPH</label>
            <div class="col-sm-2">
                <input type="text" name="SoPH"  class="form-control" required="required" value="<?php echo $data['SoPH'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">NgayPH</label>
            <div class="col-sm-2">
                <input type="date" name="NgayPH"  class="form-control" required="required" value="<?php echo $data['NgayPH'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TongSo</label>
            <div class="col-sm-3">
                <input type="text" name="TongSo"  class="form-control" required="required" value="<?php echo $data['TongSo'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">MaVT</label>
            <div class="col-sm-4">
                <input type="text" name="MaVT"  class="form-control" required="required" value="<?php echo $data['MaVT'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">NoiDung</label>
            <div class="col-sm-8">
                <textarea type="text" name="NoiDung"  class="form-control" required="required" value="<?php echo $data['NoiDung'] ?>" style="height: 100px"></textarea>
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
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=document" role="button">Thoát</a>
        </div>
    </form>
</div>
