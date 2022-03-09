<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=enter&action=insert" method="post">
        <h2>Thêm phiếu nhập</h2>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mã tài liệu</label>
            <div class="col-sm-5">
                <select name="MaTL" class="form-control" aria-label="Default select example">
                    <?php
                        foreach($documents as $document)
                        {
                            echo "<option value='".$document['MaTL']."' selected>".$document['TenTL']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mã nhà cung cấp</label>
            <div class="col-sm-5">
                <select name="MaNCC" class="form-control" aria-label="Default select example">
                    <?php
                        foreach($provideds as $provided)
                        {
                            echo "<option value='".$provided['MaNCC']."' selected>".$provided['TenNCC']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Số lượng</label>
            <div class="col-sm-5">
            <input type="number" name="Soluong" class="form-control" required="required">

            </div>
        </div>


<div class="form-group row">
    <div class="col-sm-5"></div>
    <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result'] == 'true') ? "Thành công" : "" ?></label>
    <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result'] == 'false') ? "Tài khoản bị trùng" : "" ?></label>
</div>

<div class="form-group row mx-auto">
    <div class="col-sm-2"></div>
    <div class="col-sm-5">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=enter" role="button">Thoát</a>
        </div>
    </div>
</div>
</form>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
