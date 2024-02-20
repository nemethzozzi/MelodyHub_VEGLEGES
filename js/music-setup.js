//globális változók
var playButton = document.getElementById('test-play-button');
var musicSection = document.getElementById('music-section');
var musicalNote = document.getElementById('musical-note-icon');

const musicSource = [
    {
        "id": 0,
        "file": "../music/Azahriah_szosziazi.mp3",
        "coverImage": "../images/azahriah.jpg",
        "author": "Azahriah",
        "title": "szosziazi",
        "genre": "pop",
        "minute": 3,
        "sec": 28
    },

    {
        "id": 1,
        "file": "../music/Tenno_Torii_Road.mp3",
        "coverImage": "../images/tenno.jpg",
        "author": "Tenno",
        "title": "Torii Road",
        "genre": "instrumental",
        "minute": 2,
        "sec": 9
    },

    {
        "id": 2,
        "file": "../music/Azahriah_FIGYELJ.mp3",
        "coverImage": "../images/azahriah.jpg",
        "author": "Azahriah",
        "title": "FIGYELJ",
        "genre": "pop",
        "minute": 2,
        "sec": 44
    },

    {
        "id": 3,
        "file": "../music/No_Resolve_Get_Me_Out.mp3",
        "coverImage": "../images/no_resolve.jpeg",
        "author": "No Resolve",
        "title": "Get Me Out",
        "genre": "rock",
        "minute": 3,
        "sec": 47
    },

    {
        "id": 4,
        "file": "../music/Adagio_in_G_Minor_Albinoni.mp3",
        "coverImage": "../images/adagio.jpeg",
        "author": "Adagio in G Minor",
        "title": "Albinoni",
        "genre": "classical",
        "minute": 8,
        "sec": 56
    },

    {
        "id": 5,
        "file": "../music/Kim_Dracula_CLOSE_UR_EYES.mp3",
        "coverImage": "../images/kim_dracula.jpg",
        "author": "Kim Dracula",
        "title": "1-800-CLOSE-UR-EYES",
        "genre": "metal",
        "minute": 2,
        "sec": 13
    },

    {
        "id": 6,
        "file": "../music/Kim_Dracula_Killdozer.mp3",
        "coverImage": "../images/kim_dracula2.jpg",
        "author": "Kim Dracula",
        "title": "Killdozer",
        "genre": "metal",
        "minute": 2,
        "sec": 31
    },

    {
        "id": 7,
        "file": "../music/Follow_The_Flow_Szelcsend.mp3",
        "coverImage": "../images/follow_the_flow.jpg",
        "author": "Follow The Flow",
        "title": "Szélcsend",
        "genre": "pop",
        "minute": 2,
        "sec": 45
    },

    {
        "id": 8,
        "file": "../music/Call_Me_G_Type_Beat_NINA.mp3",
        "coverImage": "../images/call_me_g.jpg",
        "author": "Call Me G",
        "title": "Type Beat - NINA",
        "genre": "instrumental",
        "minute": 3,
        "sec": 21
    },

    {
        "id": 9,
        "file": "../music/TDanny_BORDZSEKI_feat_VALMAR.mp3",
        "coverImage": "../images/TDanny.jpg",
        "author": "T. Danny",
        "title": "BŐRDZSEKI (feat. VALMAR)",
        "genre": "hiphop",
        "minute": 2,
        "sec": 42
    },


    
    {
        "id": 10,
        "file": "../music/Blackkeys_LonelyBoy.mp3",
        "coverImage": "../images/Blackkeys.jpg",
        "author": "The Black Keys",
        "title": "Lonely Boy",
        "genre": "rock",
        "minute": 3,
        "sec": 14
    },

    
    {
        "id": 11,
        "file": "../music/SRV_Prideandjoy.mp3",
        "coverImage": "../images/SRV.jpg",
        "author": "Stevie Ray Vaughan",
        "title": "Pride and Joy",
        "genre": "blues",
        "minute": 3,
        "sec": 44
    },
    
    {
        "id": 12,
        "file": "../music/Rihanna_Umbrella.mp3",
        "coverImage": "../images/Rihanna.jpg",
        "author": "Rihanna",
        "title": "Umbrella (feat JAY Z)",
        "genre": "pop",
        "minute": 4,
        "sec": 20
    },
    
    {
        "id": 13,
        "file": "../music/RHCP_BELLA.mp3",
        "coverImage": "../images/RHCP.jpg",
        "author": "Red Hot Chili Peppers",
        "title": "Bella",
        "genre": "rock",
        "minute": 4,
        "sec": 51
    },

    {
        "id": 14,
        "file": "../music/RATM_Testify.mp3",
        "coverImage": "../images/RATM.jpg",
        "author": "Rage Against The Machine",
        "title": "Testify",
        "genre": "rock",
        "minute": 3,
        "sec": 43
    },
    
    {
        "id": 15,
        "file": "../music/Polyphia_PlayingGod.mp3",
        "coverImage": "../images/Polyphia.jpg",
        "author": "Polyphia",
        "title": "Playing God",
        "genre": "instrumental",
        "minute": 3,
        "sec": 24
    },

    
    {
        "id": 16,
        "file": "../music/Polyphia_GOAT.mp3",
        "coverImage": "../images/Polyphia.jpg",
        "author": "Polyphia",
        "title": "G.O.A.T.",
        "genre": "instrumental",
        "minute": 3,
        "sec": 36
    },

    
    {
        "id": 17,
        "file": "../music/PoganyIndulo_Pogitell.mp3",
        "coverImage": "../images/PoganyIndulo.jpg",
        "author": "Pogány Induló",
        "title": "Pogi Tell (Feat NKS)",
        "genre": "hiphop",
        "minute": 3,
        "sec": 34
    },

    
    {
        "id": 18,
        "file": "../music/JohnMayer_WildBlue.mp3",
        "coverImage": "../images/JohnMayer.jpg",
        "author": "John Mayer",
        "title": "Wild Bllue",
        "genre": "pop",
        "minute": 4,
        "sec": 6
    },

    
    {
        "id": 19,
        "file": "../music/DianaRoss_ItsMyHouse.mp3",
        "coverImage": "../images/DianaRoss.jpg",
        "author": "Diana Ross",
        "title": "It's My House",
        "genre": "pop",
        "minute": 4,
        "sec": 35
    },
    
    {
        "id": 20,
        "file": "../music/IronMaiden_Trooper.mp3",
        "coverImage": "../images/IronMaiden.jpg",
        "author": "Iron Maiden",
        "title": "The Trooper",
        "genre": "rock",
        "minute": 4,
        "sec": 24
    },
    
    {
        "id": 21,
        "file": "../music/BBKing_Hummingbird.mp3",
        "coverImage": "../images/BBKing.jpg",
        "author": "B.B. King",
        "title": "Hummingbird",
        "genre": "blues",
        "minute": 4,
        "sec": 41
    },
    
    {
        "id": 22,
        "file": "../music/Metallica_FadeToBlack.mp3",
        "coverImage": "../images/Metallica.jpg",
        "author": "Metallica",
        "title": "Fade To Black",
        "genre": "metal",
        "minute": 6,
        "sec": 58
    },

    
    {
        "id": 23,
        "file": "../music/Elefant_kar.mp3",
        "coverImage": "../images/Elefant.jpg",
        "author": "Elefánt",
        "title": "Kár",
        "genre": "rock",
        "minute": 3,
        "sec": 51
    },

    
    {
        "id": 24,
        "file": "../music/ChildishGambino_ThisisAmerica.mp3",
        "coverImage": "../images/ChildishGambino.jpg",
        "author": "Childish Gambino",
        "title": "This is America",
        "genre": "hiphop",
        "minute": 4,
        "sec": 5
    },
    
    {
        "id": 25,
        "file": "../music/ChetBaker_AlmostBlue.mp3",
        "coverImage": "../images/ChetBaker.jpg",
        "author": "Chet Baker",
        "title": "Almost Blue",
        "genre": "jazz",
        "minute": 7,
        "sec": 34
    },

    
    {
        "id": 26,
        "file": "../music/CharlieParker_I'vegotrythm.mp3",
        "coverImage": "../images/CharlieParker.jpg",
        "author": "Charlie Parker",
        "title": "I've Got Rythm",
        "genre": "jazz",
        "minute": 5,
        "sec": 55
    },

    
    {
        "id": 27,
        "file": "../music/BrunoMars_24K.mp3",
        "coverImage": "../images/BrunoMars.jpg",
        "author": "Bruno Mars",
        "title": "24K Magic",
        "genre": "pop",
        "minute": 3,
        "sec": 47
    },

    
    {
        "id": 28,
        "file": "../music/AM_Sculptures.mp3",
        "coverImage": "../images/ArcticMonkeys.jpg",
        "author": "Arctic Monkeys",
        "title": "Sculptures Of Anything Goes",
        "genre": "rock",
        "minute": 3,
        "sec": 58
    },

    
    {
        "id": 29,
        "file": "../music/6363_Riado.mp3",
        "coverImage": "../images/6363.jpg",
        "author": "6363",
        "title": "Riadó (Feat. Lil Frakk)",
        "genre": "hiphop",
        "minute": 2,
        "sec": 14
    },
    {
        "id": 30,
        "file": "../music/Vivaldi_Spring.mp3",
        "coverImage": "../images/Vivaldi.jpg",
        "author": "Vivaldi",
        "title": "Spring",
        "genre": "classical",
        "minute": 10,
        "sec": 0
    }


];

