<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <h2>Chi tiết tài liệu</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <th>MaCaBiet</th>
                <th>MaTL</th>
                <th>AnhBarcode</th>
                <th>NgayCN</th>
                <th>NguoiCN</th>
                <th>TinhTrang</th>
                <th>XuLy</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $documentdetal) {
                    echo "<tr>";
                    echo "<td class=\"border-dark\" scope=\"row\">" . $documentdetal['MaCaBiet'] . "</td>";
                    echo "<td class=\"border-dark\">" . $documentdetal['MaTL'] . "</td>";
                    echo "<td class=\"border-dark\">" . $documentdetal['AnhBarcode'] . "</td>";
                    echo "<td class=\"border-dark\">" . $documentdetal['NgayCN'] . "</td>";
                    echo "<td class=\"border-dark\">" . $documentdetal['NguoiCN'] . "</td>";
                    echo "<td class=\"border-dark\">" . $documentdetal['TinhTrang'] . "</td>";
                    echo "<td class=\"border-dark\">" . $documentdetal['XuLy'] . "</td>";
                }
            }
            ?>
    </table>
    <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <div class="col-sm-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a name="" id="" class="btn btn-primary ml-2" href="index.php?controller=document" role="button">Thoát</a>
            </div>
            </div>
        </div>
</div>
<?php include_once('././assets/layouts/footer.php'); ?>
