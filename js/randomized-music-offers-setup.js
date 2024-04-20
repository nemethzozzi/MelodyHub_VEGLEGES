//globális változók
var musicOffersSection = document.getElementById("music-offers-section");

const musicSource = [
  {
    id: 0,
    file: "./music/Azahriah_szosziazi.mp3",
    coverImage: "./images/azahriah.jpg",
    author: "Azahriah",
    title: "szosziazi",
    genre: "pop",
    minute: 3,
    sec: 28,
  },

  {
    id: 1,
    file: "./music/Tenno_Torii_Road.mp3",
    coverImage: "./images/tenno.jpg",
    author: "Tenno",
    title: "Torii Road",
    genre: "instrumental",
    minute: 2,
    sec: 9,
  },

  {
    id: 2,
    file: "./music/Azahriah_FIGYELJ.mp3",
    coverImage: "./images/azahriah.jpg",
    author: "Azahriah",
    title: "FIGYELJ",
    genre: "pop",
    minute: 2,
    sec: 44,
  },

  {
    id: 3,
    file: "./music/No_Resolve_Get_Me_Out.mp3",
    coverImage: "./images/no_resolve.jpeg",
    author: "No Resolve",
    title: "Get Me Out",
    genre: "rock",
    minute: 3,
    sec: 47,
  },

  {
    id: 4,
    file: "./music/Adagio_in_G_Minor_Albinoni.mp3",
    coverImage: "./images/adagio.jpeg",
    author: "Adagio in G Minor",
    title: "Albinoni",
    genre: "classical",
    minute: 8,
    sec: 56,
  },

  {
    id: 5,
    file: "./music/Kim_Dracula_CLOSE_UR_EYES.mp3",
    coverImage: "./images/kim_dracula.jpg",
    author: "Kim Dracula",
    title: "1-800-CLOSE-UR-EYES",
    genre: "metal",
    minute: 2,
    sec: 13,
  },

  {
    id: 6,
    file: "./music/Kim_Dracula_Killdozer.mp3",
    coverImage: "./images/kim_dracula2.jpg",
    author: "Kim Dracula",
    title: "Killdozer",
    genre: "metal",
    minute: 2,
    sec: 31,
  },
];

// fetch("../uploads/musicSourceForMainPage.json")
//   .then((response) => {
//     if (!response.ok) {
//       throw new Error("Network response was not ok: " + response.statusText);
//     }
//     return response.json();
//   })
//   .then((data) => {
//    console.log("Music data loaded:", data); //ellenőrzés hogy meghívodott e json
//     musicSource = data;
//     listMusic();
//   })
//   .catch((error) => {
//     console.error("Error fetching music data:", error);
//   });

//Valamiért nem működik a fetchelés és csak tölt az oldal, ezért a manuális megoldás van it megvalósítva

function getMusicSourceLength() {
  return musicSource.length - 1;
}

function generateRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

var delay = 0;
function incDelay() {
  delay += 0.1;
}

function listOffers() {
  delay = 0;

  //ebbe lesznek a random kiválasztott számok rendundancia nélkül
  let idArray = [];

  //itt már van egy elem benne, lehet vizsgálni
  idArray.push(generateRandomInt(0, getMusicSourceLength()));

  while (true) {
    if (idArray.length == 5) {
      break;
    }

    let randomId = generateRandomInt(0, getMusicSourceLength());
    if (!idArray.includes(randomId)) {
      idArray.push(randomId);
    }
  }

  for (let i = 0; i < idArray.length; i++) {
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

    musicDivImg.src = musicSource[idArray[i]].coverImage;
    musicDivImg.alt = musicSource[idArray[i]].author;
    musicDivImg.classList.add("music-div-author-image");

    musicDivAuthor.textContent = musicSource[idArray[i]].author;
    musicDivAuthor.classList.add("music-div-author");

    musicDivMusicTitle.textContent = musicSource[idArray[i]].title;
    musicDivMusicTitle.classList.add("music-div-music-title");

    //ha 10-nél az érték akkor egy nullát rakjon az elejére
    if (musicSource[idArray[i]].minute % 10 == musicSource[idArray[i]].minute) {
      musicDivMusicLength.textContent =
        "0" + musicSource[idArray[i]].minute + ":";
    } else {
      musicDivMusicLength.textContent = musicSource[idArray[i]].minute + ":";
    }

    if (musicSource[idArray[i]].sec % 10 == musicSource[idArray[i]].sec) {
      musicDivMusicLength.textContent += "0" + musicSource[idArray[i]].sec;
    } else {
      musicDivMusicLength.textContent += musicSource[idArray[i]].sec;
    }

    musicDivMusicLength.classList.add("music-div-music-length");

    musicDivPlayIcon.src = "./images/play-icon.svg";
    musicDivPlayIcon.alt = "Play Button";
    musicDivPlayIcon.classList.add("music-div-music-button");

    audioSource.src = musicSource[idArray[i]].file;
    audioSource.type = "audio/mpeg";

    musicDivPlayIcon.addEventListener("click", () => {
      if (audioPlayerInTheBackground.paused) {
        audioPlayerInTheBackground.play();
        musicDiv.style.backgroundImage =
          "linear-gradient(135deg, rgba(65,65,65,1) 0%, rgba(40,40,40,1) 100%)";
        audioPlayerInTheBackground.addEventListener("ended", function () {
          musicDivPlayIcon.src = "./images/play-icon.svg";
          musicDiv.style.backgroundImage =
            "var(--card-background-color-gradient)";
        });
        musicDivPlayIcon.src = "./images/pause-icon.svg";
      } else {
        audioPlayerInTheBackground.pause();
        musicDiv.style.backgroundImage =
          "var(--card-background-color-gradient)";
        musicDivPlayIcon.src = "./images/play-icon.svg";
      }
    });

    //az elkészített musicDiv a musicSection gyereke lesz.
    musicOffersSection.appendChild(musicDiv);
  }
}
