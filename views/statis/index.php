<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<?php


// // số tài liệu đang được mượn
// echo Statis::statisdocument();

// // số đọc giả đang mượn sách
// echo Statis::statisreader();

// // Tài Liệu thủ thư cho mượn
// echo Statis::statisdocumentrent();

// // số tài liệu còn lại
// echo Statis::statisdocumentremain();

// // độc giả vi phạm
// echo Statis::violatingreaders();

// // số sách nhập trong tháng
// echo Statis::statisenter();

?>
<div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <h2 class="fs-2 m-0">Thống kê</h2>
                </div>  
            </nav>

            <div class="container-fluid px-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary" style="margin-right:10px;">báo cáo</button>
                    <button type="button" class="btn btn-primary">In ấn</button>
                </div>
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo Statis::statisdocument();?></h3>
                                <p class="fs-5">Tài liệu đang được mượn</p>
                                
                            </div>
                            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo Statis::statisreader();?></h3>
                                <p class="fs-5">Độc giả đang mượn tài liệu</p>
                            </div>
                            <i class="fas fa-book-reader fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo Statis::statisdocumentrent();?></h3>
                                <p class="fs-5">Tài liệu thủ thư cho mượn</p>
                            </div>
                            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo Statis::statisdocumentremain(); ?></h3>
                                <p class="fs-5">Tài liệu còn trong thư viện</p>
                            </div>
                            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                    </div>
                </div>
                <div class="row g-3 my-2">
                    <div class="col-md-8">
                        <canvas id="myChart" style="width:100%;"></canvas>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded my-4">
                            <div>
                                <h3 class="fs-2"><?php echo Statis::violatingreaders();?></h3>
                                <p class="fs-5">Độc giả vi phạm</p>
                            </div>
                            <i class="fas fa-book-reader fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                        <div
                            class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded my-4">
                            <div>
                                <h3 class="fs-2">20</h3>
                                <p class="fs-5">Tài liệu thanh lý</p>
                            </div>
                            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded my-4">
                            <div>
                                <h3 class="fs-2"><?php echo Statis::statisenter();?></h3>
                                <p class="fs-5">Tài liệu nhập mới</p>
                            </div>
                            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                    </div>
                </div>
                <div class="row g-3 my-2">
                    <div class="col-md-6">

                    </div>
                    
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var xValues = ["TL nhập mới", "TL thư viện", "Tl mượn", "ĐG mượn TL", "TL TT mượn", "ĐG vi phạm", "TL Thanh lý"];
        var tlnm=<?php echo Statis::statisenter();?>;
        var tltt=<?php echo Statis::statisdocumentremain(); ?>;
        var tlm =<?php echo Statis::statisdocument();?>;
        var dgmtl=<?php echo Statis::statisreader();?>;
        var tlttm=<?php echo Statis::statisdocumentrent();?>;
        var dgvp=<?php echo Statis::violatingreaders();?>;
        var yValues = [tlnm, tltt, tlm, dgmtl, tlttm, dgvp, 20];
        var barColors = ["red", "green", "blue", "orange", "brown", "red", "green"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: "Biểu đồ thư viện"
                }
            }
        });

        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
<?php include_once('././assets/layouts/footer.php'); ?>
