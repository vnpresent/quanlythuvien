<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=document&action=insert" method="post">
        <h2>Thêm tài liệu</h2>
        <div class="col-sm-10" style="margin-bottom:10px">
        <div class="d-inline-flex p-2 bd-highlight">
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=category&action=add" role="button">Thêm thể loại</a>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=unit&action=add" role="button">Thêm đơn vị</a>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=author&action=add" role="button">Thêm tác giả</a>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=publish&action=add" role="button">Thêm nhà xuất bản</a>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=language&action=add" role="button">Thêm ngôn ngữ</a>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=position&action=add" role="button">Thêm vị trí</a>
        </div>
    </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên tài liệu</label>
            <div class="col-sm-8">
                <input type="text" name="TenTL" class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Thể loại</label>
            <div class="col-sm-2">
                <!-- <input type="text" name="MaTheLoai"  class="form-control" required="required"> -->
                <select name="MaTheLoai" class="form-control" aria-label="Default select example">
                    <?php
                        foreach($categorys as $category)
                        {
                            echo "<option value='".$category['MaTheLoai']."' selected>".$category['TenTheLoai']."</option>";
                        }
                    ?>
                </select>
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">Đơn vị</label>
            <div class="col-sm-2">
                <select name="MaDV" class="form-control" aria-label="Default select example">
                <?php
                        foreach($units as $unit)
                        {
                            echo "<option value='".$unit['MaDV']."' selected>".$unit['TenDV']."</option>";
                        }
                    ?>
                </select>
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">Tác giả</label>
            <div class="col-sm-2">
                
                <select name="MaTG[]" class="form-control" aria-label="Default select example">
                    <?php
                        foreach($authors as $author)
                        {
                            echo "<option value='".$author['MaTG']."' selected>".$author['TenTG']."</option>";
                        }
                    ?>
                </select>
                    
                    <!-- <div class="col-sm-2 col-md-2"><a  href="#"><i class="fas fa-trash"></i></a></div> -->
                
                <div id="liveAlertPlaceholder" style="margin-top:10px;"></div>
                <button type="button" class="btn btn-primary" id="liveAlertBtn" style="margin-top:10px;">Thêm tác giả</button>
                <button type="button" id="close" class="btn btn-primary" id="liveAlertBtn" style="margin-top:10px;">Xóa tác giả</button>
                <script>
                    var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
                    var alertTrigger = document.getElementById('liveAlertBtn')

                    function alert(message, type) {
                    var wrapper = document.createElement('div')
                    wrapper.innerHTML = '<div id="div1" class="row" style="margin-top:10px;"><select name="MaTG[]" class="form-control" aria-label="Default select example">'+'<?php foreach($authors as $author) {echo "<option value=".$author['MaTG'].">".$author['TenTG']."</option>";}?>'+'</select></div>'
                    alertPlaceholder.append(wrapper )
                    }

                    if (alertTrigger) {
                    alertTrigger.addEventListener('click', function () {
                        alert('Nice, you triggered this alert message!', 'success')
                    })
                    }
                    $(document).ready(function(){
                    $("#close").click(function(){
                        $("#div1").remove();
                    });
                    });
                </script>
            
            </div>
        </div>

        <div class="form-group row">

            <label for="inputEmail3" class="col-sm-2  col-form-label">Nhà xuất bản</label>
            <div class="col-sm-2">
                <!-- <input type="text" name="MaNXB"  class="form-control" required="required"> -->
                <select name="MaNXB" class="form-control" aria-label="Default select example">
                <?php
                        foreach($publishs as $publish)
                        {
                            echo "<option value='".$publish['MaNXB']."' selected>".$publish['TenNXB']."</option>";
                        }
                    ?>
                </select>
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">Năm xuất bản</label>
            <div class="col-sm-2">
                <input type="text" name="NamXB"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">Ngôn ngữ</label>
            <div class="col-sm-2">
                <select name="MaNgonNgu" class="form-control" aria-label="Default select example">
                <?php
                        foreach($languages as $language)
                        {
                            echo "<option value='".$language['MaNgonNgu']."' selected>".$language['TenNgonNgu']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Số trang</label>
            <div class="col-sm-2">
                <input type="text" name="SoTrang"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">Khổ giấy</label>
            <div class="col-sm-2">
                <input type="text" name="KhoGiay"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">LanTB</label>
            <div class="col-sm-2">
                <input type="text" name="LanTB"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">GiaBia</label>
            <div class="col-sm-2">
                <input type="text" name="GiaBia"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">SoPH</label>
            <div class="col-sm-2">
                <input type="text" name="SoPH"  class="form-control" required="required">
            </div>

            <label for="inputEmail3" class="col-1 col-form-label">NgayPH</label>
            <div class="col-sm-2">
                <input type="date" name="NgayPH"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tổng số</label>
            <div class="col-sm-3">
                <input type="text" name="TongSo"  class="form-control" required="required">
            </div>
            <label for="inputEmail3" class="col-1 col-form-label">Vị trí</label>
            <div class="col-sm-4">
                <select name="MaVT" class="form-control" aria-label="Default select example">
                <?php
                        foreach($positions as $position)
                        {
                            echo "<option value='".$position['MaVT']."' selected>".$position['TenVT']."</option>";
                        }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label" >Nội dung</label>
            <div class="col-sm-8">
                <textarea  type="text" name="NoiDung"  class="form-control" required="required" style="height: 100px"></textarea>
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
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=document" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
