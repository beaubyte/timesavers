window.addEventListener("DOMContentLoaded", domLoaded);
function mouseinbox(event) {
    event.target.style.backgroundColor = "lightblue";
}
function mouseoutbox(event) {
    event.target.style.backgroundColor = "rgb(218, 255, 243)";
}
function domLoaded(){
    let paybutton = document.getElementById("paymentconfirm");
    paybutton.addEventListener("mouseover", mouseinbox);
    paybutton.addEventListener("mouseout",mouseoutbox); // these functions make the box light up when hovered over my the mouse
}
