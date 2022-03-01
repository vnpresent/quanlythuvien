<div class="container-fluid" style="padding-top:20px">
    <h2>Tài liệu</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a name="" id="" class="btn btn-info" href="index.php?controller=createcard&action=add" role="button" style="margin-bottom:10px">Thêm</a>
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>MaDK</th>
                <th>HoTen</th>
                <th>NamSinh</th>
                <th>GioiTinh</th>
                <th>ChucDanh</th>
                <th>MaDV</th>
                <th>MaLop</th>
                <th>KhoaHoc</th>
                <th>DienThoai</th>
                <th>Email</th>
                <th>AnhThe</th>
                <th>HinhThucDK</th>
                <th>LoaiDK</th>
                <th>NgayDK</th>
                <th>KTLePhi</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $createcard) {
                    if ($createcard['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $createcard['MaDK'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['HoTen'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['NamSinh'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['GioiTinh'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['ChucDanh'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['MaDV'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['MaLop'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['KhoaHoc'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['DienThoai'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['Email'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['AnhThe'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['HinhThucDK'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['LoaiDK'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['NgayDK'] . "</td>";
                        echo "<td class=\"border-dark\">" . $createcard['KTLePhi'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=createcard&action=edit&MaDK=' . $createcard['MaDK'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa ?\')" href="index.php?controller=createcard&action=delete&MaDK=' . $createcard['MaDK'] . '"><i class="fas fa-trash"></i></a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>