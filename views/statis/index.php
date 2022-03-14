<?php include_once('././assets/layouts/header.php'); ?>
<?php include_once('././assets/layouts/siderbar.php'); ?>
<?php


// // số tài liệu đang được mượn
// echo is_array(Rent::statisdocument())?count(Rent::statisdocument()):'0';

// // số đọc giả đang mượn sách
// echo count(Rent::statisreader());

// // số tài liệu còn lại
// echo count(Rent::statisdocumentremain());

// // độc giả vi phạm
// echo count(Breach::violatingreaders());

?>
<div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <h2 class="fs-2 m-0">Thống kê</h2>
                </div>  
            </nav>

            <div class="container-fluid px-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary">báo cáo</button>
                    <button type="button" class="btn btn-primary">In ấn</button>
                </div>
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">44</h3>
                                <p class="fs-5">Tài liệu đang được mượn</p>
                                
                            </div>
                            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">24</h3>
                                <p class="fs-5">Độc giả đang mượn tài liệu</p>
                            </div>
                            <i class="fas fa-book-reader fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">45</h3>
                                <p class="fs-5">Tài liệu thủ thư cho mượn</p>
                            </div>
                            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">49</h3>
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
                                <h3 class="fs-2">55</h3>
                                <p class="fs-5">Độc giả vi phạm</p>
                            </div>
                            <i class="fas fa-book-reader fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                        <div
                            class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded my-4">
                            <div>
                                <h3 class="fs-2">49</h3>
                                <p class="fs-5">Tài liệu thanh lý</p>
                            </div>
                            <i class="fas fa-book fs-1 primary-text border rounded-full secondary-bg"
                                style="width:60px;height:60px"></i>
                        </div>
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded my-4">
                            <div>
                                <h3 class="fs-2">55</h3>
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
        var yValues = [55, 49, 44, 24, 45, 55, 49];
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
