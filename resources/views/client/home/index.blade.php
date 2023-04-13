@extends('layouts.client')

@section('title')
    <title>
        {{ __('messages.home') }}
    </title>
    <meta name="description" content="Cao Sơn" />
    <meta name="keywords" content="Cao Sơn">
    <meta name="author" content="Cao Sơn" />
@endsection

@section('body')
    <!-- banner -->
    <div class="page-header page-header-0">
        <div class="page-block">
            <div class="row m-0">
                <div class="col-lg-2 col-xl-2 col-xxl-2 menu-code">
                    hello
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10 p-0">
                    <!-- banner -->
                    <div class="row w-100 m-0">
                        <div class=" col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9 p-0">
                            <div class="col-sm-12">
                                <div class="">
                                    <div class="">
                                        <div id="carouselExampleDark" class="carousel carousel-dark slide"
                                            data-bs-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                                    class="active"></li>
                                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner carousel-inner-h">
                                                <div class="carousel-item active">
                                                    <img class="img-fluid d-block w-100"
                                                        src="assets/images/gallery-grid/img-grd-gal-2.jpg"
                                                        alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>First slide label</h5>
                                                        <p>Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur.</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid d-block w-100"
                                                        src="assets/images/gallery-grid/img-grd-gal-1.jpg"
                                                        alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Second slide label</h5>
                                                        <p>Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur.</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-fluid d-block w-100"
                                                        src="assets/images/gallery-grid/img-grd-gal-3.jpg"
                                                        alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Third slide label</h5>
                                                        <p>Praesent commodo cursus magna, vel
                                                            scelerisque nisl consectetur.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleDark" role="button"
                                                data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                                    aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                                            <a class="carousel-control-next" href="#carouselExampleDark" role="button"
                                                data-bs-slide="next"><span class="carousel-control-next-icon"
                                                    aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-3 col-xxl-3 p-0 menu-active">
                            <div>
                                <button type="button" class="btn btn-primary w-100">ĐĂNG NHẬP
                                    NGAY</button>
                            </div>
                            hello
                        </div>
                    </div>
                    <!-- end-banner -->
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <!-- code  -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-xl-2 col-xxl-2">
                                    <i class="far fa-credit-card text-warning text-30"></i>
                                </div>
                                <div class="col-lg-6 col-xl-10 col-xxl-10">
                                    <h4 class="h4-19 text-warning l-06">THU NHẬP TỰ ĐỘNG</h4>
                                    <div>123</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                            123
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                            123
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                            123
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-center">TOP SOURCE CODE MỚI NHẤT</h4>
            <hr>
        </div>
    </div>
    <!-- item -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4 item-code">
            <div class="card">
                <div class="card-header p-10">
                    <div class="img-scroll">
                        <a href="#">
                            <img class="w-100"
                                src="https://topcode.vn/FilesUpload/Code/code-do-an-phan-mem-quan-ly-quan-nuoc-c-kem-bao-cao-01028.jpg">
                        </a>
                    </div>
                    <div class="demo">
                        <div class="flex">
                            <div class="f50 r">
                                <a href="">
                                    Chi Tiết
                                </a>
                            </div>
                            <div class="f50 g">
                                <a href="">
                                    Xem Thực Tế
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="div-w">
                        <div>
                            <a class="#">
                                <i class="fas fa-code"></i>
                                <span> PHP & Mysql</span>
                            </a>
                        </div>
                        <div class="margin-4">
                            <h5>
                                <a href="#" class="c-b">
                                    Code đồ án Quản lý tài sản môn Lập trình ứng dụng + Báo cáo
                                </a>
                            </h5>
                        </div>
                        <div>
                            <p class="c-r price-code">
                                3.000.000 đ
                            </p>
                        </div>
                        <div class="m1">
                            <span class="dt">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="dt">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="dt">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="dt">
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="dt">
                                <i class="far fa-star"></i>
                            </span>
                            <span class="dt1">
                                450 đánh giá
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="flex align-items-center justify-content-between">
                        <div>
                            <div class="d-l user-av">
                                <img src="https://topcode.vn/Image/avanta.png">
                            </div>
                            <div class="d-l">
                                IT Chuyen vien
                            </div>
                        </div>
                        <div>
                            <a href="#" class="download-code">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>

    </div>

    <div class="text-center">
        <a href="#">
            <button class="btn btn-outline-danger more-btn">
                Xem Thêm >>>
            </button>
        </a>
    </div>
    <!--  -->

    <!-- code like -->

    <!--  -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="m-43 text-center">SOURCE CODE TỐT NHẤT</h4>
            <hr>
        </div>
    </div>
    <!-- item -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4 item-code">
            <div class="card">
                <div class="card-header p-10">
                    <div class="img-scroll">
                        <a href="#">
                            <img class="w-100"
                                src="https://topcode.vn/FilesUpload/Code/code-do-an-phan-mem-quan-ly-quan-nuoc-c-kem-bao-cao-01028.jpg">
                        </a>
                    </div>
                    <div class="demo">
                        <div class="flex">
                            <div class="f50 r">
                                <a href="">
                                    Chi Tiết
                                </a>
                            </div>
                            <div class="f50 g">
                                <a href="">
                                    Xem Thực Tế
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="div-w">
                        <div>
                            <a class="#">
                                <i class="fas fa-code"></i>
                                <span> PHP & Mysql</span>
                            </a>
                        </div>
                        <div class="margin-4">
                            <h5>
                                <a href="#" class="c-b">
                                    Code đồ án Quản lý tài sản môn Lập trình ứng dụng + Báo cáo
                                </a>
                            </h5>
                        </div>
                        <div>
                            <p class="c-r price-code">
                                3.000.000 đ
                            </p>
                        </div>
                        <div class="m1">
                            <span class="dt">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="dt">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="dt">
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="dt">
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <span class="dt">
                                <i class="far fa-star"></i>
                            </span>
                            <span class="dt1">
                                450 đánh giá
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="flex align-items-center justify-content-between">
                        <div>
                            <div class="d-l user-av">
                                <img src="https://topcode.vn/Image/avanta.png">
                            </div>
                            <div class="d-l">
                                IT Chuyen vien
                            </div>
                        </div>
                        <div>
                            <a href="#" class="download-code">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2-4">
            <div class="card">
                <div class="card-header p-10">
                    123
                </div>
            </div>
        </div>

    </div>

    <div class="text-center">
        <a href="#">
            <button class="btn btn-outline-danger more-btn">
                Xem Thêm >>>
            </button>
        </a>
    </div>
    <!--  -->

    <!-- code like -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="m-43 text-center">HỌC LẬP TRÌNH MIỄN PHÍ CÙNG ...</h4>
            <hr>
            <p>
                tech là nơi chia sẻ về các
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
            <div class="card">
                <img class="w-100"
                    src="https://evondev.com/wp-content/uploads/2021/06/banner-khoa-hoc-js-ver1-scaled.jpg">
                <div class="card-body">
                    <h4 class="title-lecture">
                        <a href="#" class="c-b">
                            Khoá học HTML CSS nâng cao cắt giao diện từ thiết kế sử dụng Gulp, Pug
                            và Sass
                        </a>
                    </h4>
                    <div class="flex justify-content-between mbt-15">
                        <span class="course-main course-price">
                            760.000 đ
                        </span>
                        <span>
                            <span class="course-coupon-text">
                                Giá gốc :
                            </span>
                            <strike class="course-coupon-text">
                                1.990.000 đ
                            </strike>
                        </span>
                    </div>
                    <div>
                        <a href="#" class="btn bg-c-yellow w-100 c-w">
                            Xem chi tiết
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- item -->

    <!--  -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="m-43 text-center">CỘNG ĐỒNG IT-SUPPORT</h4>
            <hr>
            <p class="text-center">
                IT-SUPPORT là cộng đồng mà mọi người có thể chia sẻ kiến thức, hỏi đáp thắc mắc,
                những vẫn đề liên quan đến lập trình, debug, design , ...
            </p>
        </div>
    </div>

    <div class="row it_help" style="height: 331px">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Export file CSV/ Excel file cơ bản trong Laravel 6/7 Export file
                                    CSV/ Excel file cơ bản trong Laravel 6/7
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Export file CSV/ Excel file cơ bản trong Laravel 6/7 Export file
                                    CSV/ Excel file cơ bản trong Laravel 6/7
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Export file CSV/ Excel file cơ bản trong Laravel 6/7 Export file
                                    CSV/ Excel file cơ bản trong Laravel 6/7
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Export file CSV/ Excel file cơ bản trong Laravel 6/7 Export file
                                    CSV/ Excel file cơ bản trong Laravel 6/7
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Website bán mỹ phẩm chuẩn seo kèm plugin bảo mật và cache bản
                                    quyền có key
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Website bán mỹ phẩm chuẩn seo kèm plugin bảo mật và cache bản
                                    quyền có key
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Website bán mỹ phẩm chuẩn seo kèm plugin bảo mật và cache bản
                                    quyền có key
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Website bán mỹ phẩm chuẩn seo kèm plugin bảo mật và cache bản
                                    quyền có key
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Website bán mỹ phẩm chuẩn seo kèm plugin bảo mật và cache bản
                                    quyền có key
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Export file CSV/ Excel file cơ bản trong Laravel 6/7 Export file
                                    CSV/ Excel file cơ bản trong Laravel 6/7
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Export file CSV/ Excel file cơ bản trong Laravel 6/7 Export file
                                    CSV/ Excel file cơ bản trong Laravel 6/7
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Export file CSV/ Excel file cơ bản trong Laravel 6/7 Export file
                                    CSV/ Excel file cơ bản trong Laravel 6/7
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <a href="#" class="title-itsp">
                                    Export file CSV/ Excel file cơ bản trong Laravel 6/7 Export file
                                    CSV/ Excel file cơ bản trong Laravel 6/7
                                </a>
                            </h6>
                            <div class="flex justify-content-between">
                                <span>
                                    <a href="#">
                                        Cao Văn Sơn
                                    </a>
                                </span>
                                <span>
                                    6 tiếng trước
                                </span>
                            </div>
                            <div class="sam">
                                <span>
                                    <i class="far fa-eye"></i> 236
                                </span>
                                <span>
                                    <i class="fas fa-comments"></i> 24
                                </span>
                                <span>
                                    <i class="fas fa-thumbs-up"></i> 24
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- item -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                340: {
                    slidesPerView: 1,
                    grid: {
                        rows: 2,
                    },
                },
                640: {
                    slidesPerView: 2,
                    grid: {
                        rows: 2,
                    },
                },
                768: {
                    slidesPerView: 3,
                    grid: {
                        rows: 2,
                    },
                },
                1024: {
                    slidesPerView: 4,
                    grid: {
                        rows: 2,
                    },
                },
            },
        });
    </script>


    <div class="row">
        <div class="col-sm-12">
            <h4 class="m-73 text-center">TIN TỨC - SỰ KIỆN</h4>
            <hr>
            <p class="text-center">
                Cập nhật ngay những tin tức, sự kiện mới nhất trong ngành IT từ đội ngũ chuyên
                nghiệp của Chúng tôi nhé!
            </p>
        </div>
    </div>
    <!-- POST -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
            <div class="card text-center">
                <img class="img-fluid card-img-top" src="assets/images/slider/img-slide-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="">Card title</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                    </p>
                    <a href="#!" class="btn  btn-primary">Xem Thêm ></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
            <div class="card text-center">
                <img class="img-fluid card-img-top" src="assets/images/slider/img-slide-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="">Card title</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                    </p>
                    <a href="#!" class="btn  btn-primary">Xem Thêm ></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
            <div class="card text-center">
                <img class="img-fluid card-img-top" src="assets/images/slider/img-slide-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="">Card title</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                    </p>
                    <a href="#!" class="btn  btn-primary">Xem Thêm ></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-3">
            <div class="card text-center">
                <img class="img-fluid card-img-top" src="assets/images/slider/img-slide-3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="">Card title</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                    </p>
                    <a href="#!" class="btn  btn-primary">Xem Thêm ></a>
                </div>
            </div>
        </div>
    </div>
    <!--  -->


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Inline Text Elements</h5>
                </div>
                <div class="card-body">
                    <p class="lead m-t-0">Your title goes here</p>
                    You can use the mark tag to
                    <mark>highlight</mark> text.
                    <br>
                    <del>This line of text is meant to be treated as deleted text.</del>
                    <br>
                    <ins>This line of text is meant to be treated as an addition to the
                        document.</ins>
                    <br>
                    <strong>rendered as bold text</strong>
                    <br>
                    <em>rendered as italicized text</em>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Contextual Text Colors</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-1">
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.
                    </p>
                    <p class="text-primary mb-1">
                        Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                    <p class="text-success mb-1">
                        Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                    </p>
                    <p class="text-info mb-1">
                        Maecenas sed diam eget risus varius blandit sit amet non magna.
                    </p>
                    <p class="text-warning mb-1">
                        Etiam porta sem malesuada magna mollis euismod.
                    </p>
                    <p class="text-danger mb-1">
                        Donec ullamcorper nulla non metus auctor fringilla.
                    </p>
                    <p class="text-dark mb-1">
                        Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5>Unordered</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5>Ordered</h5>
                </div>
                <div class="card-body">
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5>Unstyled</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Integer molestie lorem at massa
                            <ul>
                                <li>Phasellus iaculis neque</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                    <h5>Inline</h5>
                    <hr>
                    <ul class="list-inline m-b-0">
                        <li class="list-inline-item">Lorem ipsum</li>
                        <li class="list-inline-item">Phasellus iaculis</li>
                        <li class="list-inline-item">Nulla volutpat</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
