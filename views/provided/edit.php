<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Chỉnh sửa nhà cung cấp</h2>
    <form action="index.php?controller=provided&action=update" method="post">

        <input type="text" hidden name="MaNCC" class="form-control" required="required" value="<?php echo $data['MaNCC'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TenNCC</label>
            <div class="col-sm-8">
                <input type="text" name="TenNCC" class="form-control" required="required" value="<?php echo $data['TenNCC'] ?>">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">DiaChi</label>
            <div class="col-sm-8">
                <input type="text" name="DiaChi"  class="form-control" required="required" value="<?php echo $data['DiaChi'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">DienThoai</label>
            <div class="col-sm-8">
                <input type="text" name="DienThoai"  class="form-control" required="required" value="<?php echo $data['DienThoai'] ?>">
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
            <button type="submit" class="btn btn-primary"> Cập Nhật</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=provided" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
