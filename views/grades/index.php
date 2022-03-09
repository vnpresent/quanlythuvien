<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Lớp học</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a name="" id="" class="btn btn-info" href="index.php?controller=grade&action=add" role="button" style="margin-bottom:10px">Thêm</a>
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>MaLop</th>
                <th>Tên lớp</th>
                <th>Đơn vị</th>
                <th style="width: 10%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $grade) {
                    if ($grade['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $grade['MaLop'] . "</td>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $grade['TenLop'] . "</td>";
                        echo "<td class=\"border-dark\">" . Unit::show($grade['MaDV'])["TenDV"] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=grade&action=edit&MaLop=' . $grade['MaLop'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa ?\')" href="index.php?controller=grade&action=delete&MaLop=' . $grade['MaLop'] . '"><i class="fas fa-trash"></i></a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
