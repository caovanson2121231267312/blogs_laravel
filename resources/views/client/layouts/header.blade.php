<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue headerpos-fixed">
    <div class="container">
        <div class="m-header">
            <a class="mobile-menu d-lg-none d-flex" id="mobile-collapse" href="#">
                <i class="fas fa-ellipsis-v"></i>
            </a>
            <a href="{{ route('home') }}" class="b-brand">
                <img src="assets/images/logo.png" alt="" class="logo">
                <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
            </a>
            <a href="#" class="mob-toggler">
                <i class="fas fa-bars f-25"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse flex-wrap">
            <ul class="navbar-nav m-auto">
                <li class="icon-call nav-item d-xl-inline-block d-lg-none d-lg-inline-block">
                    <a href="#" class="pop-search">
                        <i class="fas fa-phone-alt"></i>
                    </a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
                        <button type="button" class="btn-close" aria-label="Close">
                        </button>
                    </div>
                </li>
                <li class="icon-google-it nav-item d-xl-inline-block d-lg-none d-lg-inline-block">
                    <a href="#" class="search-google">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a>
                </li> -->
                <li>
                    <div>
                        <form class="input-group input-group-w">
                            <div class="input-group-append">
                                <!-- <button class="btn  btn-primary btn-icon" type="button"><i class="fas fa-search"></i></button> -->
                                <select class="form-select">
                                    <option>Danh mục</option>
                                    <option>123</option>
                                    <option>1t`11231</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" placeholder="Tìm kiếm code...">
                            <div class="input-group-append">
                                <button class="btn  btn-primary btn-icon" type="button"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"><i
                                class="icon feather icon-bell"></i><span class="badge bg-danger"><span
                                    class="sr-only"></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-end">
                                    <a href="#" class="m-r-10">mark as read</a>
                                    <a href="#">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a href="#" class="displayChatbox dropdown-toggle"><i
                                class="icon feather icon-mail"></i><span class="badge bg-success"><span
                                    class="sr-only"></span></span></a>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="assets/images/user/avatar-1.jpg" class="img-radius wid-40"
                                alt="User-Profile-Image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius"
                                    alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="user-profile.html" class="dropdown-item"><i
                                            class="feather icon-user"></i> Profile</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i
                                            class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i
                                            class="feather icon-lock"></i> Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
