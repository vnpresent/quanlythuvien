<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=breach&action=insert" method="post">
        <h2>Thêm tác giả</h2>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">SoThe</label>
            <div class="col-sm-6">
                <input type="text" name="SoThe"  class="form-control" required="required">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">LyDoVP</label>
            <div class="col-sm-6">
                <input type="text" name="LyDoVP"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">HTXuLy</label>
            <div class="col-sm-6">
                <input type="text" name="HTXuLy"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">NgayMoThe</label>
            <div class="col-sm-6">
                <input type="date" name="NgayMoThe"  class="form-control" required="required">
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Tài khoản bị trùng" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=breach" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>