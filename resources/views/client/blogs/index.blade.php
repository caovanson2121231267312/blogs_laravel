@extends('layouts.client')

@section('title')
    <title>
        {{ $post->name }}
    </title>
    <meta name="description" content="{{ $post->description }}" />
    <meta name="keywords" content="Cao Sơn">
    <meta name="author" content="Cao Sơn" />
@endsection

@section('body')
    <div class="container">
        <div class="m-t-10"></div>

        <section class="main-container">
            <div class="dff">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <span>
                            <i class="fas fa-chevron-left"></i>
                        </span>
                        <span>
                            <a class="back" href="{{ route('home') }}">Quay lại</a>
                        </span>
                    </div>
                    <div>
                        <span>Chuyên mục: </span>
                        <a class="btn-cate m-f-r" href="">{{ $post->category->name }}</a>
                    </div>
                </div>
            </div>

            <div class="content">
                <p class="title-post">
                    {{ $post->name }}
                </p>

                <div class="d-flex justify-content-between">
                    <div class="m-t-b-1 d-flex align-items-center">
                        <span class="address-news">
                            <a href="">{{ $post->category->name }}</a>
                        </span>
                        <span>.</span>
                        <span class="user-name-news">
                            {{ $post->user->name }}
                        </span>
                        <span>.</span>
                        <span class="date-news">
                            {{ date_format($post->created_at, 'd/m/Y') }}
                        </span>
                    </div>
                    <div class="m-t-b-1 w-c">
                        <a class="btn btn-mail" href="">
                            <i class="far fa-envelope"></i>
                            <span class="d-none-mobile1">Gửi mail</span>
                        </a>
                        <a class="btn btn-share" href="">
                            <i class="fab fa-facebook"></i>
                            <span class="d-none-mobile1">Chia sẻ</span>
                        </a>
                        <a class="btn btn-save" href="">
                            <i class="fas fa-heart"></i>
                            <span class="d-none-mobile1">Lưu</span>
                        </a>
                    </div>
                </div>

                <div class="img-post">
                    <img src="{{ asset('assets/images/articles/' . $post->image) }}">
                </div>

                <div class="p-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem id varius rutrum aliquam. Diam
                        ullamcorper ut mattis fringilla nunc, sed eu nisi. Amet, duis auctor tempor sit mauris rhoncus.
                        Pretium at massa sed morbi sit tincidunt arcu. Pharetra, turpis id elementum cursus amet, eu
                        scelerisque ipsum. Suspendisse nulla congue mauris mattis diam sed venenatis non bibendum.
                        Vestibulum, lobortis aenean lorem aenean sagittis. Et nibh ullamcorper justo cursus eget. Tortor
                        faucibus volutpat, vel nullam sed massa ullamcorper in ultrices. Augue viverra tincidunt amet,
                        neque, dictum tellus turpis. Ipsum nisl mi est, tempus phasellus morbi quisque. Mi sed sit amet
                        ipsum. Mi erat leo fringilla ullamcorper.
                    </p>
                    <p>
                        Aenean gravida cursus tempus nullam ipsum sit et. Id pellentesque vel, mattis massa vitae. Amet, vel
                        nunc sed adipiscing fermentum suspendisse est bibendum. Elit interdum tincidunt diam egestas
                        condimentum nibh. Massa mollis vitae id morbi pulvinar tincidunt. Risus euismod nec fringilla eros,
                        commodo. Odio morbi in at penatibus eleifend orci scelerisque. Auctor ornare volutpat penatibus
                        maecenas vel. Luctus libero at in ut justo molestie aliquet. Ultricies suspendisse hac nibh vivamus
                        facilisis nulla.
                    </p>
                    <p>
                        Augue et elit velit malesuada sit egestas et augue volutpat. Sagittis, suspendisse semper mi
                        faucibus aliquam eget. Cras diam nunc, malesuada amet imperdiet quis molestie. Nibh nunc lacus quis
                        quis nisi integer. Tincidunt viverra semper nisl, quis vel cras fermentum. Porttitor tortor urna
                        pulvinar rhoncus, adipiscing nisl facilisi vulputate. Massa vestibulum lorem nunc purus phasellus
                        commodo praesent a. Proin integer non ultrices sagittis, sit non adipiscing eu risus. Ac dignissim
                        malesuada et lectus ut iaculis at libero. Id ut non consectetur cursus purus. Egestas cursus vitae
                        odio enim. Nunc, non ac quam gravida in. Odio morbi ullamcorper nullam nisi, risus, donec.
                    </p>
                </div>

                <div class="row">
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <img class="img-full" src="{{ asset('client/images/news/img_11.png') }}">
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4 row">
                        <div class="col-6">
                            <img class="img-full br-24" src="{{ asset('client/images/news/img_12.png') }}">
                        </div>
                        <div class="col-6">
                            <img class="img-full br-24" src="{{ asset('client/images/news/img_13.png') }}">
                        </div>
                    </div>
                </div>

                <div class="h3 mt-1">
                    Lorem ipsum dolor sit amet,
                </div>

                <div class="p-content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem id varius rutrum aliquam. Diam
                        ullamcorper ut mattis fringilla nunc, sed eu nisi. Amet, duis auctor tempor sit mauris rhoncus.
                        Pretium at massa sed morbi sit tincidunt arcu. Pharetra, turpis id elementum cursus amet, eu
                        scelerisque ipsum. Suspendisse nulla congue mauris mattis diam sed venenatis non bibendum.
                        Vestibulum, lobortis aenean lorem aenean sagittis. Et nibh ullamcorper justo cursus eget. Tortor
                        faucibus volutpat, vel nullam sed massa ullamcorper in ultrices. Augue viverra tincidunt amet,
                    </p>
                </div>

                <div class="li-content">
                    <ul>
                        <li>
                            <span class="s1">Tiêu chí 1: </span>
                            <span class="s2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit molestie
                                etiam nunc egestas</span>
                        </li>
                        <li>
                            <span class="s1">Tiêu chí 2: </span>
                            <span class="s2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit molestie
                                etiam nunc egestas</span>
                        </li>
                        <li>
                            <span class="s1">Tiêu chí 3: </span>
                            <span class="s2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit molestie
                                etiam nunc egestas</span>
                        </li>
                        <li>
                            <span class="s1">Tiêu chí 4: </span>
                            <span class="s2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit molestie
                                etiam nunc egestas</span>
                        </li>
                        <li>
                            <span class="s1">Tiêu chí 5: </span>
                            <span class="s2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit molestie
                                etiam nunc egestas</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tag">
                @foreach ($post->tags as $value)
                    <a class="btn btn-tag" href="tag/{{ $value->slug }}"># {{ $value->name }}</a>
                @endforeach
            </div>

            <div class="post">
                <div class="d-flex justify-content-between mt-5">
                    <span class="p-b">Tin cùng chuyên mục <a class="btn-cate m-f-r" href="">Xã hội</a>

                    </span>
                    <a class="d-none  d-flex-m align-items-center" href="">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <span class="d-none-mobile1">
                        <a href="">Xem tất cả</a>
                    </span>
                </div>

                <div class="row">

                    @foreach ($post_same as $value)
                        <div class="post-item row">
                            <div class="col-12 d-none d-block-md">
                                <a class="" href="{{ route('blogs', $value->slug) }}">
                                    <p class="title-news">{{ $value->name }}</p>
                                </a>
                                <div class="m-t-b-1 m-0-mb">
                                    <span class="address-news">
                                        <a href="{{ route('blogs', $value->slug) }}">{{ $value->category->name }}</a>
                                    </span>
                                    <span>.</span>
                                    <span class="user-name-news">
                                        {{ $value->user->name }}
                                    </span>
                                    <span>.</span>
                                    <span class="date-news">
                                        {{ date_format($value->created_at, 'd/m/Y') }}
                                    </span>
                                </div>
                            </div>
                            <div class="img p-r col-6 col-lg-4 col-xl-4">
                                <a href="{{ route('blogs', $value->slug) }}">
                                    <img src="{{ asset('assets/images/articles/' . $value->image) }}">
                                </a>
                                <span class="p-a add-like">
                                    <a href="">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </span>
                            </div>
                            <div class="col-6 col-lg-8 col-xl-8">
                                <a class="d-none-mobile" href="{{ route('blogs', $value->slug) }}">
                                    <p class="title-news">{{ $value->name }}</p>
                                </a>
                                <div class="d-none-mobile m-t-b-1">
                                    <span class="address-news">
                                        <a href="">{{ $value->category->name }}</a>
                                    </span>
                                    <span>.</span>
                                    <span class="user-name-news">
                                        {{ $value->user->name }}
                                    </span>
                                    <span>.</span>
                                    <span class="date-news">
                                        {{ date_format($value->created_at, 'd/m/Y') }}
                                    </span>
                                </div>
                                <div class="title-description">
                                    {{ $value->description }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="post">
                <div class="d-flex justify-content-between mt-5">
                    <span class="p-b">Tin thịnh hành

                    </span>
                    <a class="d-none d-initial-mobile1" href="">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                    <span class="d-none-mobile1">
                        <a href="">Xem tất cả</a>
                    </span>
                </div>

                <div class="row">

                    @foreach ($posts as $value)
                        <div class="post-item row">
                            <div class="col-12 d-none d-block-md">
                                <a class="" href="{{ route('blogs', $value->slug) }}">
                                    <p class="title-news">{{ $value->name }}</p>
                                </a>
                                <div class="m-t-b-1 m-0-mb">
                                    <span class="address-news">
                                        <a href="">{{ $value->category->name }}</a>
                                    </span>
                                    <span>.</span>
                                    <span class="user-name-news">
                                        {{ $value->user->name }}
                                    </span>
                                    <span>.</span>
                                    <span class="date-news">
                                        {{ date_format($value->created_at, 'd/m/Y') }}
                                    </span>
                                </div>
                            </div>
                            <div class="img p-r col-6 col-lg-4 col-xl-4">
                                <a href="{{ route('blogs', $value->slug) }}">
                                    <img src="{{ asset('assets/images/articles/' . $value->image) }}">
                                </a>
                                <span class="p-a add-like">
                                    <a href="">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </span>
                            </div>
                            <div class="col-6 col-lg-8 col-xl-8">
                                <a class="d-none-mobile" href="{{ route('blogs', $value->slug) }}">
                                    <p class="title-news">{{ $value->name }}</p>
                                </a>
                                <div class="d-none-mobile m-t-b-1">
                                    <span class="address-news">
                                        <a href="">{{ $value->category->name }}</a>
                                    </span>
                                    <span>.</span>
                                    <span class="user-name-news">
                                        {{ $value->user->name }}
                                    </span>
                                    <span>.</span>
                                    <span class="date-news">
                                        {{ date_format($value->created_at, 'd/m/Y') }}
                                    </span>
                                </div>
                                <div class="title-description">
                                    {{ $value->description }}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


        </section>

    </div>
@endsection
