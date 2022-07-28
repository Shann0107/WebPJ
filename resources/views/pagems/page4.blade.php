<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/page4.css">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Inika' rel='stylesheet'>
    <title>Musik</title>
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
            </div>
        </div>
        <div class="song-side">
            <nav>
                <div class="search-box1">
                    <a href="" class="left-button ti-angle-left"></a>
                    <a href="" class="right-button ti-angle-right"></a>
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
                <a href="{{ route('eplaylist') }}">
                    <img class="modal-img" src="../assets/image/logosong.jpg" alt="">
                </a>
                <p class="song-name">Danh sách phát của tôi #...</p>
                <img src="../assets/image/Nhuthang.jpg" alt="" class="sub-logo">
                <p class="sub-name">{{ auth()->user()->name }}</p>

                <!-- <div class="edit-playlist">
                    <span><p class="sub-edit">Sửa thông tin chi tiết</p></span>
                    <div class="btn-ext">
                        <i class="ti-exist bi bi-x"></i>
                    </div>
                    <img src="../assets/image/logosong1.jpg" alt="">
                    <input type="text" class="btn-edit" placeholder="Danh sách phát của tôi#.."></input>
                    <input type="text" class="btn-edit2"></input>
                    <button class="save-btn">Lưu</button>
                    <span><p class="sub-edit2">Bằng cách tiếp tục , bạn cho phép chúng tôi truy cập vào hình ảnh của bạn . Vui lòng đảm bảo bạn có quyền tải lên hình ảnh .</p></span>
                </div> -->
            </div>
            <span><p class="heading-search">Hãy tìm kiếm nội dung danh sách phát của bạn </p></span>
            <div class="search-box">
                <i class="ti-search bi bi-search"></i>
                <input type="text" placeholder="Bài hát, nghệ sĩ">
            </div>
    </header>

    <script>

    </script>
</body>
</html>
