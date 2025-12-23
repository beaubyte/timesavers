window.addEventListener("DOMContentLoaded", domLoaded);
let id = null;
function complete_purchase(){
    window.location.replace("payment.php?id=" + id[0]);
}
function return_to_stock(){
    window.location.replace("premade.php");
}
function mouseinbox(event){
    event.target.style.backgroundColor = "lightblue";
}
function mouseoutbox(event){
    event.target.style.backgroundColor = "rgb(218, 255, 243)";
}
// ths grabs the ID from the HTML with REGEX, and then sends it over the next get request when the user hits the confirm button
function domLoaded(){
    let confirm = document.getElementById("confirmpurchase");
    let reject = document.getElementById("rejectpurchase");
    let re = /\d+/;
    target = document.getElementById("confirmtext");
    id = re.exec(target.innerHTML);
    confirm.addEventListener("click", complete_purchase);
    confirm.addEventListener("mouseover", mouseinbox); // this is just for the box to turn blue when the mouse goes over it
    confirm.addEventListener("mouseout", mouseoutbox);
    reject.addEventListener("click",return_to_stock);
    reject.addEventListener("mouseover",mouseinbox);
    reject.addEventListener("mouseout", mouseoutbox);
}
