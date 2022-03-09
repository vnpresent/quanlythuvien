<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<div class="container-fluid" style="padding-top:20px">
    <form action="index.php?controller=search" method="get">
        <h2>Tìm kiếm</h2>
        <input type="text" name="controller" value="search" class="form-control" hidden>


        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label>
            <div class="col-sm-6">
                <input type="text" name="keyword" class="form-control" required="required">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tìm Kiếm</label>
            <div class="col-sm-6">
                <select class="form-control" name="type" id="">
                    <option value="Document">Tài Liệu</option>
                    <option value="CreateCard">Đọc Giả</option>
                    <option value="Rent">Mượn Trả</option>
                </select>
            </div>
        </div>

        <div class="form-group row mx-auto">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
            </div>
            </div>
        </div>
    </form>
    <?php
if (isset($data) && is_array($data)) {
?>

<div class="container-fluid" style="padding-top:20px">
    <h2>Kết Quả</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover">
        </div>
        <thead class="bg-info text-white">
            <tr class="border-dark">
                <?php
                foreach($data as $dt) {
                    foreach($dt as $key=>$value)
                    {
                        echo "<th>" .$key . "</th>";   
                    }  
                    break;
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data as $dt) {
                    echo "<tr>";
                    foreach($dt as $key=>$value)
                    {
                        echo "<td class=\"border-dark\" scope=\"row\">" .$value . "</td>";   
                    }   
                    echo "</tr>";                                      
                }
            ?>
    </table>
</div>

<?php } ?>
</div>

<?php include_once('././assets/layouts/footer.php'); ?>
