<?php
if(Auth::isLogin()  && $_SERVER['REQUEST_METHOD'] != 'POST') {
?>
<div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center  border-bottom">
        <a href="index.php" class="list-group-item list-group-item-action bg-transparent primary-text fw-bold text-uppercase">
                <i class="fas fa-book" style="margin-right:10px"></i>Thư viện TLU</a></div>
                <div class="list-group list-group-flush my-3">
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-search" style="margin-right:10px"></i>Tìm kiếm</a> -->
                <a href="index.php?controller=user&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-user" style="margin-right:10px"></i>Người dùng</a>
                <a href="index.php?controller=document&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-book" style="margin-right:10px"></i>Tài liệu</a>
                <a href="index.php?controller=author&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-feather" style="margin-right:10px"></i>Tác giả</a>
                <a href="index.php?controller=position&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-map-pin" style="margin-right:10px"></i>Vị trí sách</a>
                <a href="index.php?controller=category&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-th-list" style="margin-right:10px"></i>Thể loại</a>
                <a href="index.php?controller=publish&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-industry" style="margin-right:10px"></i>Nhà xuất bản</a>
                <a href="index.php?controller=provided&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-dolly" style="margin-right:10px"></i>Nhà cung cấp</a>
                <a href="index.php?controller=language&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-language" style="margin-right:10px"></i>Ngôn ngữ</a>
                <a href="index.php?controller=unit&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-school" style="margin-right:10px"></i>Đơn vị</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-book-reader" style="margin-right:10px"></i>Độc giả</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-cash-register" style="margin-right:10px"></i>Mượn, trả tài liệu</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-chart-line" style="margin-right:10px"></i>Thống kê</a>
                

                <a href="index.php?controller=auth&action=logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2" style="margin-right:10px"></i>Đăng xuất</a>
            </div>
        </div>
<?php
}
else
{
?>
<div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center  border-bottom">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent primary-text fw-bold text-uppercase">
                <i class="fas fa-book" style="margin-right:10px"></i>Thư viện TLU</a></div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-search" style="margin-right:10px"></i>Tìm kiếm</a>
                <a href="index.php?controller=auth&action=login" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                <i class="fas fa-power-off me-2" style="margin-right:10px"></i>Đăng nhập</a>
            </div>
        </div>
        
<?php
}
?>



