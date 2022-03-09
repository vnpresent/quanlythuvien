<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=grade&action=insert" method="post">
        <h2>Thêm lớp học</h2>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">Tên lớp</label>
            <div class="col-sm-6">
                <input type="text" name="TenLop"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">MaDV</label>
            <div class="col-sm-6">
                <select name="MaDV" class="form-control" aria-label="Default select example">
                    <?php
                        foreach($units as $unit)
                        {
                            echo "<option value='".$unit['MaDV']."' selected>".$unit['TenDV']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Tài khoản bị trùng" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <div class="col-sm-5">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=grade" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
