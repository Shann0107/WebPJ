<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <title>Musik</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../CSS/page2.css">
        <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
        <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href='https://fonts.googleapis.com/css?family=Inika' rel='stylesheet'>
    </head>
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
                <h5>Danh sách phát nhạc của tôi #3</h5>
                <!-- <li class="song-item">
                    <span>01</span>
                    <img src="../Html-css/img/betternow.jpg" alt="Post Malone">
                    <p>
                        Better Now
                    </p>

                    <span>02</span>
                    <img src="../Html-css/img/die for me.jpg" alt="Post Malone">
                    <p>
                        Die for me
                    </p>

                    <span>03</span>
                    <img src="../Html-css/img/deja vu.jpg" alt="Post Malone">
                    <p>
                        Deja vu
                    </p>
                </li> -->
            </div>
        </div>

        <div class="song-side">
            <nav>
                <div class="search-box">
                    <a href="" class="left-button ti-angle-left"></a>
                    <a href="" class="right-button ti-angle-right"></a>
                    <i class="ti-search bi bi-search"></i>
                    <input type="text" placeholder="Nhập tên bài hát, nghệ sĩ hoặc MV...">
                </div>
                <div class="user-music">
                    <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                    <span><p>{{ auth()->user()->name }}</p></span>
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
                <!-- <img src="../Html-css/img/ads.jpg" alt=""> -->
                <span><p>Các tìm kiếm gần đây</p></span>
            </div>
            <div class="list-music">
                <div class="item1">
                    <img src="../assets/image/sleep.jpg" alt="">
                    <span><p>Album Sleep</p></span>
                </div>

                <div class="item1">
                    <img src="../assets/image/game2.jpg" alt="">
                    <span><p>Album Game</p></span>
                </div>

                <div class="item1">
                    <img src="../assets/image/mtp.jpg" alt="">
                    <span><p>Sơn Tùng</p></span>
                </div>

                <div class="item1">
                    <img src="../assets/image/keshi.jpg" alt="">
                    <span><p>Keshi</p></span>
                </div>
            </div>
            <div class="album-music">
                <span><p class="heading-cpntent">Tuyển tâp hàng đầu của bạn</p></span>
                <div class="album-list">
                    <div class="album1 albumm1">
                        <a href="../HTML/page5.html">
                            <span><p>Rock</p></span>
                            <img src="../assets/image/rock.jpg" alt="">
                        </a>
                    </div>

                    <div class="album1 albumm2">
                        <a href="../HTML/page5.html">
                            <span><p>Điện tử</p></span>
                            <img src="../assets/image/electric.jpg" alt="">
                        </a>
                    </div>

                    <div class="album1 albumm3">
                        <a href="../HTML/page5.html">
                            <span><p>Luyện tập</p></span>
                            <img src="../assets/image/sport.jpg" alt="">
                        </a>
                    </div>

                    <div class="album1 albumm4">
                        <a href="../HTML/page5.html">
                            <span><p>Chơi game</p></span>
                            <img src="../assets/image/game.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="album-list2">
                    <div class="album2 albumm5">
                        <a href="../HTML/page5.html">
                            <span><p>Jazz</p></span>
                            <img src="../assets/image/jazz.jpg" alt="">
                        </a>
                    </div>

                    <div class="album2 albumm6">
                        <a href="../HTML/page5.html">
                            <span><p>Metal</p></span>
                            <img src="../assets/image/metal.jpg" alt="">
                        </a>
                    </div>

                    <div class="album2 albumm7">
                        <a href="../HTML/page5.html">
                            <span><p>Cổ điển</p></span>
                            <img src="../assets/image/ballad.jpg" alt="">
                        </a>
                    </div>

                    <div class="album2 albumm8">
                        <a href="../HTML/page5.html">
                            <span><p>Nhạc ngủ ngon</p></span>
                            <img src="../assets/image/sleep.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </header>
</body>
    <script src="../JS/app.js"></script>
</body>
</html>
