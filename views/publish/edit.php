<div class="container-fluid" style="padding-top:20px">
<h2>Chỉnh sửa nhà xuất bản</h2>
    <form action="index.php?controller=publish&action=update" method="post">

        <input type="text" hidden name="MaNXB" class="form-control" required="required" value="<?php echo $data['MaNXB'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên nhà xuất bản</label>
            <div class="col-sm-8">
                <input type="text" name="TenNXB" class="form-control" required="required" value="<?php echo $data['TenNXB'] ?>">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Ghi chú</label>
            <div class="col-sm-8">
                <input type="text" name="GhiChu"  class="form-control" required="required" value="<?php echo $data['GhiChu'] ?>">
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
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=publish" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
