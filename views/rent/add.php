<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=rent&action=insert" method="post">
        <h2>Mượn tài liệu</h2>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Số thẻ</label>
            <div class="col-sm-6">
                <input type="text" name="SoThe"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row" style="margin-top:10px">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mã cá biệt</label>
            <div class="col-sm-2">
                <input name="MaCaBiet[]" id="" cols="80" rows="10">
            </div>

            <label for="inputEmail3" class="col-form-label">Kiểu mượn</label>
            <div class="col-sm-1">
                <select class="form-control" name="KieuMuon[]" id="">
                    <option value="demve" selected >Đem Về</option>
                    <option value="taicho">Tại Chỗ</option>
                </select>
            </div>
            <label for="inputEmail3" class="col-form-label">Hạn trả</label>
            <div class="col-sm-2">
                <input type="date" name="HanTra[]"  class="form-control" required="required">
            </div>
        </div>
        <div id="liveAlertPlaceholder" style="margin-top:10px;"></div>
        <div class="col-sm-8">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-primary" id="liveAlertBtn" style="margin-top:10px;margin-right:10px;">Thêm sách mượn</button>
        <button type="button" id="close" class="btn btn-primary" id="liveAlertBtn" style="margin-top:10px;">Xóa sách mượn</button>
            </div>
            </div>
        <script>
                    var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
                    var alertTrigger = document.getElementById('liveAlertBtn')

                    function alert(message, type) {
                    var wrapper = document.createElement('div')
                    wrapper.innerHTML = '<div id="div1" class="form-group row" style="margin-top:10px"><label for="inputEmail3" class="col-sm-2 col-form-label">Mã cá biệt</label><div class="col-sm-2"><input name="MaCaBiet[]" id="" cols="80" rows="10"></div><label for="inputEmail3" class="col-form-label">Kiểu mượn</label><div class="col-sm-1"><select class="form-control" name="KieuMuon[]" id=""><option value="demve" selected >Đem Về</option><option value="taicho">Tại Chỗ</option></select></div><label for="inputEmail3" class="col-form-label">Hạn trả</label><div class="col-sm-2"><input type="date" name="HanTra[]"  class="form-control" required="required"></div></div>';
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


        <!-- <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mã cá biệt</label>
            <div class="col-sm-6">
                <input name="MaCaBiet[]" id="" cols="80" rows="10">
            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Kiểu mượn</label>
            <div class="col-sm-6">
                <select class="form-control" name="KieuMuon[]" id="">
                    <option value="demve" selected >Đem Về</option>
                    <option value="taicho">Tại Chỗ</option>
                </select>
            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Hạn trả</label>
            <div class="col-sm-6">
                <input type="date" name="HanTra[]"  class="form-control" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mã cá biệt</label>
            <div class="col-sm-6">
                <input name="MaCaBiet[]" id="" cols="80" rows="10">
            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Kiểu mượn</label>
            <div class="col-sm-6">
                <select class="form-control" name="KieuMuon[]" id="">
                    <option value="demve" selected >Đem Về</option>
                    <option value="taicho">Tại Chỗ</option>
                </select>
            </div>
            <label for="inputEmail3" class="col-sm-2 col-form-label">Hạn trả</label>
            <div class="col-sm-6">
                <input type="date" name="HanTra[]"  class="form-control" required="required">
            </div>
        </div> -->


        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='true') ? "Thành công" : "" ?></label>
            <label class="text-danger ml-2" for=""><?php echo (isset($_GET['result']) && $_GET['result']=='false') ? "Tài khoản bị trùng" : "" ?></label>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Mượn</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=rent" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
