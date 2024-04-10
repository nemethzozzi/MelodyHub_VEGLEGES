//globális változók
var playButton = document.getElementById("test-play-button");
var musicSection = document.getElementById("music-section");
var musicalNote = document.getElementById("musical-note-icon");

const musicSource = [
  {
    id: 0,
    file: "../music/Azahriah_szosziazi.mp3",
    coverImage: "../images/azahriah.jpg",
    author: "Azahriah",
    title: "szosziazi",
    genre: "pop",
    minute: 3,
    sec: 28,
  },

  {
    id: 1,
    file: "../music/Tenno_Torii_Road.mp3",
    coverImage: "../images/tenno.jpg",
    author: "Tenno",
    title: "Torii Road",
    genre: "instrumental",
    minute: 2,
    sec: 9,
  },

  {
    id: 2,
    file: "../music/Azahriah_FIGYELJ.mp3",
    coverImage: "../images/azahriah.jpg",
    author: "Azahriah",
    title: "FIGYELJ",
    genre: "pop",
    minute: 2,
    sec: 44,
  },

  {
    id: 3,
    file: "../music/No_Resolve_Get_Me_Out.mp3",
    coverImage: "../images/no_resolve.jpeg",
    author: "No Resolve",
    title: "Get Me Out",
    genre: "rock",
    minute: 3,
    sec: 47,
  },

  {
    id: 4,
    file: "../music/Adagio_in_G_Minor_Albinoni.mp3",
    coverImage: "../images/adagio.jpeg",
    author: "Adagio in G Minor",
    title: "Albinoni",
    genre: "classical",
    minute: 8,
    sec: 56,
  },

  {
    id: 5,
    file: "../music/Kim_Dracula_CLOSE_UR_EYES.mp3",
    coverImage: "../images/kim_dracula.jpg",
    author: "Kim Dracula",
    title: "1-800-CLOSE-UR-EYES",
    genre: "metal",
    minute: 2,
    sec: 13,
  },

  {
    id: 6,
    file: "../music/Kim_Dracula_Killdozer.mp3",
    coverImage: "../images/kim_dracula2.jpg",
    author: "Kim Dracula",
    title: "Killdozer",
    genre: "metal",
    minute: 2,
    sec: 31,
  },
];

function getMusicSourceLength() {
  return musicSource.length;
}

var delay = 0;
function incDelay() {
  delay += 0.1;
}

