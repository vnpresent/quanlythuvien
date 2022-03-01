<div class="container col-10">
    <form action="index.php?controller=grade&action=update" method="post">

        <input type="text" hidden name="MaLop" class="form-control" required="required" value="<?php echo $data['MaLop'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TenLop</label>
            <div class="col-sm-8">
                <input type="text" name="TenLop" class="form-control" required="required" value="<?php echo $data['TenLop'] ?>">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">MaDV</label>
            <div class="col-sm-8">
                <select name="MaDV" class="form-control" aria-label="Default select example">
                    <?php
                        foreach($units as $unit)
                        {
                            echo "<option value='".$unit['MaDV']."' ".($unit['MaDV']==$data['MaDV']?'selected':'').">".$unit['TenDV']."</option>";
                        }
                    ?>
                </select>
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
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=grade" role="button">Thoát</a>
        </div>
    </form>
</div>
