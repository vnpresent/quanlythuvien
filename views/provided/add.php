<div class="container col-10">
    <form action="index.php?controller=provided&action=insert" method="post">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TenNCC</label>
            <div class="col-sm-8">
                <input type="text" name="TenNCC" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">DiaChi</label>
            <div class="col-sm-8">
                <input type="text" name="DiaChi"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">DienThoai</label>
            <div class="col-sm-8">
                <input type="text" name="DienThoai"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Tài khoản bị trùng" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=provided" role="button">Thoát</a>
        </div>
    </form>
</div>
