<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/page5.css">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inika' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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
                <h5 class="list-name">Danh sách phát nhạc của tôi #3</h5>
                <li class="song-item" id="1">
                    <span>01</span>
                    <img src="../assets/image/Better Now.jpg" alt="Post Malone">
                    <h5 class="title">
                        Better Now
                    </h5>


                </li>

                <li class="song-item" id="2">
                    <span>02</span>
                    <img src="../assets/image/In The End.jpg" alt="Post Malone">
                    <h5 class="title">
                        In The End
                    </h5>
                </li>

                <li class="song-item" id="3">
                    <span>03</span>
                    <img src="../assets/image/Changes.jpg" alt="XXXTENTACION">
                    <h5 class="title">
                        Changes
                    </h5>

                </li>
            </div>
        </div>

        <div class="song-side">
            <nav id="btn-control">
                <div class="left-btn">
                    <a href="" class="left-button ti-angle-left"></a>
                </div>

                <div class="right-btn">
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
                <div class="music-logo">
                    <i class="heart bi-heart"></i>
                </div>
                <p class="playlist">Playlist</p>
                <p class="name">Bài hát đã thích</p>
                <img src="../assets/image/Nhuthang.jpg" alt="avatar">
                <span class="user-name">{{ auth()->user()->name }}</span>
            </div>

            <div class="second-slider">
                <button id="play-btn" type="button">
                    <i class="fas fa-play"></i>
                </button>
                <!-- <i class="play-album bi-play-circle-fill"></i> -->
                <i class="download-btn bi-download"></i>

                <div class="search-box">
                    <i class="ti-search bi-search"></i>
                    <input type="text" placeholder="Tìm kiếm danh sách">
                </div>
            </div>

            <div class="third-slider">
                <div class="list-song">
                    <span class="song-name"># Bài hát</span>
                    <span class="album-name">Album</span>
                    <span class="time"><i class="bi bi-clock-history"></i></span>
                </div>

                <div class="song-infor">
                    <li>
                        <div id="song">
                            <span class="song-name song-one">1
                                <img src="../assets/image/Beautiful Now.jpg" alt="zedd">
                                <h5>
                                    Beautiful Now
                                    <div class="subtitle">Zedd</div>
                                </h5>
                            </span>
                            <span class="album-name">Beautiful (Original EDM song )</span>
                            <span class="time">3:19</span>
                        </div>
                    </li>

                    <li>
                        <div id="song">
                            <span class="song-name song-two">2
                                <img src="../assets/image/On My Way.jpg" alt="alan">
                                <h5>
                                    On My Way
                                    <div class="subtitle">Alan</div>
                                </h5>
                            </span>
                            <span class="album-name bug-name">Walker (Original EDM song )</span>
                            <span class="time bug-time">3:00</span>
                        </div>
                    </li>

                    <li>
                        <div id="song">
                            <span class="song-name song-three">3
                                <img src="../assets/image/Beautiful Scars.jpg" alt="Kristel Fulgar">
                                <h5>
                                    Beautiful Scars
                                    <div class="subtitle">Kristel Fulgar</div>
                                </h5>
                            </span>
                            <span class="album-name bugg-name">Broken Heart (Original Sad song )</span>
                            <span class="time bug-time">3:10</span>
                        </div>
                    </li>
                </div>
            </div>

        </div>

        <div class="music-play">
            <div class="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>

            <div class="currImg">
                <img src="/assets/image/Tai vi sao.jpg" alt="curr-song" class="cover">
            </div>

            <div class="song-name">
                <span class="titlee">Tại vì sao</span>
                <!-- <div class="subtitle">MCK</div> -->
            </div>
            <div class="icon-mp">
                <!-- <div class="btnn btn-shuffle">
                    <i class="ti-control-shuffle"></i>
                </div> -->

                <div class="btnn prevBtn">
                    <i class="bi bi-skip-start-fill"></i>
                </div>

                <div id="play" class="btnn playBtn">
                    <i id="masterPlay" class="bi bi-play-circle-fill"></i>
                </div>

                <div class="btnn nextBtn">
                    <i class="bi bi-skip-end-fill"></i>
                </div>

                <!-- <div class="btnn redo">
                    <i class="bi bi-arrow-repeat"></i>
                </div> -->

            </div>

            <span id="timeStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" class="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="timeEnd">0:00</span>

            <div class="vol">
                <i class="volume bi-volume-up-fill" id="volIcon"></i>
                <input type="range" id="volume" min="0" value="100" max="100">
                <div class="volBar"></div>
                <div class="dot" id="volDot"></div>
            </div>

            <audio id="myAudio">
                <source src="/assets/song/Tai vi sao.mp3" type="audio/mpeg">
            </audio>
        </div>
    </header>
    <script src="js/mApp.js"></script>
    <!-- <script src="js/App.js"></script> -->
</body>
</html>
