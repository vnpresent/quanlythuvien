<div class="container-fluid" style="padding-top:20px">
    <h2>Tài liệu</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a name="" id="" class="btn btn-info" href="index.php?controller=document&action=add" role="button" style="margin-bottom:10px">Thêm tài liệu</a>
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>MaTL</th>
                <th>Tên tài liệu</th>
                <th>Thể loại</th>
                <th>Đơn vị</th>
                <th>Tác giả</th>
                <th>Nhà xuất bản</th>
                <!-- <th>NamXB</th> -->
                <th>Ngôn ngữ</th>
                <!-- <th>NoiDung</th>
                <th>SoTrang</th>
                <th>KhoGiay</th>
                <th>LanTB</th>
                <th>GiaBia</th>
                <th>SoPH</th>
                <th>NgayPH</th>
                <th>TongSo</th> -->
                <th>MaVT</th>
                <!-- <th>NgayCN</th> -->
                <th style="width: 10%;">Hành động</th>
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
                        // echo "<td class=\"border-dark\">" . $document['NamXB'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MaNgonNgu'] . "</td>";
                        // echo "<td class=\"border-dark\">" . $document['NoiDung'] . "</td>";
                        // echo "<td class=\"border-dark\">" . $document['SoTrang'] . "</td>";
                        // echo "<td class=\"border-dark\">" . $document['KhoGiay'] . "</td>";
                        // echo "<td class=\"border-dark\">" . $document['LanTB'] . "</td>";
                        // echo "<td class=\"border-dark\">" . $document['GiaBia'] . "</td>";
                        // echo "<td class=\"border-dark\">" . $document['SoPH'] . "</td>";
                        // echo "<td class=\"border-dark\">" . $document['NgayPH'] . "</td>";
                        // echo "<td class=\"border-dark\">" . $document['TongSo'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MaVT'] . "</td>";
                        // echo "<td class=\"border-dark\">" . $document['NgayCN'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=document&action=edit&MaTL=' . $document['MaTL'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa tài khoản này không?\')" href="index.php?controller=document&action=delete&MaTL=' . $document['MaTL'] . '"><i class="fas fa-trash"></i></a>';
                        echo '<a class="ml-3" onclick="return " href="index.php?controller=documentdetail&action=index&MaTL=' . $document['MaTL'] . '"><i class="fas fa-eye"></i></a>';
                        echo "</tr>";
                    }
                    
                }
            }
            ?>
    </table>
</div>