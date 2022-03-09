<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Chi Tiết tài liệu</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>id</th>
                <th>MaCaBiet</th>
                <th>KieuMuon</th>
                <th>HanTra</th>
                <th>Loai</th>
                <th>NgayTra</th>
                <th>NguoiNhan</th>
                <th>TinhTrang</th>
                <th>Hành Động</th>
                <!-- <th style="width: 23%;">Hành động</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $rent) {
                    echo "<tr>";
                    echo "<td class=\"border-dark\" scope=\"row\">" . $rent['id'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['MaCaBiet'] . "</td>";                   
                    echo "<td class=\"border-dark\">" . $rent['KieuMuon'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['HanTra'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['Loai'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['NgayTra'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['NguoiNhan'] . "</td>";
                    echo "<td class=\"border-dark\">" .(date("Y-m-d") < date("Y-m-d",strtotime($rent['HanTra']))?"Còn Hạn":"Quá Hạn"). "</td>";
                    echo '<td class="border-dark">';
                    echo '<a href="index.php?controller=rent&action=edit&id=' . $rent['id'] .'&ID_MuonTra='.$_GET['ID_MuonTra']. '"><i class="fas fa-edit"></i></a>';
                    echo $rent['Loai']=="muon"?'<a class="ml-3" href="index.php?controller=rent&action=return&id=' . $rent['id'].'&ID_MuonTra='.$_GET['ID_MuonTra'] . '">Trả</a>':"";
                    echo "</tr>";              
                }
            }
            ?>
    </table>

    <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=rent" role="button">Thoát</a>
        <!-- <button type="submit" class="btn btn-primary">Trả</button> -->
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
