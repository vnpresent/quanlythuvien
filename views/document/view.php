<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Xem tài liệu</h2>
    <input type="text" hidden name="MaTL" class="form-control"  value="<?php echo $data['MaTL'] ?>">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">TenTL</label>
        <div class="col-sm-8">
            <input type="text" name="TenTL" class="form-control" readonly value="<?php echo $data['TenTL'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Thể loại</label>
        <div class="col-sm-2">
            <!-- <input type="text" name="MaTheLoai"  class="form-control"  value=""> -->
            <select name="MaTheLoai" class="form-control" readonly aria-label="Default select example">
                <?php
                foreach ($categorys as $category) {
                    echo "<option value='" . $category['MaTheLoai'] . "'   " . ($category['MaTheLoai'] == $data['MaTheLoai'] ? 'selected' : '') . "  >" . $category['TenTheLoai'] . "</option>";
                }
                ?>
            </select>
        </div>
        <label for="inputEmail3" class="col-1 col-form-label">Đơn vị</label>
        <div class="col-sm-2">
            <select name="MaDV" class="form-control" readonly aria-label="Default select example">
                <?php
                foreach ($units as $unit) {
                    echo "<option value='" . $unit['MaDV'] . "' " . ($unit['MaDV'] == $data['MaDV'] ? 'selected' : '') . ">" . $unit['TenDV'] . "</option>";
                }
                ?>
            </select>
        </div>
        <label for="inputEmail3" class="col-1 col-form-label">Tác giả</label>
        <div class="col-sm-2">
        <?php
                foreach(json_decode($data['MaTG']) as $MaTG)
                {
                    ?>
                        <select name="MaTG[]" readonly class="form-control" aria-label="Default select example">
                    <?php
                            foreach($authors as $author)
                            {
                                echo "<option value='".$author['MaTG']."' ".($author['MaTG']==$MaTG?'selected':'')." >".$author['TenTG']."</option>";
                            }
                        ?>
                    </select>
                    <div id="liveAlertPlaceholder" style="margin-top:10px;"></div>
                    <?php
                }
            ?>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nhà xuất bản</label>
        <div class="col-sm-2">
            <select name="MaNXB" class="form-control" readonly aria-label="Default select example">
                <?php
                foreach ($publishs as $publish) {
                    echo "<option value='" . $publish['MaNXB'] . "' " . ($publish['MaNXB'] == $data['MaNXB'] ? 'selected' : '') . " >" . $publish['TenNXB'] . "</option>";
                }
                ?>
            </select>
        </div>
        <label for="inputEmail3" class="col-1 col-form-label">Năm xuất bản</label>
        <div class="col-sm-2">
            <input type="text" name="NamXB" readonly class="form-control"  value="<?php echo $data['NamXB'] ?>">
        </div>
        <label for="inputEmail3" class="col-1 col-form-label">Ngôn ngữ</label>
        <div class="col-sm-2">
            <select name="MaNgonNgu" class="form-control" readonly aria-label="Default select example">
                <?php
                foreach ($languages as $language) {
                    echo "<option value='" . $language['MaNgonNgu'] . "' " . ($language['MaNgonNgu'] == $data['MaNgonNgu'] ? 'selected' : '') . " >" . $language['TenNgonNgu'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Số trang</label>
        <div class="col-sm-2">
            <input type="text" name="SoTrang" class="form-control" readonly  value="<?php echo $data['SoTrang'] ?>">
        </div>
        <label for="inputEmail3" class="col-1 col-form-label">Khổ giấy</label>
        <div class="col-sm-2">
            <input type="text" name="KhoGiay" class="form-control" readonly  value="<?php echo $data['KhoGiay'] ?>">
        </div>
        <label for="inputEmail3" class="col-1 col-form-label">Lần tái bản</label>
        <div class="col-sm-2">
            <input type="text" name="LanTB" class="form-control" readonly  value="<?php echo $data['LanTB'] ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">GiaBia</label>
        <div class="col-sm-2">
            <input type="text" name="GiaBia" class="form-control" readonly  value="<?php echo $data['GiaBia'] ?>">
        </div>
        <label for="inputEmail3" class="col-1 col-form-label">SoPH</label>
        <div class="col-sm-2">
            <input type="text" name="SoPH" class="form-control" readonly  value="<?php echo $data['SoPH'] ?>">
        </div>
        <label for="inputEmail3" class="col-1 col-form-label">NgayPH</label>
        <div class="col-sm-2">
            <input type="date" name="NgayPH" class="form-control"  readonly value="<?php echo $data['NgayPH'] ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Tổng số</label>
        <div class="col-sm-3">
            <input type="text" name="TongSo" class="form-control" readonly  value="<?php echo $data['TongSo'] ?>">
        </div>
        <label for="inputEmail3" class="col-1 col-form-label">Vị trí</label>
        <div class="col-sm-4">
            <select name="MaVT" readonly class="form-control" aria-label="Default select example">
                <?php
                foreach ($positions as $position) {
                    echo "<option value='" . $position['MaVT'] . "' " . ($position['MaVT'] == $data['MaVT'] ? 'selected' : '') . " >" . $position['TenVT'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nội dung</label>
        <div class="col-sm-8">
            <textarea type="text" name="NoiDung" class="form-control"  readonly value="<?php echo $data['NoiDung'] ?>" style="height: 100px"><?php echo $data['NoiDung'] ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result'] == 'true') ? "Thành công" : "" ?></label>
        <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result'] == 'false') ? "Tài khoản bị trùng" : "" ?></label>
    </div>

    <div class="form-group row mx-auto">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=document" role="button">Thoát</a>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="container-fluid col-sm-8" style="padding-top:20px">
            <h2>Chi tiết tài liệu</h2>
            <table class="table table-striped bg-white rounded shadow-sm  table-hover">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                </div>
                <thead class="bg-info text-white">
                    <tr class="border-dark">
                        <th>MaCaBiet</th>
                        <th>MaTL</th>
                        <th>AnhBarcode</th>
                        <th>NgayCN</th>
                        <th>NguoiCN</th>
                        <th>TinhTrang</th>
                        <!-- <th>XuLy</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($documentdetails) && is_array($documentdetails)) {

                        foreach ($documentdetails as $documentdetal) {
                            echo "<tr>";
                            echo "<td class=\"border-dark\" scope=\"row\">" . $documentdetal['MaCaBiet'] . "</td>";
                            echo "<td class=\"border-dark\">" . $documentdetal['MaTL'] . "</td>";
                            echo "<td class=\"border-dark\">" . $documentdetal['AnhBarcode'] . "</td>";
                            echo "<td class=\"border-dark\">" . $documentdetal['NgayCN'] . "</td>";
                            echo "<td class=\"border-dark\">" . $documentdetal['NguoiCN'] . "</td>";
                            echo "<td class=\"border-dark\">" . $documentdetal['TinhTrang'] . "</td>";
                            // echo "<td class=\"border-dark\">" . $documentdetal['XuLy'] . "</td>";
                        }
                    }
                    ?>
            </table>
        </div>
    </div>
</div>

<?php include_once('././assets/layouts/footer.php'); ?>
