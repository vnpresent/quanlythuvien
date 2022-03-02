<div class="container-fluid" style="padding-top:20px" >
<h2>Ngôn ngữ</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a name="" id="" class="btn btn-primary" href="index.php?controller=language&action=add" role="button" style="margin-bottom:10px">Thêm</a>
    </div> 
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>MaNgonNgu</th>
                <th>Tên ngôn ngữ</th>
                <th>Ghi chú</th>
                <th style="width: 10%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $document) {
                    if ($document['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $document['MaNgonNgu'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['TenNgonNgu'] . "</td>";
                        echo "<td class=\"border-dark\">" . $document['GhiChu'] . "</td>";
                        echo '<td class="border-dark">';
                        echo '<a href="index.php?controller=language&action=edit&MaNgonNgu=' . $document['MaNgonNgu'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa?\')" href="index.php?controller=language&action=delete&MaNgonNgu=' . $document['MaNgonNgu'] . '"><i class="fas fa-trash"></i></a>';
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>