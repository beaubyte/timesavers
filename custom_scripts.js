window.addEventListener("DOMContentLoaded", domLoaded);

function mouseinbox(event) {
    event.target.style.backgroundColor = "lightblue";
}
function mouseoutbox(event) {
    event.target.style.backgroundColor = "rgb(218, 255, 243)";
}
function gobackhome() {
    window.location.replace("index.php");
}

function domLoaded() {
    // makes the button light up when hover
    button = document.getElementById("iunderstand");
    button.addEventListener("mouseover",mouseinbox);
    button.addEventListener("mouseout",mouseoutbox);
    button.addEventListener("click",gobackhome);
}
