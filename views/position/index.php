<div class="container col-10">
    <table class="table table-bordered col-12 mx-auto">
        <a name="" id="" class="btn btn-primary" href="index.php?controller=position&action=add" role="button">Thêm</a>
        <thead class="bg-dark text-white">
            <tr class="border-dark">
                <th>MaVT</th>
                <th>TenVT</th>
                <th>MoTa</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $document) {
                    if ($document['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $document['MaVT'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['TenVT'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MoTa'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=position&action=edit&MaVT=' . $document['MaVT'] . '">Sửa</a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa?\')" href="index.php?controller=position&action=delete&MaVT=' . $document['MaVT'] . '">Xóa</a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>