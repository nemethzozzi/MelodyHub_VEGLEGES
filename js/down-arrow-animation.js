function waitFor_DownArrowChangeClass() {
    setTimeout(downArrowChangeClass, (1500+700)); //+700 az animation-delay miatt
}

function downArrowChangeClass() {
    var downArrow = document.getElementById('down-arrow');
    downArrow.classList.remove('down-arrow-start-animation');
    downArrow.classList.add('down-arrow-infinite-animation-class');
}