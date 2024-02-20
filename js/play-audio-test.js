function toggleAudio() {
    var audio = document.getElementById('audio-player');
    var playButton = document.getElementById('test-play-button');

    if(audio.paused) {
        audio.play();
        playButton.src = "../images/pause-icon.svg";
        audio.addEventListener("ended", function() {
            playButton.src = "../images/play-icon.svg";
        });
    } else {
        audio.pause();
        playButton.src = "../images/play-icon.svg";
}

}

