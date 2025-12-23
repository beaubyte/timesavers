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

function domLoaded(){
    let ok = document.getElementById("okaybutton");
    ok.addEventListener("mouseover", mouseinbox); // thus just makes the button turn blue when hovered and go to the home page when clicked
    ok.addEventListener("mouseout", mouseoutbox);
    ok.addEventListener("click", gobackhome);
    }
