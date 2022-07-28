<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mPage3a.css">
    <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Music App</title>
</head>
<body>
    <header>
        <div class="song-side">
            <nav>
                <div class="search-box3">
                    <div class="left-btn">
                        <a href="" class="left-button ti-angle-left"></a>
                    </div>

                    <div class="right-btn">
                        <a href="" class="right-button ti-angle-right"></a>
                    </div>
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
                <div class="song-music">
                    <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                    <h2>Chỉnh sửa hồ sơ</h2>
                    <form action="" class="fomt1">
                         <p >Email</p>
                        <input type="email" class="email">
                        <p>Giới tính</p>
                    </form>
                    <select name="" id="" class="chung">

                        <option value="">Nam</option>
                        <option value="">Nữ</option>
                    </select>
                    <form action="" class="fomt1">
                        <p >Ngày sinh</p>
                       <input type="date" class="email">
                       <p>Quốc gia hoặc khu vực</p>

                   </form>
                   <select name="" id="" class="chung">

                    <option value="">Việt Nam</option>
                    <option value="">Lào</option>
                    <form action="" class="fomt2">
                        <a href="{{ route('taikhoan') }}">
                            <input type="submit" value="Hủy" class="submit">
                        </a>
                        <a href="{{ route('taikhoan') }}">
                            <input type="submit" value="Lưu hồ sơ" class="submit1">
                        </a>

                     </form>
                </select>
                </div>
            </nav>
        </div>


    </header>



</body>
</html>
