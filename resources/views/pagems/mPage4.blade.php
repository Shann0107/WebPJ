<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/mPage4.css">
    <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Music App</title>
</head>
<body>
    <div id="header">
        <div class="box-profile">

        </div>
        <div class="search-box">
            <i class="ti-arrow-left ti-arrow-circle-left"></i>
            <i class="ti-arrow-right ti-arrow-circle-right"></i>
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
    </div>
    <div id="slider">
        <div class="profile">
            <img src="../assets/image/Nhuthang.jpg" alt="avatar">
            <p>Hồ sơ</p>
            <h1>{{ auth()->user()->name }}</h1>
            <h3>13 Playlist công khai. 50 người theo dõi</h3>
        </div>
        <div class="edit-profile">
            <button class="js-edit">Chỉnh sửa hồ sơ</button>
        </div>
        <div class="top-singer">
            <h3>Nghệ sĩ hàng đầu tháng này</h3>
            <p>Chỉ hiện thị với bạn</p>
        </div>
        <div class="list-singer">
            <div class="singer">
                <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                <h3>Lenona</h3>
                <p>Nghệ sĩ</p>
            </div>

            <div class="singer">
                <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                <h3>Napoli</h3>
                <p>Nghệ sĩ</p>
            </div>

            <div class="singer">
                <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                <h3>Pele</h3>
                <p>Nghệ sĩ</p>
            </div>

            <div class="singer">
                <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                <h3>Alice</h3>
                <p>Nghệ sĩ</p>
            </div>

            <div class="singer">
                <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                <h3>Nicky Robert</h3>
                <p>Nghệ sĩ</p>
            </div>
        </div>
        <div class="top-song">
            <h3>Bản nhạc hàng đầu tháng này </h3>
            <p>Chỉ hiện thị với bạn</p>
        </div>
        <div class="song-1">
            <span>1</span>
            <img src="../assets/image/Beautiful Now.jpg" alt="avatar">
            <h3>Beutifull Now</h3>
            <h4>Zedd</h4>
            <p>Beautifull (Original EDM song)</p>
            <h5>3:19</h5>
        </div>

        <div class="song-2">
            <span>2</span>
            <img src="../assets/image/My Love.jpg" alt="avatar">
            <h3>One call away</h3>
            <h4>Charlie Puth</h4>
            <p>Attention</p>
            <h5>3:05</h5>
        </div>
    </div>
    <div class="modal js-modal">
        <div class="modal-containers js-modal-container">
            <div class="modal-close js-modal-close">
                <i class="ti-close"></i>
            </div>

            <header class="modal-header">
                <h1>Chi tiết hồ sơ</h1>
            </header>

            <div class="modal-body">
                <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                 <input type="text" placeholder="Nicholas">
                 <div class="modal-save">
                    <p>Lưu</p>
                </div>
            </div>
            <p class="sub-modal">Bằng cách tiếp tục, bạn đồng ý cho Musik truy cập vào hình ảnh bạn đã chọn để tải lên.
                <br> Vui lòng đảm bảo quyền tải lên hình ảnh.
            </p>
        </div>
    </div>

    <script>
        const editProf = document.querySelectorAll(".js-edit");
        const modal = document.querySelector(".js-modal");
        const modalContainer = document.querySelector(".js-modal-container");
        const modalClose = document.querySelector(".js-modal-close");

        function ShowProfile() {
                modal.classList.add("open")
            };

            function HideProfile() {
                modal.classList.remove("open")
            };

            for (const editPro of editProf) {
                editPro.addEventListener("click", ShowProfile)
            };
            modalClose.addEventListener("click", HideProfile);
            modal.addEventListener("click", HideProfile);
            modalContainer.addEventListener("click", function(event) {
                event.stopPropagation()
            });
    </script>
</body>
</html>
