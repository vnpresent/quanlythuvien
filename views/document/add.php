<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=document&action=insert" method="post">
        <h2>Thêm tài liệu</h2>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TenTL</label>
            <div class="col-sm-8">
                <input type="text" name="TenTL" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">MaTheLoai</label>
            <div class="col-sm-2">
                <!-- <input type="text" name="MaTheLoai"  class="form-control" required="required"> -->
                <select name="MaTheLoai" class="form-control" aria-label="Default select example">
                    <option value="0" selected>Thể loại 0</option>
                    <option value="1">Thể loại 1</option>
                    <option value="2">Thể loại 2</option>
                    <option value="3">Thể loại 3</option>
                </select>
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">MaDV</label>
            <div class="col-sm-2">
                <input type="text" name="MaDV"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">MaTG</label>
            <div class="col-sm-2">
                <input type="text" name="MaTG"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">

            <label for="inputEmail3" class="col-sm-2  col-form-label">MaNXB</label>
            <div class="col-sm-2">
                <!-- <input type="text" name="MaNXB"  class="form-control" required="required"> -->
                <select name="MaNXB" class="form-control" aria-label="Default select example">
                    <option value="0" selected>MaNXB 0</option>
                    <option value="1">MaNXB 1</option>
                    <option value="2">MaNXB 2</option>
                    <option value="3">MaNXB 3</option>
                </select>
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">NamXB</label>
            <div class="col-sm-2">
                <input type="text" name="NamXB"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">MaNgonNgu</label>
            <div class="col-sm-2">
                <input type="text" name="MaNgonNgu"  class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">SoTrang</label>
            <div class="col-sm-2">
                <input type="text" name="SoTrang"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">KhoGiay</label>
            <div class="col-sm-2">
                <input type="text" name="KhoGiay"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">LanTB</label>
            <div class="col-sm-2">
                <input type="text" name="LanTB"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">GiaBia</label>
            <div class="col-sm-2">
                <input type="text" name="GiaBia"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">SoPH</label>
            <div class="col-sm-2">
                <input type="text" name="SoPH"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">NgayPH</label>
            <div class="col-sm-2">
                <input type="date" name="NgayPH"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TongSo</label>
            <div class="col-sm-3">
                <input type="text" name="TongSo"  class="form-control" required="required">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">MaVT</label>
            <div class="col-sm-4">
                <input type="text" name="MaVT"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label" >NoiDung</label>
            <div class="col-sm-8">
                <textarea  type="text" name="NoiDung"  class="form-control" required="required" style="height: 100px"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Tài khoản bị trùng" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=document" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
