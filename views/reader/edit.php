<div class="container col-10">
    <form action="index.php?controller=reader&action=update" method="post">

        <input type="text" hidden name="SoThe" class="form-control" required="required" value="<?php echo $data['SoThe'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">AnhBarcode</label>
            <div class="col-sm-5">
                <input type="text" name="AnhBarcode" class="form-control" required="required" value="<?php echo $data['AnhBarcode'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">HSD</label>
            <div class="col-sm-5">
                <input type="date" name="HSD" class="form-control" required="required" value="<?php echo $data['HSD'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">TinhTrang</label>
            <div class="col-sm-5">
                <input type="text" name="TinhTrang" class="form-control" required="required" value="<?php echo $data['TinhTrang'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Tài khoản bị trùng" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <button type="submit" class="btn btn-primary"> Cập Nhật</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=reader" role="button">Thoát</a>
        </div>
    </form>
</div>
