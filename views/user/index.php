<<<<<<< HEAD
<div class="container col-10">
    <table class="table table-bordered col-12 mx-auto">
        <a name="" id="" class="btn btn-primary" href="index.php?controller=user&action=add" role="button">Thêm</a>
        <thead class="bg-dark text-white">
=======
<div class="container-fluid" style="padding-top:20px">
    <h2>Người dùng</h2>
    <table class="table table-striped bg-white rounded shadow-sm  table-hover" >
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a name="" id="" class="btn btn-info" href="index.php?controller=user&action=add" role="button" style="margin-bottom:10px">Thêm tài khoản</a>
    </div>
        <thead class="bg-info text-white">
>>>>>>> a9f399ae53f53a2a217f2d4c5eb4105628efd9d5
            <tr class="border-dark">
                <th>Username</th>
                <th>HoTen</th>
                <th>NamSinh</th>
                <th>GioiTinh</th>
                <th>ChucDanh</th>
                <th>Email</th>
                <th>DienThoai</th>
                <th style="width: 23%;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data) && is_array($data)) {
                foreach ($data as $user) {
                    if ($user['status'] == 1) {
                        echo "<tr>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $user['Username'] . "</td>";
                        echo "<td class=\"border-dark\" scope=\"row\">" . $user['HoTen'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['NamSinh'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['GioiTinh'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['ChucDanh'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['Email'] . "</td>";
                        echo "<td class=\"border-dark\">" . $user['DienThoai'] . "</td>";
                        echo '<td class="border-dark">';
<<<<<<< HEAD
                        echo '<a href="index.php?controller=user&action=edit&id=' . $user['id'] . '">Sửa</a>';
                        echo '<a class="ml-3" href="index.php?controller=user&action=editper&id=' . $user['id'] . '">Quyền</a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa ?\')" href="index.php?controller=user&action=delete&id=' . $user['id'] . '">Xóa</a>';
=======
                        echo '<a href="index.php?controller=user&action=edit&id=' . $user['id'] . '"><i class="fas fa-edit"></i></a>';
                        echo '<a class="ml-3" href="index.php?controller=user&action=editper&id=' . $user['id'] . '"><i class="fas fa-exchange-alt"></i></a>';
                        echo '<a class="ml-3" onclick="return confirm(\'Bạn có muốn xóa tài khoản này không?\')" href="index.php?controller=user&action=delete&id=' . $user['id'] . '"><i class="fas fa-trash"></i></a>';
>>>>>>> a9f399ae53f53a2a217f2d4c5eb4105628efd9d5
                        echo "</tr>";
                    }
                }
            }
            ?>
    </table>
</div>