function getMusicSourceLength() {
    return musicSource.length;
}

var delay = 0;
function incDelay() {
    delay+=.1;
}

function listMusic() {

    //a musicSection kiürítése
    musicSection.innerHTML="";

    //animációhoz
    delay=0;

    //display: none a musical note-ra
    musicalNote.style.display = "none";

    var genresSelectInput = document.getElementById('genres-select');
    var selectedGenre = genresSelectInput.value;

    //update margins
    musicSection.style.margin="100px 0px 50px 0px";

    


    //összes zenét kilistázza (osszes alapertelmezett value miatt)
    if(selectedGenre==="osszes") {

        for(let i=0; i<musicSource.length; i++) {

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
            musicDiv.style.animationDelay = 0+delay+"s";
            incDelay();
            

                musicDivImg.src= musicSource[i].coverImage;
                musicDivImg.alt=musicSource[i].author;
                musicDivImg.classList.add("music-div-author-image");

                musicDivAuthor.textContent = musicSource[i].author;
                musicDivAuthor.classList.add("music-div-author");
    
                musicDivMusicTitle.textContent = musicSource[i].title;
                musicDivMusicTitle.classList.add("music-div-music-title");
    
                //ha 10-nél kisebb az érték akkor egy nullát rakjon az elejére
                if(musicSource[i].minute%10==musicSource[i].minute) {
                    musicDivMusicLength.textContent = "0"+musicSource[i].minute+":";
                } else {
                    musicDivMusicLength.textContent = musicSource[i].minute+":";
                }
    
                if(musicSource[i].sec%10==musicSource[i].sec) {
                    musicDivMusicLength.textContent += "0"+musicSource[i].sec;
                } else {
                    musicDivMusicLength.textContent += musicSource[i].sec;
                }
    
                musicDivMusicLength.classList.add("music-div-music-length");
    
                musicDivPlayIcon.src="../images/play-icon.svg";
                musicDivPlayIcon.alt="Play Button";
                musicDivPlayIcon.classList.add("music-div-music-button");

                audioSource.src=musicSource[i].file;
                audioSource.type="audio/mpeg";

                musicDivPlayIcon.addEventListener("click", () => {
                    if (audioPlayerInTheBackground.paused) {
                        audioPlayerInTheBackground.play();
                        musicDiv.style.backgroundImage="linear-gradient(135deg, rgba(65,65,65,1) 0%, rgba(40,40,40,1) 100%)";
                        audioPlayerInTheBackground.addEventListener("ended", function() {
                            musicDivPlayIcon.src = "../images/play-icon.svg";
                            musicDiv.style.backgroundImage="var(--card-background-color-gradient)";
                        });
                        musicDivPlayIcon.src="../images/pause-icon.svg";
                    } else {
                        audioPlayerInTheBackground.pause();
                        musicDiv.style.backgroundImage="var(--card-background-color-gradient)";
                        musicDivPlayIcon.src="../images/play-icon.svg";
                    }
                  });
                
                //az elkészített musicDiv a musicSection gyereke lesz.
                musicSection.appendChild(musicDiv);

    
        }

    } else {

        for(let i=0; i<musicSource.length; i++) {
            if(musicSource[i].genre===selectedGenre) {

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
                musicDiv.style.animationDelay = 0+delay+"s";
                incDelay();

                musicDivImg.src= musicSource[i].coverImage;
                musicDivImg.alt=musicSource[i].author;
                musicDivImg.classList.add("music-div-author-image");
    
                musicDivAuthor.textContent = musicSource[i].author;
                musicDivAuthor.classList.add("music-div-author");
    
                musicDivMusicTitle.textContent = musicSource[i].title;
                musicDivMusicTitle.classList.add("music-div-music-title");
    
                //ha 10-nél kisebb az érték akkor egy nullát rakjon az elejére
                if(musicSource[i].minute%10==musicSource[i].minute) {
                    musicDivMusicLength.textContent = "0"+musicSource[i].minute+":";
                } else {
                    musicDivMusicLength.textContent = musicSource[i].minute+":";
                }
    
                if(musicSource[i].sec%10==musicSource[i].sec) {
                    musicDivMusicLength.textContent += "0"+musicSource[i].sec;
                } else {
                    musicDivMusicLength.textContent += musicSource[i].sec;
                }
    
                musicDivMusicLength.classList.add("music-div-music-length");
    
                musicDivPlayIcon.src="../images/play-icon.svg";
                musicDivPlayIcon.alt="Play Button";
                musicDivPlayIcon.classList.add("music-div-music-button");

                audioSource.src=musicSource[i].file;
                audioSource.type="audio/mpeg";

                musicDivPlayIcon.addEventListener("click", () => {
                    if (audioPlayerInTheBackground.paused) {
                        audioPlayerInTheBackground.play();
                        musicDiv.style.backgroundImage="linear-gradient(135deg, rgba(65,65,65,1) 0%, rgba(40,40,40,1) 100%)";
                        audioPlayerInTheBackground.addEventListener("ended", function() {
                            musicDivPlayIcon.src = "../images/play-icon.svg";
                            musicDiv.style.backgroundImage="var(--card-background-color-gradient)";
                        });
                        musicDivPlayIcon.src="../images/pause-icon.svg";
                    } else {
                        audioPlayerInTheBackground.pause();
                        musicDiv.style.backgroundImage="var(--card-background-color-gradient)";
                        musicDivPlayIcon.src="../images/play-icon.svg";
                    }
                  });
                
                //az elkészített musicDiv a musicSection gyereke lesz.
                musicSection.appendChild(musicDiv);
    
            }
        }
       

    }


}




/*
function ChangeMusic() {
    const audioPlayer = document.getElementById("audio-player");
    const audioPlayerSource = document.getElementById("test-play-button");

    audioPlayerSource.setAttribute("src", "");
    audioPlayer.load(); // optional: force the audio to reload with the new source

}
*/



