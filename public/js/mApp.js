const music = document.querySelector("#myAudio");
const playBtn = document.querySelector(".playBtn");
const prevBtn = document.querySelector(".prevBtn");
const nextBtn = document.querySelector(".nextBtn");
const title = document.querySelector(".titlee");
const cover = document.querySelector(".cover");
const shuffle = document.querySelector(".btn-shuffle");
const musicContainer = document.querySelector(".music-play");
let wave = document.getElementsByClassName("wave")[0];

//song title
const songs = ["VCNCKNTD", "O trong thanh pho", "Tai vi sao", "Thieu Than", "Better Now", "In The End", "Changes", "Beautiful Now", "On My Way", "Beautiful Scars"]

//Play Song
function loadSong(song) {
    title.innerHTML = song
    music.src = `/assets/song/${song}.mp3`
    cover.src = `/assets/image/${song}.jpg`
    
}

//Play song btn
function playSong() {
    musicContainer.classList.add("play")
    playBtn.querySelector("i.bi").classList.remove("bi-play-circle-fill");
    playBtn.querySelector("i.bi").classList.add("bi-pause-circle-fill");
    wave.classList.add("active");

    music.play();
}

//Pause Song btn
function pauseSong() {
    musicContainer.classList.remove("play")
    playBtn.querySelector("i.bi").classList.add("bi-play-circle-fill");
    playBtn.querySelector("i.bi").classList.remove("bi-pause-circle-fill");
    wave.classList.remove("active");

    music.pause();
}

//Prev song
function prevSong() {
    songIndex--

    if(songIndex < 0) {
        songIndex = songs.length - 1;
    }
    loadSong(songs[songIndex]);

    playSong();
}

//Next song
function nextSong() {
    songIndex++

    if(songIndex > songs.length - 1) {
        songIndex = 0;
    }
    loadSong(songs[songIndex]);

    playSong();
}

//Event Listener
playBtn.addEventListener("click", () => {
    const isPlaying = musicContainer.classList.contains("play");

    if(isPlaying) {
        pauseSong();
    }else {
        playSong();
    }
})

//Track of song
let songIndex = 0;

//load song
loadSong(songs[songIndex])

// Change Song
prevBtn.onclick = function() {
    if(this.isShuffle) {
      shuffleSong()
    }else {
      prevSong();
    }
    playSong();
}

nextBtn.onclick = function() {
    if(this.isShuffle) {
      shuffleSong()
    }else {
      nextSong();
    }
    playSong();
}

let timeStart = document.getElementById("timeStart");
let timeEnd = document.getElementById("timeEnd");
let seek = document.getElementById("seek");
let bar2 = document.getElementById("bar2");
let dot = document.getElementsByClassName("dot")[0];

music.addEventListener("timeupdate", ()=>{
    let music_curr = music.currentTime;
    let music_dur = music.duration;

    let min = Math.floor(music_dur/60);
    let sec = Math.floor(music_dur%60);

    if(sec < 10) {
        sec = `0${sec}`;
    }
    timeEnd.innerText = `${min}:${sec}`;

    let min1 = Math.floor(music_curr/60); 
    let sec1 = Math.floor(music_curr%60);

    if(sec1 < 10) {
        sec1 = `0${sec1}`;
    }
    timeStart.innerText = `${min1}:${sec1}`;

    let progressBar = parseInt((music.currentTime/music.duration)*100);
    seek.value = progressBar;
    let seekBar = seek.value;
    bar2.style.width = `${seekBar}%`;
    dot.style.left = `${seekBar}%`;
})

//Bấm đổi nhạc
// Array.from(document.getElementsByClassName("song-item")).forEach((element)=>{
//     element.addEventListener("click", (e)=>{
//         songIndex = e.target.id;
//         music.src = `/assets/song/${songs}.mp3`;
//         cover.src = `/assets/image/${songs}.jpg`
//         playSong();
//     })
// })

// Tua Nhạc
seek.onchange = function(e) {
    const seekTime = music.duration / 100 * e.target.value
    music.currentTime = seekTime
}

// Trở về nút Play khi hết nhạc
music.addEventListener("ended", ()=> {
    musicContainer.classList.remove("play")
    playBtn.querySelector("i.bi").classList.add("bi-play-circle-fill");
    playBtn.querySelector("i.bi").classList.remove("bi-pause-circle-fill");
})

// Thay đổi âm lượng
let volIcon = document.getElementById("volIcon");
let vol = document.getElementById("volume");
let volBar = document.getElementsByClassName("volBar")[0];
let volDot = document.getElementById("volDot");

vol.addEventListener("change",()=>{
    if(vol.value == 0) {
        volIcon.classList.remove("bi-volume-down-fill");
        volIcon.classList.add("bi-volume-mute-fill");
        volIcon.classList.remove("bi-volume-up-fill");
    }

    if(vol.value > 0) {
        volIcon.classList.add("bi-volume-down-fill");
        volIcon.classList.remove("bi-volume-mute-fill");
        volIcon.classList.remove("bi-volume-up-fill");
    }

    if(vol.value > 50) {
        volIcon.classList.remove("bi-volume-down-fill");
        volIcon.classList.remove("bi-volume-mute-fill");
        volIcon.classList.add("bi-volume-up-fill");
    }

    let volControl = vol.value;
    // volBar.style.width = `${volControl}%`;
    // volDot.style.left = `${volControl}%`;
    music.volume = volControl/100;
})