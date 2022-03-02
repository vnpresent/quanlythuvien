<div class="container-fluid" style="padding-top:20px">
<h2>Chỉnh sửa</h2>
    <form action="index.php?controller=rent&action=update" method="post">

        <input type="text" hidden name="ID_MuonTra" class="form-control" required="required" value="<?php echo $data['ID_MuonTra'] ?>">

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Kiểu mượn</label>
            <div class="col-sm-8">
                <select class="form-control" name="KieuMuon" id="">
                    <option value="demve" selected>Đem Về</option>
                    <!-- <option value="taicho">Tại Chỗ</option> -->
                </select>
                <!-- <input type="text" name="KieuMuon"  class="form-control" required="required" value="<?php echo $data['KieuMuon'] ?>"> -->
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Hạn trả</label>
            <div class="col-sm-8">
                <input type="date" name="HanTra" class="form-control" required="required" value="<?php echo $data['HanTra'] ?>">
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
            <button type="submit" class="btn btn-primary"> Cập Nhật</button>
            <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=rent" role="button">Thoát</a>
            </div>
            </div>
        </div>
    </form>
</div>
