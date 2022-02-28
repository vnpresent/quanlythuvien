<?php
if (Auth::isLogin()) {
?>
<div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                    Thư viện TLU</div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php?controller=user&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
<<<<<<< HEAD
                <i class="fas fa-user"></i>Người dùng</a>
                <a href="index.php?controller=document" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-book"></i>Tài liệu</a>
=======
                <i class="fas fa-user" style="margin-right:10px"></i>Người dùng</a>
                <a href="index.php?controller=document&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-book" style="margin-right:10px"></i>Tài liệu</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-book-reader" style="margin-right:10px"></i>Độc giả</a>
>>>>>>> a9f399ae53f53a2a217f2d4c5eb4105628efd9d5
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-cash-register" v></i>Mượn, trả tài liệu</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-chart-line" style="margin-right:10px"></i>Thống kê</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-search" style="margin-right:10px"></i>Tìm kiếm</a>
                <a href="index.php?controller=auth&action=logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2" style="margin-right:10px"></i>Đăng xuất</a>
            </div>
        </div>
<?php
}
else
{
?>
<a href="index.php?controller=auth&action=login" class="nav-link active text-dark">Đăng nhập</a>
<?php
}
?>



