<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=document&action=update" method="post">
    <h2>Cập nhật tài liệu</h2>
        <input type="text" hidden name="MaTL" class="form-control" required="required" value="<?php echo $data['MaTL'] ?>">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TenTL</label>
            <div class="col-sm-8">
                <input type="text" name="TenTL" class="form-control" required="required" value="<?php echo $data['TenTL'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">MaTheLoai</label>
            <div class="col-sm-2">
                <!-- <input type="text" name="MaTheLoai"  class="form-control" required="required" value=""> -->
                <select name="MaTheLoai" class="form-control" aria-label="Default select example">
                    <?php
                        foreach($categorys as $category)
                        {                       
                            echo "<option value='".$category['MaTheLoai']."'   ".($category['MaTheLoai']==$data['MaTheLoai']?'selected':'')."  >".$category['TenTheLoai']."</option>";
                        }
                    ?>
                </select>
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">MaDV</label>
            <div class="col-sm-2">
                <select name="MaDV" class="form-control" aria-label="Default select example">
                <?php
                        foreach($units as $unit)
                        {
                            echo "<option value='".$unit['MaDV']."' ".($unit['MaDV']==$data['MaDV']?'selected':'').">".$unit['TenDV']."</option>";
                        }
                    ?>
                </select>
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">MaTG</label>
            <div class="col-sm-2">
            <select name="MaTG" class="form-control" aria-label="Default select example">
                <?php
                        foreach($authors as $author)
                        {
                            echo "<option value='".$author['MaTG']."' ".($author['MaTG']==$data['MaTG']?'selected':'')." >".$author['TenTG']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">MaNXB</label>
            <div class="col-sm-2">
            <select name="MaNXB" class="form-control" aria-label="Default select example">
                <?php
                        foreach($publishs as $publish)
                        {
                            echo "<option value='".$publish['MaNXB']."' ".($publish['MaNXB']==$data['MaNXB']?'selected':'')." >".$publish['TenNXB']."</option>";
                        }
                    ?>
                </select>
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">NamXB</label>
            <div class="col-sm-2">
                <input type="text" name="NamXB"  class="form-control" required="required" value="<?php echo $data['NamXB'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">MaNgonNgu</label>
            <div class="col-sm-2">
            <select name="MaNgonNgu" class="form-control" aria-label="Default select example">
                <?php
                        foreach($languages as $language)
                        {
                            echo "<option value='".$language['MaNgonNgu']."' ".($language['MaNgonNgu']==$data['MaNgonNgu']?'selected':'')." >".$language['TenNgonNgu']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>



        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">SoTrang</label>
            <div class="col-sm-2">
                <input type="text" name="SoTrang"  class="form-control" required="required" value="<?php echo $data['SoTrang'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">KhoGiay</label>
            <div class="col-sm-2">
                <input type="text" name="KhoGiay"  class="form-control" required="required" value="<?php echo $data['KhoGiay'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">LanTB</label>
            <div class="col-sm-2">
                <input type="text" name="LanTB"  class="form-control" required="required" value="<?php echo $data['LanTB'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">GiaBia</label>
            <div class="col-sm-2">
                <input type="text" name="GiaBia"  class="form-control" required="required" value="<?php echo $data['GiaBia'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">SoPH</label>
            <div class="col-sm-2">
                <input type="text" name="SoPH"  class="form-control" required="required" value="<?php echo $data['SoPH'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">NgayPH</label>
            <div class="col-sm-2">
                <input type="date" name="NgayPH"  class="form-control" required="required" value="<?php echo $data['NgayPH'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TongSo</label>
            <div class="col-sm-3">
                <input type="text" name="TongSo"  class="form-control" required="required" value="<?php echo $data['TongSo'] ?>">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">MaVT</label>
            <div class="col-sm-4">
            <select name="MaVT" class="form-control" aria-label="Default select example">
                <?php
                        foreach($positions as $position)
                        {
                            echo "<option value='".$position['MaVT']."' ".($position['MaVT']==$data['MaVT']?'selected':'')." >".$position['TenVT']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">NoiDung</label>
            <div class="col-sm-8">
                <textarea type="text" name="NoiDung"  class="form-control" required="required" value="<?php echo $data['NoiDung'] ?>" style="height: 100px"></textarea>
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
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=document" role="button">Thoát</a>
        </div>
    </form>
</div>
