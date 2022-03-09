<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Phiếu nhập</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a name="" id="" class="btn btn-info" href="index.php?controller=enter&action=add" role="button" style="margin-bottom:10px">Thêm</a>
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>IDNhap</th>
                <th>Tài liệu</th>
                <th>nhà cung cấp</th>
                <th>Người nhập</th>
                <th>Ngày nhập</th>
                <th>Số lượng</th>
                <th style="width: 10%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $enter) {
                    if ($enter['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $enter['IDNhap'] . "</td>";
                        echo "<td class=\"border-dark\">" . $enter['MaTL'] . "</td>";
                        echo "<td class=\"border-dark\">" . $enter['MaNCC'] . "</td>";
                        echo "<td class=\"border-dark\">" . $enter['NguoiNhap'] . "</td>";
                        echo "<td class=\"border-dark\">" . $enter['NgayNhap'] . "</td>";
                        echo "<td class=\"border-dark\">" . $enter['Soluong'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=enter&action=edit&IDNhap=' . $enter['IDNhap'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa ?\')" href="index.php?controller=enter&action=delete&IDNhap=' . $enter['IDNhap'] . '"><i class="fas fa-trash"></i></a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
