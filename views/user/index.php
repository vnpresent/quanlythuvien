<div class="container col-10">
    <table class="table table-bordered col-12 mx-auto">
        <a name="" id="" class="btn btn-primary" href="index.php?controller=user&action=add" role="button">Thêm tài khoản</a>
        <thead class="bg-dark text-white">
            <tr class="border-dark">
                <th>Username</th>
                <th>HoTen</th>
                <th>NamSinh</th>
                <th>GioiTinh</th>
                <th>ChucDanh</th>
                <th>Email</th>
                <th>DienThoai</th>
                <th style="width: 23%;">Hành động</th>
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
                        echo '<a href="index.php?controller=user&action=edit&id=' . $user['id'] . '">Sửa</a>';
                        echo '<a class="ml-3" href="index.php?controller=user&action=editper&id=' . $user['id'] . '">Quyền</a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa tài khoản này không?\')" href="index.php?controller=user&action=delete&id=' . $user['id'] . '">Xóa</a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>