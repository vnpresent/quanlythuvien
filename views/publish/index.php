<div class="container-fluid" style="padding-top:20px">
    <h2>Tài liệu</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a name="" id="" class="btn btn-info" href="index.php?controller=publish&action=add" role="button" style="margin-bottom:10px">Thêm</a>
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>MaNXB</th>
                <th>TenNXB</th>
                <th>GhiChu</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $document) {
                    if ($document['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $document['MaNXB'] . "</td>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $document['TenNXB'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['GhiChu'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=publish&action=edit&MaNXB=' . $document['MaNXB'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa ?\')" href="index.php?controller=publish&action=delete&MaNXB=' . $document['MaNXB'] . '"><i class="fas fa-trash"></i></a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>