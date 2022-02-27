<div class="container col-10">
    <form action="index.php?controller=user&action=update&id=<?php echo $data['id']; ?>" method="post">
    <input type="text" hidden name="id" class="form-control" value="<?php echo $data['id']; ?>">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" name="Username" disabled class="form-control" value="<?php echo $data['Username']; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">HoTen</label>
            <div class="col-sm-10">
                <input type="text" name="HoTen" class="form-control" value="<?php echo $data['HoTen']; ?>" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">NamSinh</label>
            <div class="col-sm-10">
                <input type="date" name="NamSinh" class="form-control" value="<?php echo $data['NamSinh']; ?>" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">GioiTinh</label>
            <div class="col-sm-10">
                <input type="text" name="GioiTinh" class="form-control" value="<?php echo $data['GioiTinh']; ?>" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" name="Email" class="form-control" value="<?php echo $data['Email']; ?>" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">DienThoai</label>
            <div class="col-sm-10">
                <input type="text" name="DienThoai" class="form-control" value="<?php echo $data['DienThoai']; ?>" required="required">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger" for=""><?php echo (isset($_GET['result']) && $_GET['result']) ? "Thành công" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=user" role="button">Thoát</a>
        </div>
    </form>
</div>
