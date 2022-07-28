<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/page4b.css">
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
            <!-- <img src="../Html-css/logo.png" > -->
            <div class="playlist">
                <h4><span>
                    <i class="i-home bi bi-house-door"></i>
                    Trang chủ
                </span></h4>
                <h4><span>
                    <i class="i-home bi bi-disc"></i>
                    Thư viện
                </span></h4>
                <h4><span>
                    <i class="i-home bi bi-plus-square"></i>
                    Tạo PLaylist
                </span></h4>
                <h4><span>
                    <i class="i-home bi bi-heart"></i>
                    Bài hát đã thích
                </span></h4>
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
                    <img class="js-edit" src="../assets/image/Nhuthang.jpg" alt="avatar">
                    <span><p>{{ auth()->user()->name }}</p></span>
                    <i class="ti-arrow-down ti-angle-down"></i>
                </div>
            </nav>
            <div class="slider">
                <img src="../assets/image/logosong.jpg" alt="">
                <!-- <p class="song-name">Danh sách phát của tôi #...</p>
                <img src="../assets/image/Nhuthang.jpg" alt="" class="sub-logo">
                <p class="sub-name">Nicholas</p> -->
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
        <div id="modal">
            <div class="edit-playlist js-modal-container">
                <span><p class="sub-edit">Sửa thông tin chi tiết</p></span>
                <div class="btn-ext js-modal-close">
                    <a href="{{ route('playlist') }}">
                        <i class="ti-exist bi bi-x"></i>
                    </a>
                </div>
                <img src="../assets/image/logosong1.jpg" alt="">
                <input type="text" class="btn-edit" placeholder="Danh sách phát của tôi#..">
                <input type="text" class="btn-edit2">
                <button class="save-btn">Lưu</button>
                <span><p class="sub-edit2">Bằng cách tiếp tục , bạn cho phép chúng tôi truy cập vào hình ảnh của bạn . Vui lòng đảm bảo bạn có quyền tải lên hình ảnh .</p></span>
            </div>
        </div>
    </header>

    <script>
        const editPlayList = document.querySelectorAll(".js-edit");
        const modal = document.querySelector(".modal");
        const modalContainer = document.querySelector(".js-modal-container");
        const modalClose = document.querySelector(".js-modal-close");

        function ShowPlayList() {
                modal.classList.add("open")
            };

            function HidePlayList() {
                modal.classList.remove("open")
            };

            for (const editPlayListt of editPlayList) {
                editPlayListt.addEventListener("click", ShowPlayList)
            };
            modalClose.addEventListener("click", HidePlayList);
            modal.addEventListener("click", HidePlayList);
            modalContainer.addEventListener("click", function(event) {
                event.stopPropagation()
            });
    </script>
</body>
</html>
