<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=user&action=insert" method="post">
        <h2>Thêm người dùng</h2>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-4">
                <input type="text" name="Username" class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">Mật khẩu</label>
            <div class="col-sm-3">
                <input type="password" name="Password" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Họ tên</label>
            <div class="col-sm-4">
                <input type="text" name="HoTen"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">Năm sinh</label>
            <div class="col-sm-3">
                <input type="date" name="NamSinh"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Giới tính</label>
            <div class="col-sm-4">
                <!-- <input type="text" name="GioiTinh"  class="form-control" required="required"> -->
                <input type="radio" name="GioiTinh" value="Nam">Nam
                <input type="radio" name="GioiTinh" value="Nữ">Nữ
            </div>
            
            <label for="inputEmail3" class="col-1 col-form-label">Email</label>
            <div class="col-sm-3">
                <input type="email" name="Email"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Điện thoại</label>
            <div class="col-sm-8">
                <input type="tel" pattern="[0-9]*" name="DienThoai"  class="form-control" required="required">
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
                    <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=user" role="button">Thoát</a>
                </div>
            </div>
            
        </div>
    </form>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
