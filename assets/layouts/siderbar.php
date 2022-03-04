<?php
if(Auth::isLogin()  && $_SERVER['REQUEST_METHOD'] != 'POST') {
?>
<div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center  border-bottom">
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent primary-text fw-bold text-uppercase">
                <i class="fas fa-book" style="margin-right:10px"></i>Thư viện TLU</a></div>
                <div class="list-group list-group-flush my-3">
                        <a href="index.php?controller=search&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class=" fas fa-search" style="margin-right:10px"></i>Tìm kiếm</a>

                        <?php if (Auth::isAdmin()) { ?>
                        <a href="index.php?controller=user&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-user" style="margin-right:10px"></i>Người dùng</a>
                        <?php } ?>
                        <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                        <a href="index.php?controller=document&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-book" style="margin-right:10px"></i>Tài liệu</a>
                        <?php } ?>
                        <?php if (Auth::isAdmin()) { ?>
                        <a href="index.php?controller=position&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-map-pin" style="margin-right:10px"></i>Vị trí sách</a>
                        <?php } ?>
                        <?php if (Auth::isAdmin() || Auth::isThuThu()) { ?>
                        <a href="index.php?controller=rent&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-cash-register" style="margin-right:10px"></i>Mượn, trả tài liệu</a>
                        <?php } ?>
                        <?php if (Auth::isAdmin() || Auth::isThuThu()) { ?>
                        <a href="index.php?controller=enter&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-file-invoice" style="margin-right:10px"></i>Phiếu nhập</a>
                        <?php } ?>
                        <?php if (Auth::isAdmin() || Auth::isThuThu() || Auth::isKeHoach()) { ?>
                        <a href="#" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-chart-line" style="margin-right:10px"></i>Thống kê</a>
                        <?php } ?>
                        <div class="dropdown dropright">
                                <button type="button" class="list-group-item list-group-item-action bg-transparent second-text fw-bold " data-toggle="dropdown">
                                <i class="fas fa-plus" style="margin-right:10px"></i></i>Thêm chức năng
                                </button>
                                <div class="dropdown-menu">
                                <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                                        <a href="index.php?controller=createcard&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-address-card" style="margin-right:10px"></i>Danh sách tạo thẻ</a>
                                        <?php } ?>
                                        <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                                        <a href="index.php?controller=publish&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-industry" style="margin-right:10px"></i>Nhà xuất bản</a>
                                        <?php } ?>
                                        <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                                        <a href="index.php?controller=provided&action=index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-dolly" style="margin-right:10px"></i>Nhà cung cấp</a>
                                        <?php } ?>
                                        <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                                        <a href="index.php?controller=grade&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-users" style="margin-right:10px"></i>Lớp học</a>
                                        <?php } ?>
                                        <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                                        <a href="index.php?controller=language&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-language" style="margin-right:10px"></i>Ngôn ngữ</a>
                                        <?php } ?>
                                        <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                                        <a href="index.php?controller=unit&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-school" style="margin-right:10px"></i>Đơn vị</a>
                                        <?php } ?>
                                        <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                                        <a href="index.php?controller=reader&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-book-reader" style="margin-right:10px"></i>Độc giả</a>
                                        <?php } ?>
                                        <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                                        <a href="index.php?controller=author&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-feather" style="margin-right:10px"></i>Tác giả</a>
                                        <?php } ?>
                                        <?php if (Auth::isAdmin() || Auth::isKyThuat()) { ?>
                                        <a href="index.php?controller=category&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-th-list" style="margin-right:10px"></i>Thể loại</a>
                                        <?php } ?>
                                        <?php if (Auth::isAdmin() || Auth::isThuThu()) { ?>
                                        <a href="index.php?controller=breach&action=index" class="dropdown-item list-group-item list-group-item-action bg-transparent second-text fw-bold">
                                        <i class="fas fa-bullhorn" style="margin-right:10px"></i></i>Vi phạm</a>
                                        <?php } ?>
                                </div>
                        </div>
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



