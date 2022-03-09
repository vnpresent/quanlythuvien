<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Người dùng</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover" >
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a name="" id="" class="btn btn-info" href="index.php?controller=user&action=add" role="button" style="margin-bottom:10px">Thêm tài khoản</a>
    </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>Username</th>
                <th>Họ tên</th>
                <th>Năm sinh</th>
                <th>Giới tính</th>
                <th>Chức danh</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th style="width: 10%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $user) {
                    if ($user['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $user['Username'] . "</td>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $user['HoTen'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['NamSinh'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['GioiTinh'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['ChucDanh'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['Email'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['DienThoai'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=user&action=edit&id=' . $user['id'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" href="index.php?controller=user&action=editper&id=' . $user['id'] . '"><i class="fas fa-exchange-alt"></i></a>';
                        echo '<a class="ml-3" href="index.php?controller=user&action=editpass&id=' . $user['id'] . '"><i class="fas fa-key"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa tài khoản này không?\')" href="index.php?controller=user&action=delete&id=' . $user['id'] . '"><i class="fas fa-trash"></i></a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
