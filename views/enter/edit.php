<div class="container col-10">
    <form action="index.php?controller=enter&action=update" method="post">

        <input type="text" hidden name="IDNhap" class="form-control" required="required" value="<?php echo $data['IDNhap'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">MaTL</label>
            <div class="col-sm-5">
                <select name="MaTL" class="form-control" aria-label="Default select example">
                    <?php
                        foreach($documents as $document)
                        {
                            echo "<option value='".$document['MaTL']."' ".($document['MaTL']==$data['MaTL']?'selected':'')." >".$document['TenTL']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-1 col-form-label">MaNCC</label>
            <div class="col-sm-5">
                <select name="MaNCC" class="form-control" aria-label="Default select example">
                    <?php
                        foreach($provideds as $provided)
                        {
                            echo "<option value='".$provided['MaNCC']."' ".($provided['MaNCC']==$data['MaNCC']?'selected':'')." >".$provided['TenNCC']."</option>";
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
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=enter" role="button">Thoát</a>
        </div>
    </form>
</div>
