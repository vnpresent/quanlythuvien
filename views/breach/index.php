<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Vi phạm</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a name="" id="" class="btn btn-info" href="index.php?controller=breach&action=add" role="button" style="margin-bottom:10px">Thêm</a>
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>IDPhat</th>
                <th>Số thẻ</th>
                <th>Lý do vi phạm</th>
                <th>Xử lý</th>
                <th>Ngày xử lý</th>
                <th>Người xử lý</th>
                <th>Ngày mở thẻ</th>
                <th style="width: 10%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $document) {
                    if ($document['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $document['IDPhat'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['SoThe'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['LyDoVP'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['HTXuLy'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['NgayXL'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['NguoiXL'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['NgayMoThe'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=breach&action=edit&IDPhat=' . $document['IDPhat'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa ?\')" href="index.php?controller=breach&action=delete&IDPhat=' . $document['IDPhat'] . '"><i class="fas fa-trash"></i></a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
