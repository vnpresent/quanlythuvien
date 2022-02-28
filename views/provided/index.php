<div class="container col-10">
    <table class="table table-bordered col-12 mx-auto">
        <a name="" id="" class="btn btn-primary" href="index.php?controller=provided&action=add" role="button">Thêm</a>
        <thead class="bg-dark text-white">
            <tr class="border-dark">
                <th>MaNCC</th>
                <th>TenNCC</th>
                <th>DiaChi</th>
                <th>DienThoai</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $document) {
                    if ($document['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $document['MaNCC'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['TenNCC'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['DiaChi'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['DienThoai'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=provided&action=edit&MaNCC=' . $document['MaNCC'] . '">Sửa</a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa?\')" href="index.php?controller=provided&action=delete&MaNCC=' . $document['MaNCC'] . '">Xóa</a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>