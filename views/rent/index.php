<div class="container-fluid" style="padding-top:20px">
    <h2>Tài liệu</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a name="" id="" class="btn btn-info" href="index.php?controller=rent&action=add" role="button" style="margin-bottom:10px">Thêm</a>
            <a name="" id="" class="btn btn-info" href="index.php?controller=rent&action=back" role="button" style="margin-bottom:10px">Trả</a>
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>ID_MuonTra</th>
                <th>SoThe</th>
                <th>MaCaBiet</th>
                <th>KieuMuon</th>
                <th>NgayMuon</th>
                <th>NguoiChoMuon</th>
                <th>HanTra</th>
                <th>Loai</th>
                <th>NgayTra</th>
                <th>NguoiNhan</th>
                <th>TinhTrang</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $rent) {
                    if ($rent['Loai']!="tra")
                    {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $rent['ID_MuonTra'] . "</td>";
                        echo "<td class=\"border-dark\">" . $rent['SoThe'] . "</td>";
                        echo "<td class=\"border-dark\">" . $rent['MaCaBiet'] . "</td>";
                        echo "<td class=\"border-dark\">" . $rent['KieuMuon'] . "</td>";
                        echo "<td class=\"border-dark\">" . $rent['NgayMuon'] . "</td>";
                        echo "<td class=\"border-dark\">" . $rent['NguoiChoMuon'] . "</td>";
                        echo "<td class=\"border-dark\">" . $rent['HanTra'] . "</td>";
                        echo "<td class=\"border-dark\">" . $rent['Loai'] . "</td>";
                        echo "<td class=\"border-dark\">" . $rent['NgayTra'] . "</td>";
                        echo "<td class=\"border-dark\">" . $rent['NguoiNhan'] . "</td>";
                        echo "<td class=\"border-dark\">" .(date("Y-m-d") < date("Y-m-d",strtotime($rent['HanTra']))?"Đúng Hạn":"Quá Hạn"). "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=rent&action=edit&ID_MuonTra=' . $rent['ID_MuonTra'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a href="index.php?controller=rent&action=return&SoThe=' . $rent['SoThe'] .'&MaCaBiet=' . $rent['MaCaBiet']. '"><i class="fas fa-edit"></i></a>';
                        echo "</tr>";
                    }           
                }
            }
            ?>
    </table>
</div>