<div class="container col-10">
    <table class="table table-bordered col-12 mx-auto">
        <a name="" id="" class="btn btn-primary" href="index.php?controller=user&action=add" role="button">Thêm tài khoản</a>
        <thead class="bg-dark text-white">
            <tr class="border-dark">
                <th>Tài khoản</th>
                <th>Cấp</th>
                <th>Tên</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $user) {
                    if ($user['status'] == 1) {
                        $level = "Đọc Giả";
                        if ($user['level'] == 2)
                            $level = "Quản Lý";
                            if ($user['level'] == 1)
                            $level = "Thủ Thư";
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $user['username'] . "</td>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $level . "</td>";
                        echo "<td class=\"border-dark\">" . $user['name'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=user&action=update&id=' . $user['id'] . '">Sửa</a>';
                        echo $user['level'] != 2 ? '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa tài khoản này không?\')" href="index.php?controller=user&action=delete&id=' . $user['id'] . '">Xóa</a>' : '';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>