function listMusic() {
  //a musicSection kiürítése
  musicSection.innerHTML = "";

  //animációhoz
  delay = 0;

  //display: none a musical note-ra
  musicalNote.style.display = "none";

  var genresSelectInput = document.getElementById("genres-select");
  var selectedGenre = genresSelectInput.value;

  //update margins
  musicSection.style.margin = "100px 0px 50px 0px";

  //összes zenét kilistázza (osszes alapertelmezett value miatt)
  if (selectedGenre === "osszes") {
    for (let i = 0; i < musicSource.length; i++) {
      //minden egyes zenének csinál egy új divet, és felépíti a hierarchiát
      let musicDiv = document.createElement("div");
      let musicDivImg = document.createElement("img");
      let musicDivAuthor = document.createElement("h3");
      let musicDivMusicTitle = document.createElement("h4");
      let musicDivMusicLength = document.createElement("h5");
      let musicDivPlayIcon = document.createElement("img");
      let audioPlayerInTheBackground = document.createElement("audio");
      let audioSource = document.createElement("source");

      audioPlayerInTheBackground.appendChild(audioSource);

      musicDiv.appendChild(musicDivImg);
      musicDiv.appendChild(musicDivAuthor);
      musicDiv.appendChild(musicDivMusicTitle);
      musicDiv.appendChild(musicDivMusicLength);
      musicDiv.appendChild(musicDivPlayIcon);
      musicDiv.appendChild(audioPlayerInTheBackground);

      musicDiv.classList.add("music-div", "start-musicdiv-animation");
      musicDiv.style.animationDelay = 0 + delay + "s";
      incDelay();

      musicDivImg.src = musicSource[i].coverImage;
      musicDivImg.alt = musicSource[i].author;
      musicDivImg.classList.add("music-div-author-image");

      musicDivAuthor.textContent = musicSource[i].author;
      musicDivAuthor.classList.add("music-div-author");

      musicDivMusicTitle.textContent = musicSource[i].title;
      musicDivMusicTitle.classList.add("music-div-music-title");

      //ha 10-nél kisebb az érték akkor egy nullát rakjon az elejére
      if (musicSource[i].minute % 10 == musicSource[i].minute) {
        musicDivMusicLength.textContent = "0" + musicSource[i].minute + ":";
      } else {
        musicDivMusicLength.textContent = musicSource[i].minute + ":";
      }

      if (musicSource[i].sec % 10 == musicSource[i].sec) {
        musicDivMusicLength.textContent += "0" + musicSource[i].sec;
      } else {
        musicDivMusicLength.textContent += musicSource[i].sec;
      }

      musicDivMusicLength.classList.add("music-div-music-length");

      musicDivPlayIcon.src = "../images/play-icon.svg";
      musicDivPlayIcon.alt = "Play Button";
      musicDivPlayIcon.classList.add("music-div-music-button");

      audioSource.src = musicSource[i].file;
      audioSource.type = "audio/mpeg";

      musicDivPlayIcon.addEventListener("click", () => {
        if (audioPlayerInTheBackground.paused) {
          audioPlayerInTheBackground.play();
          musicDiv.style.backgroundImage =
            "linear-gradient(135deg, rgba(65,65,65,1) 0%, rgba(40,40,40,1) 100%)";
          audioPlayerInTheBackground.addEventListener("ended", function () {
            musicDivPlayIcon.src = "../images/play-icon.svg";
            musicDiv.style.backgroundImage =
              "var(--card-background-color-gradient)";
          });
          musicDivPlayIcon.src = "../images/pause-icon.svg";
        } else {
          audioPlayerInTheBackground.pause();
          musicDiv.style.backgroundImage =
            "var(--card-background-color-gradient)";
          musicDivPlayIcon.src = "../images/play-icon.svg";
        }
      });

      //az elkészített musicDiv a musicSection gyereke lesz.
      musicSection.appendChild(musicDiv);
    }
  } else {
    for (let i = 0; i < musicSource.length; i++) {
      if (musicSource[i].genre === selectedGenre) {
        //minden egyes zenének csinál egy új divet, és felépíti a hierarchiát
        let musicDiv = document.createElement("div");
        let musicDivImg = document.createElement("img");
        let musicDivAuthor = document.createElement("h3");
        let musicDivMusicTitle = document.createElement("h4");
        let musicDivMusicLength = document.createElement("h5");
        let musicDivPlayIcon = document.createElement("img");
        let audioPlayerInTheBackground = document.createElement("audio");
        let audioSource = document.createElement("source");

        audioPlayerInTheBackground.appendChild(audioSource);

        musicDiv.appendChild(musicDivImg);
        musicDiv.appendChild(musicDivAuthor);
        musicDiv.appendChild(musicDivMusicTitle);
        musicDiv.appendChild(musicDivMusicLength);
        musicDiv.appendChild(musicDivPlayIcon);
        musicDiv.appendChild(audioPlayerInTheBackground);

        musicDiv.classList.add("music-div", "start-musicdiv-animation");
        musicDiv.style.animationDelay = 0 + delay + "s";
        incDelay();

        musicDivImg.src = musicSource[i].coverImage;
        musicDivImg.alt = musicSource[i].author;
        musicDivImg.classList.add("music-div-author-image");

        musicDivAuthor.textContent = musicSource[i].author;
        musicDivAuthor.classList.add("music-div-author");

        musicDivMusicTitle.textContent = musicSource[i].title;
        musicDivMusicTitle.classList.add("music-div-music-title");

        //ha 10-nél kisebb az érték akkor egy nullát rakjon az elejére
        if (musicSource[i].minute % 10 == musicSource[i].minute) {
          musicDivMusicLength.textContent = "0" + musicSource[i].minute + ":";
        } else {
          musicDivMusicLength.textContent = musicSource[i].minute + ":";
        }

        if (musicSource[i].sec % 10 == musicSource[i].sec) {
          musicDivMusicLength.textContent += "0" + musicSource[i].sec;
        } else {
          musicDivMusicLength.textContent += musicSource[i].sec;
        }

        musicDivMusicLength.classList.add("music-div-music-length");

        musicDivPlayIcon.src = "../images/play-icon.svg";
        musicDivPlayIcon.alt = "Play Button";
        musicDivPlayIcon.classList.add("music-div-music-button");

        audioSource.src = musicSource[i].file;
        audioSource.type = "audio/mpeg";

        musicDivPlayIcon.addEventListener("click", () => {
          if (audioPlayerInTheBackground.paused) {
            audioPlayerInTheBackground.play();
            musicDiv.style.backgroundImage =
              "linear-gradient(135deg, rgba(65,65,65,1) 0%, rgba(40,40,40,1) 100%)";
            audioPlayerInTheBackground.addEventListener("ended", function () {
              musicDivPlayIcon.src = "../images/play-icon.svg";
              musicDiv.style.backgroundImage =
                "var(--card-background-color-gradient)";
            });
            musicDivPlayIcon.src = "../images/pause-icon.svg";
          } else {
            audioPlayerInTheBackground.pause();
            musicDiv.style.backgroundImage =
              "var(--card-background-color-gradient)";
            musicDivPlayIcon.src = "../images/play-icon.svg";
          }
        });

        //az elkészített musicDiv a musicSection gyereke lesz.
        musicSection.appendChild(musicDiv);
      }
    }
  }
}
