<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=breach&action=update" method="post">
        <h2>Chỉnh sửa</h2>
        <input type="text" hidden name="IDPhat" class="form-control" required="required" value="<?php echo $data['IDPhat'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Số thẻ</label>
            <div class="col-sm-8">
                <input type="text" name="SoThe" class="form-control" required="required" value="<?php echo $data['SoThe'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Lý do vi phạm</label>
            <div class="col-sm-8">
                <input type="text" name="LyDoVP" class="form-control" required="required" value="<?php echo $data['LyDoVP'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Xử lý</label>
            <div class="col-sm-8">
                <input type="text" name="HTXuLy" class="form-control" required="required" value="<?php echo $data['HTXuLy'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày mở thẻ</label>
            <div class="col-sm-8">
                <input type="date" name="NgayMoThe" class="form-control" required="required" value="<?php echo $data['NgayMoThe'] ?>">
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
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=breach" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
