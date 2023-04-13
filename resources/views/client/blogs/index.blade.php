@extends('layouts.client')

@section('title')
    <title>
        {{-- {{ $post->name }} --}}
    </title>
    {{-- <meta name="description" content="{{ $post->description }}" /> --}}
    <meta name="keywords" content="Cao Sơn">
    <meta name="author" content="Cao Sơn" />
@endsection

@section('body')
    <!--  -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-center">TOP BÀI VIẾT</h4>
            <hr>
        </div>
    </div>
    <!-- item -->
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
            <div>
                <div class="row">
                    {{--  --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card text-center">
                            <img class="img-fluid card-img-top" src="assets/images/slider/img-slide-3.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <a href="#!" class="btn  btn-primary">Xem Thêm &gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card text-center">
                            <img class="img-fluid card-img-top" src="assets/images/slider/img-slide-3.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <a href="#!" class="btn  btn-primary">Xem Thêm &gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card text-center">
                            <img class="img-fluid card-img-top" src="assets/images/slider/img-slide-3.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <a href="#!" class="btn  btn-primary">Xem Thêm &gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card text-center">
                            <img class="img-fluid card-img-top" src="assets/images/slider/img-slide-3.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <a href="#!" class="btn  btn-primary">Xem Thêm &gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card text-center">
                            <img class="img-fluid card-img-top" src="assets/images/slider/img-slide-3.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="">Card title</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                                <a href="#!" class="btn  btn-primary">Xem Thêm &gt;</a>
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 ">
            <div class="card border-radius-2px">
                <div class="card-body">
                    <form class="input-group rounded-1" method="get" action="">
                        <input type="text" class="form-control border-radius-2px" placeholder="Tìm kiếm bài viết...">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-icon" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card border-radius-2px mt-10">
                <div class="card-header p-t-10 p-b-0">
                    <h3 class="h4 p-0">
                        Bài viết mới nhất
                    </h3>
                </div>
                <hr class="m-0 p-0">
                <div class="card-body">
                    <div>
                        <ul class="list-news">
                            <li class="item-news">
                                <a class="text-dark mb-0" href="#">
                                    Làm Thế Nào Để Ứng Viên Không "Bùng" Lịch Phỏng Vấn
                                </a>
                            </li>
                        </ul>
                    </div>
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
@endsection
