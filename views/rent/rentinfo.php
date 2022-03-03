<div class="container-fluid" style="padding-top:20px">
    <h2>Trả tài liệu</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
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
                <th>TinhTrang</th>
                <!-- <th style="width: 23%;">Hành động</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                $macabiet = array();
                foreach ($data as $rent) {
                    echo "<tr>";
                    echo "<td class=\"border-dark\" scope=\"row\">" . $rent['ID_MuonTra'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['SoThe'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['MaCaBiet'] . "</td>";                   
                    echo "<td class=\"border-dark\">" . $rent['KieuMuon'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['NgayMuon'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['NguoiChoMuon'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['HanTra'] . "</td>";
                    echo "<td class=\"border-dark\">" . $rent['Loai'] . "</td>";
                    echo "<td class=\"border-dark\">" .(date("Y-m-d") < date("Y-m-d",strtotime($rent['HanTra']))?"Đúng Hạn":"Quá Hạn"). "</td>";
                    // echo '<td class="border-dark">';
                    // echo '<a href="index.php?controller=rent&action=edit&ID_MuonTra=' . $rent['ID_MuonTra'] . '"><i class="fas fa-edit"></i></a>';
                    // echo "</tr>";              
                }
            }
            ?>
    </table>
    <form action="index.php?controller=rent&action=return" method="post">
    <?php
        foreach ($data as $rent) {
            echo '<input name="MaCaBiet[]" value="'.$rent['MaCaBiet'].'" hidden>';
        }
    ?>

    <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=rent" role="button">Thoát</a>
        <input name="SoThe" value="<?php echo $data[0]['SoThe'];?>" hidden>
        <button type="submit" class="btn btn-primary">Trả</button>
    </form>
</div>