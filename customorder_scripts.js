window.addEventListener("DOMContentLoaded", domLoaded);
let comField;
let comSelector;

function mouseinbox(event) {
    event.target.style.backgroundColor = "lightblue";
}
function mouseoutbox(event) {
    event.target.style.backgroundColor = "rgb(218, 255, 243)";
}
// changes the box's options depending on the contact method chosen
function updateBox() {
    let selected = comSelector.options[comSelector.selectedIndex].value;
    if (selected == 'emailopt'){
        comField.setAttribute("placeholder", "example@example.com");
        comField.setAttribute("type", "email");
    } else if (selected == 'phonenumopt') {
        comField.setAttribute("placeholder", "###-###-####");
        comField.setAttribute("type", "tel");
    } else {
    }
}

function domLoaded() {
    comField = document.getElementById("contactval");
    comSelector = document.getElementById("contact");
    comSelector.addEventListener("click", updateBox); // updates box depending on contact method
    let orderSubmit = document.getElementById("ordersubmit");
    orderSubmit.addEventListener("mouseover",mouseinbox);
    orderSubmit.addEventListener("mouseout",mouseoutbox);
}
