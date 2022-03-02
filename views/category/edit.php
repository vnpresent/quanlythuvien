<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=category&action=update" method="post">
        <h2>Chỉnh sửa</h2>
        <input type="text" hidden name="MaTheLoai" class="form-control" required="required" value="<?php echo $data['MaTheLoai'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên thể loại</label>
            <div class="col-sm-8">
                <input type="text" name="TenTheLoai" class="form-control" required="required" value="<?php echo $data['TenTheLoai'] ?>">
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
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=category" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
