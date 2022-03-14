<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Mượn, trả tài liệu</h2>
    <div class="row g-3 my-2">
        <div class="col-md-6">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">4920</h3>
                    <p class="fs-5">Mượn tài liệu</p>
                </div>
                <i class="fas fa-cash-register fs-1 primary-text border rounded-full secondary-bg "style="width:60px;height:60px"></i>
            </div>
        </div>

        <div class="col-md-6">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">3899</h3>
                    <p class="fs-5">Trả tài liệu</p>
                </div>
                <i class="fas fa-exchange-alt fs-1 primary-text border rounded-full secondary-bg " style="width:60px;height:60px"></i>
            </div>
        </div>
        </div>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a name="" id="" class="btn btn-info" href="index.php?controller=rent&action=add" role="button" style="margin-bottom:10px;margin-right:20px;width:150px;">Mượn tài liệu</a>
            <!-- <a name="" id="" class="btn btn-info" href="index.php?controller=rent&action=back" role="button" style="margin-bottom:10px;margin-right:20px;width:100px;">Trả</a> -->
            <!-- <a name="" id="" class="btn btn-info" href="index.php?controller=rent&action=back" role="button" style="margin-bottom:10px;width:200px;">Danh sách trả tài liệu</a> -->
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>ID_MuonTra</th>
                <th>Số thẻ</th>
                <!-- <th>Mã cá biệt</th> -->
                <!-- <th>Kiểu mượn</th> -->
                <th>Ngày mượn</th>
                <th>Người cho mượn</th>
                <!-- <th>Hạn trả</th>
                <th>Loại</th>
                <th>Ngày trả</th>
                <th>Người nhận</th>
                <th>TinhTrang</th> -->
                <th style="width: 10%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $rent) {
                    echo "<tr>";
                    echo "<td class=\"border-dark\" scope=\"row\">" . $rent['ID_MuonTra'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['SoThe'] . "</td>";
                    // echo "<td class=\"border-dark\">" . $rent['MaCaBiet'] . "</td>";
                    // echo "<td class=\"border-dark\">" . $rent['KieuMuon'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['NgayMuon'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['NguoiChoMuon'] . "</td>";
                    // echo "<td class=\"border-dark\">" . $rent['HanTra'] . "</td>";
                    // echo "<td class=\"border-dark\">" . $rent['Loai'] . "</td>";
                    // echo "<td class=\"border-dark\">" . $rent['NgayTra'] . "</td>";
                    // echo "<td class=\"border-dark\">" . $rent['NguoiNhan'] . "</td>";
                    // echo "<td class=\"border-dark\">" .(date("Y-m-d") <= date("Y-m-d",strtotime($rent['HanTra']))?"Đúng Hạn":"Quá Hạn"). "</td>";
                    echo '<td class="border-dark">';
                    // echo '<a  href="index.php?controller=rent&action=edit&ID_MuonTra=' . $rent['ID_MuonTra'] . '"><i class="fas fa-edit"></i></a>';
                    // echo '<a class="ml-3" href="index.php?controller=rent&action=delete&ID_MuonTra=' . $rent['ID_MuonTra'] . '">Trả</a>';
                    echo '<a class="ml-3" href="index.php?controller=rent&action=rentinfo&ID_MuonTra=' . $rent['ID_MuonTra'] . '">Xem Chi Tiết</a>';
                    echo "</tr>"; 
                }
            }
            ?>
    </table>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
