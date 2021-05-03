let inputValue = document.querySelector("#input");
let button = document.querySelector("button");
let button_remove = document.querySelector("#remove");
let ulValue = document.querySelector("ul");

function add(A) {
    let getValue = inputValue.value;
    let createElement = document.createElement("li");
    createElement.textContent = getValue;
    ulValue.appendChild(createElement);
    inputValue.value = "";
    A.preventDefault();
}

function remove() {
    ulValue.remfromHTML = "";
}

button.addEventListener('click', add);
button_remove.addEventListener('click', remove);