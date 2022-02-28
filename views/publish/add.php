<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=publish&action=insert" method="post">
        <h2>Thêm</h2>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">TenNXB</label>
            <div class="col-sm-2">
                <input type="text" name="TenNXB"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">GhiChu</label>
            <div class="col-sm-2">
                <input type="text" name="GhiChu"  class="form-control" required="required">
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
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=publish" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
