<div class="container-fluid" style="padding-top:20px">
    <h2>Tài liệu</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a name="" id="" class="btn btn-info" href="index.php?controller=reader&action=add" role="button" style="margin-bottom:10px">Thêm</a>
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>SoThe</th>
                <th>MaDK</th>
                <th>AnhBarcode</th>
                <th>NgayCap</th>
                <th>HSD</th>
                <th>TinhTrang</th>
                <th>NguoiCN</th>
                <th>NgayCN</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $reader) {
                    if ($reader['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $reader['SoThe'] . "</td>";
                        echo "<td class=\"border-dark\">" . $reader['MaDK'] . "</td>";
                        echo "<td class=\"border-dark\">" . $reader['AnhBarcode'] . "</td>";
                        echo "<td class=\"border-dark\">" . $reader['NgayCap'] . "</td>";
                        echo "<td class=\"border-dark\">" . $reader['HSD'] . "</td>";
                        echo "<td class=\"border-dark\">" . $reader['TinhTrang'] . "</td>";
                        echo "<td class=\"border-dark\">" . $reader['NguoiCN'] . "</td>";
                        echo "<td class=\"border-dark\">" . $reader['NgayCN'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=reader&action=edit&SoThe=' . $reader['SoThe'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa ?\')" href="index.php?controller=reader&action=delete&SoThe=' . $reader['SoThe'] . '"><i class="fas fa-trash"></i></a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>