<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/mPage3.css">
    <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Music App</title>
</head>
<body>
    <!-- Header -->
    <div id="header">
        <div class="search-box">
            <i class="ti-arrow-left ti-arrow-circle-left"></i>
            <i class="ti-arrow-right ti-arrow-circle-right"></i>
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
    </div>

    <!-- Slider -->
    <div id="slider">
        <div class="title">
            <img src="../assets/image/Nhuthang.jpg" alt="avatar">
            <h1>Tổng quan về tài khoản</h1>
        </div>

        <div class="profile">
            <h3>Hồ sơ</h3>
        </div>

        <div class="user-name">
            <h3>Tên người dùng</h3>
            <p>{{ auth()->user()->name }}</p>
        </div>

        <div class="user-mail">
            <h3>Email</h3>
            <p>{{ auth()->user()->email }}</p>
        </div>


        <div class="user-nationality">
            <h3>Quốc gia hoặc khu vực</h3>
            <p>Việt Nam</p>
        </div>

        <a href="{{ route('eprofile') }}">
        <div class="edit-profile">
                <h3>Chỉnh sửa hồ sơ</h3>
            </a>
        </div>
        <img src="../assets/image/logo.png" alt="">
    </div>
</body>
</html>
