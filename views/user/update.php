<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=user&action=update&id=<?php echo $data['id']; ?>" method="post">
    <h2>Chỉnh sửa tài khoản</h2>
    <input type="text" hidden name="id" class="form-control" value="<?php echo $data['id']; ?>">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-4">
                <input type="text" name="Username" disabled class="form-control" value="<?php echo $data['Username']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Họ tên</label>
            <div class="col-sm-4">
                <input type="text" name="HoTen" class="form-control" value="<?php echo $data['HoTen']; ?>" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">Năm sinh</label>
            <div class="col-sm-3">
                <input type="date" name="NamSinh" class="form-control" value="<?php echo $data['NamSinh']; ?>" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Giới tính</label>
            <div class="col-sm-4">
                <!-- <input type="text" name="GioiTinh" class="form-control" value="<?php echo $data['GioiTinh']; ?>" required="required"> -->
                <input type="radio" name="GioiTinh" value="Nam" <?php  if($data['GioiTinh'] === 'Nam') echo 'checked'; ?>>Nam
                <input type="radio" name="GioiTinh" value="Nữ" <?php  if($data['GioiTinh'] === 'Nữ') echo 'checked'; ?>>Nữ    
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">Email</label>
            <div class="col-sm-3">
                <input type="text" pattern="[0-9]" name="Email" class="form-control" value="<?php echo $data['Email']; ?>" required="required">
            </div>
        </div>



        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Điện thoại</label>
            <div class="col-sm-8">
                <input type="tel" name="DienThoai" class="form-control" value="<?php echo $data['DienThoai']; ?>" required="required">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger" for=""><?php echo (isset($_GET['result']) && $_GET['result']) ? "Thành công" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=user" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
