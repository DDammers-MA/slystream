let allgames = document.getElementsByClassName("fil");
let filters = document.getElementsByClassName("filter");


//back-end
let action = document.getElementById("checkbox-action");
action.onchange = function () {
    if (action.checked === true) {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "action") {
                allgames[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "action") {
                allgames[i].style.display = "none"
            }

        }
    }
}

//translation
let comedie = document.getElementById("checkbox-comedie");
comedie.onchange = function () {
    if (comedie.checked === true) {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "comedie") {
                allgames[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "comedie") {
                allgames[i].style.display = "none"
            }

        }
    }
}

//logo
let marvel = document.getElementById("checkbox-marvel");

marvel.onchange = function () {
    if (marvel.checked === true) {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "marvel") {
                allgames[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "marvel") {
                allgames[i].style.display = "none"
            }

        }
    }
}

let horror = document.getElementById("checkbox-horror");

horror.onchange = function () {
    if (horror.checked === true) {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "horror") {
                allgames[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allgames.length; i++){
            if (allgames[i].dataset.category === "horror") {
                allgames[i].style.display = "none"
            }

        }
    }
}
