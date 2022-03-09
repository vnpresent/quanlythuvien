<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Vị trí sách</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a name="" id="" class="btn btn-primary" href="index.php?controller=position&action=add" role="button" style="margin-bottom:10px">Thêm</a>
    </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>MaVT</th>
                <th>Tên vị trí</th>
                <th>Mô tả</th>
                <th style="width: 10%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $document) {
                    if ($document['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $document['MaVT'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['TenVT'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['MoTa'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=position&action=edit&MaVT=' . $document['MaVT'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa?\')" href="index.php?controller=position&action=delete&MaVT=' . $document['MaVT'] . '"><i class="fas fa-trash"></i></a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
