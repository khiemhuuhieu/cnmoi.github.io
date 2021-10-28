<?php
include'inc/headertop.php';
include'inc/headerhidden.php';
?>

    <!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="sach-kinh-te.html">Sách kinh tế - kỹ năng</a></li>
            </ol>
        </div>
    </section>

    <!-- ảnh banner  -->
    <section class="banner">
        <div class="container">
            <a href="sach-moi-tuyen-chon.html"><img src="images/banner-sach-ktkn.jpg" alt="banner-sach-ktkn"
                    class="img-fluid"></a>
        </div>
    </section>

    <!-- thể loại sách: kinh tế chính trị nhân vật bài học kinh doanh ( từng ô vuông) -->
    <section class="page-content my-3">
        <div class="container">
            <div>
                <h1 class="header text-uppercase">sách kinh tế - kỹ năng</h1>
            </div>
            <div class="the-loai-sach">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-kinh-te-chinh-tri.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Kinh tế - chính trị
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-nhan-vat-bai-hoc-kinh-doanh.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Nhân vật - Bài học kinh doanh
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-sach-khoi-nghiep.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách Khởi Nghiệp
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-sach-quan-tri-lanh-dao.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách Quản trị - Lãnh đạo
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-sach-tai-chinh-ke-toan.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách tài chính - kế toán
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-sach-kinh-te-hoc.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách Kinh tế học
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-sach-quan-tri-nhan-su.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách quản trị nhân sự
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-sach-chung-khoan-bat-dong-san-dau-tu.png"
                                    alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách chứng khoán - bất động sản
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-sach-ky-nang-lam-viec.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách kỹ năng làm việc
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                                <img src="images/tls-sach-marketing-ban-hang.png" alt="tls-kinh-te-chinh-tri">
                            </div>
                            <div class="ten">
                                Sách marketing - bán hàng
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- khối sản phẩm  -->
    <section class="content my-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <!-- header của khối sản phẩm : tag(tác giả), bộ lọc và sắp xếp  -->
                <div class="header-khoi-sp d-flex">
                    <div class="tag">
                        <label>Tác giả nổi bật:</label>
                        <a href="#">Tất cả</a>
                        <a href="#" data-tacgia=".MarieForleo">Marie Forleo</a>
                        <a href="#" data-tacgia=".DeanGraziosi">Dean Graziosi</a>
                        <a href="#" data-tacgia=".DavikClark">Davik Clark</a>
                        <a href="#" data-tacgia=".TSLêThẩmDương">TS Lê Thẩm Dương</a>
                        <a href="#" data-tacgia=".SimonSinek">Simon Sinek</a>
                    </div>
                    <div class="sort d-flex ml-auto">
                        <div class="hien-thi">
                            <label for="hienthi-select" class="label-select">Hiển thị</label>
                            <select class="hienthi-select">
                                <option value="30">30</option>
                                <option value="60">60</option>
                            </select>
                        </div>
                        <div class="sap-xep">
                            <label for="sapxep-select" class="label-select">Sắp xếp</label>
                            <select class="sapxep-select">
                                <option value="moinhat">Mới nhất</option>
                                <option value="thap-cao">Giá: Thấp - Cao</option>
                                <option value="cao-thap">Giá: Cao - Thấp</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- các sản phẩm  -->
                <div class="items">
                    <div class="row">
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                                <div class="card ">
                                    <a href="product-item.html" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                        <img class="card-img-top anh" src="images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ₫</div>
                                                <div class="giacu text-muted">139.000 ₫</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                                <div class="card ">
                                    <a href="product-item.html" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                        <img class="card-img-top anh" src="images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ₫</div>
                                                <div class="giacu text-muted">139.000 ₫</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item MarieForleo">
                                <div class="card ">
                                    <a href="product-item.html" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                        <img class="card-img-top anh" src="images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ₫</div>
                                                <div class="giacu text-muted">139.000 ₫</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item MarieForleo">
                                <div class="card ">
                                    <a href="product-item.html" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                        <img class="card-img-top anh" src="images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ₫</div>
                                                <div class="giacu text-muted">139.000 ₫</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item DavikClark">
                                <div class="card ">
                                    <a href="product-item.html" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                        <img class="card-img-top anh" src="images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ₫</div>
                                                <div class="giacu text-muted">139.000 ₫</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item TSLêThẩmDương">
                                <div class="card ">
                                    <a href="product-item.html" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                        <img class="card-img-top anh" src="images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ₫</div>
                                                <div class="giacu text-muted">139.000 ₫</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 item SimonSinek">
                                <div class="card ">
                                    <a href="product-item.html" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                        <img class="card-img-top anh" src="images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ₫</div>
                                                <div class="giacu text-muted">139.000 ₫</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>

                <!-- pagination bar -->
                <div class="pagination-bar my-3">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <!-- <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li> -->
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&rsaquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!--het khoi san pham-->
            </div>
            <!--het div noidung-->
        </div>
        <!--het container-->
    </section>
    <!--het _1khoi-->

<?php
include'inc/footer.php';
?>