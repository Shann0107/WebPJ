<!DOCTYPE html>
<html>
    <head>
        <title>Musik</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/page1.css">
        <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
        <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href='https://fonts.googleapis.com/css?family=Inika' rel='stylesheet'>
    </head>

    <body>
        <header>
            <div class="menu-side">
                <i class="bi bi-list"></i>
                <img src="../assets/image/logo.png" >
                <div class="playlist">
                    <h4>
                        <a href="{{ route('musik-page') }}">
                            <i class="i-home bi bi-house-door"></i>
                            Trang chủ
                        </span></h4>
                        </a>
                        <span>
                    <h4>
                        <a href="{{ route('library') }}">
                            <span>
                            <i class="i-home bi bi-disc"></i>
                            Thư viện
                        </span></h4>
                        </a>
                    <h4>
                        <a href="{{ route('playlist') }}">
                            <span>
                            <i class="i-home bi bi-plus-square"></i>
                            Tạo PLaylist
                        </span></h4>
                        </a>
                    <h4>
                        <a href="{{ route('lovemusic') }}">
                            <span>
                            <i class="i-home bi bi-heart"></i>
                            Bài hát đã thích
                        </span></h4>
                        </a>
                </div>
                <div class="menu-song">
                    <h5 class="list-name">Danh sách phát nhạc của tôi #3</h5>
                    <li class="song-item">
                        <span>01
                        </span>
                        <img src="../assets/image/Better Now.jpg" alt="Post Malone">
                        <h5>
                            Better Now
                        </h5>

                    </li>

                    <li>
                        <span>02
                        </span>
                        <img src="../assets/image/On My Way.jpg" alt="Alan">
                        <h5>
                            On My Way
                        </h5>
                    </li>

                    <li>
                        <span>03
                        </span>
                        <img src="../assets/image/Beautiful Scars.jpg" alt="Kristel Fulgar">
                        <h5>
                            Beautiful Scars
                        </h5>

                    </li>
                </div>
            </div>
            <div class="song-side">
                <nav>
                    <div class="search-box">
                        <i class="ti-search bi bi-search"></i>
                        <a href="{{ route('search') }}">
                            <input type="text" placeholder="Nhập tên bài hát, nghệ sĩ hoặc MV...">
                        </a>
                    </div>

                    <div class="user-music">
                        <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                        <span>{{ auth()->user()->name }}</span>
                        <i class="ti-arrow-down ti-angle-down"></i>
                        <div class="sub-menu-user">
                            <div class="sub-heading-menu">
                                <a href="{{ route('taikhoan') }}"><li>
                                    Tài khoản
                                    <i class="ti-arrow-top-right"></i>
                                </li></a>
                                <a href="{{ route('hoso') }}"><li>Hồ sơ</li></a>
                                <a href=""><li>Cài đặt</li></a>
                                <hr>
                                <a href="{{ route('logout') }}"><li>
                                    Đăng xuất
                                    <i class="bi bi-box-arrow-in-right"></i>
                                </li></a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-user-music">

                    </div>
                </nav>
                <div class="slider">
                    <img src="../assets/image/ads.jpg" alt="">
                    <span><p>Chào buổi tối</p></span>
                </div>
                <div class="list-music">
                    <div class="item1">
                        <img src="../assets/image/chill.jpg" alt="">
                        <span><p class="name1">Pop/Ballad</p></span>
                    </div>

                    <div class="item2">
                        <img src="../assets/image/rap.jpg" alt="">
                        <span><p class="name2">Rap</p></span>
                    </div>

                    <div class="item3">
                        <img src="../assets/image/opera.jpg" alt="">
                        <span><p class="name3">Opera</p></span>
                    </div>

                    <div class="item4">
                        <img src="../assets/image/playlist.jpg" alt="">
                        <span><p class="name4">PlayList</p></span>
                    </div>

                </div>
                <div class="album-music">
                    <span><p>Tuyển tâp hàng đầu của bạn</p></span>
                    <div class="album-list">
                        <div class="album1">
                            <img src="../assets/image/chill.jpg" alt="">
                            <span><p>Album nhạc thư giãn</p></span>
                        </div>

                        <div class="album1">
                            <img src="../assets/image/hiphop.jpg" alt="">
                            <span><p>Album nhạc hiphop</p></span>
                        </div>

                        <div class="album1">
                            <img src="../assets/image/rock.jpg" alt="">
                            <span><p>Album Rock and Roll</p></span>
                        </div>

                        <div class="album1">
                            <img src="../assets/image/R&B.jpg" alt="">
                            <span><p>Album R&B</p></span>
                        </div>

                        <div class="album1">
                            <img src="../assets/image/sleep.jpg" alt="">
                            <span><p>Album Sleep</p></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="master-play"></div>
        </header>

    </body>
    </html>
