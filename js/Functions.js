let play = document.getElementById("play");
    function playMusic() {
    let audio = new Audio("audio/Thomas.mp3");
    audio.play()
    }
play.addEventListener("click", playMusic);

