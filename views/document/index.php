<div class="container col-10">
    <table class="table table-bordered col-12 mx-auto">
        <a name="" id="" class="btn btn-primary" href="index.php?controller=document&action=add" role="button">Thêm</a>
        <thead class="bg-dark text-white">
            <tr class="border-dark">
                <th>MaTL</th>
                <th>TenTL</th>
                <th>MaTheLoai</th>
                <th>MaDV</th>
                <th>MaTG</th>
                <th>MaNXB</th>
                <th>NamXB</th>
                <th>MaNgonNgu</th>
                <th>NoiDung</th>
                <th>SoTrang</th>
                <th>KhoGiay</th>
                <th>LanTB</th>
                <th>GiaBia</th>
                <th>SoPH</th>
                <th>NgayPH</th>
                <th>TongSo</th>
                <th>MaVT</th>
                <th>NgayCN</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $document) {
                    if ($document['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $document['MaTL'] . "</td>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $document['TenTL'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MaTheLoai'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MaDV'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MaTG'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MaNXB'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['NamXB'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MaNgonNgu'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['NoiDung'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['SoTrang'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['KhoGiay'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['LanTB'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['GiaBia'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['SoPH'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['NgayPH'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['TongSo'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MaVT'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['NgayCN'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=document&action=edit&MaTL=' . $document['MaTL'] . '">Sửa</a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa ?\')" href="index.php?controller=document&action=delete&MaTL=' . $document['MaTL'] . '">Xóa</a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>