<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=user&action=per&id=<?php echo $data['id']; ?>" method="post">
    <h2>Phân quyền</h2>
    <input type="text" hidden name="id" class="form-control" value="<?php echo $data['id']; ?>">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-8">
                <input type="text" name="Username" disabled class="form-control" value="<?php echo $data['Username']; ?>">
            </div>
        </div>
        <!-- (Gồm: admin,kythuat,kehoach,thuthu) Làm Drop Down -->
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Chức danh</label>
            <div class="col-sm-8">
                <!-- <input type="text" name="ChucDanh" class="form-control" value="<?php echo $data['ChucDanh']; ?>" required="required"> -->

                <select name="ChucDanh" class="form-control" aria-label="Default select example">
                    <option value='<?php echo $data['ChucDanh']; ?>' selected><?php echo $data['ChucDanh']; ?></option>
                    <option value='admin' >admin</option>
                    <option value='kythuat' >kythuat</option>
                    <option value='kehoach' >kehoach</option>
                    <option value='thuthu' >thuthu</option>
                </select>
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
