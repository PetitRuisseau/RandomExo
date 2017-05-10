let haut = false;
let bas = false;
let droite = true;
let gauche = false;
let span = document.querySelector("span");
let div = document.querySelector("div");
let a = document.querySelector("a");
let h1 = document.querySelector("h1");
let toper = 50;
let lefter = 50;
let topa = 300;
let lefta = 500;
let wesh = false;
let score = 0;


window.addEventListener("keydown", function(event) {
    if (event.defaultPrevented) {
        return; // Should do nothing if the key event was already consumed.
    }
    switch (event.key) {
        case "ArrowDown":
            //console.log("bas");
            if (haut == false) {
                haut = false;
                bas = true;
                droite = false;
                gauche = false;
            } else {

            }
            break;
        case "ArrowUp":
            //console.log("haut");
            if (bas == false) {
                haut = true;
                bas = false;
                droite = false;
                gauche = false;
            } else {

            }
            break;
        case "ArrowLeft":
            //console.log("gauche");
            if (droite == false) {
                haut = false;
                bas = false;
                droite = false;
                gauche = true;
            } else {

            }
            break;
        case "ArrowRight":
            //console.log("l'autre gauche");
            if (gauche == false) {
                haut = false;
                bas = false;
                droite = true;
                gauche = false;
            } else {

            }
            break;
        default:
            return; // Quit when this doesn't handle the key event.
    }
    // Consume the event for suppressing "double action".
    event.preventDefault();
}, true);

function test(ta, la, tb, lb) {
    let m = false;
    let j = false;
    let k = false;
    let l = false;


    if ((ta - 5) <= tb) {
        console.log("ok pour top")
        m = true;
    } else {
        m = false;
    }

    if ((ta + 45) >= (tb + 20)) {
        console.log("ok pour top+")
        j = true;
    } else {
        j = false;
    }

    if ((la - 5) <= lb) {
        console.log("ok pour left")
        k = true;
    } else {
        k = false;
    }

    if ((la + 45) >= (lb + 20)) {
        console.log("ok pour left+")
        l = true;
    } else {
        l = false;
    }

    if (m == true & j == true & k == true & l == true) {
        console.log("ok pour tous")
        wesh = true;
    } else {
        wesh = false;
    }

}

setInterval(function() {
    if (toper < 600 & lefter < 1000 & toper > 0 & lefter > 0) {
        if (haut == true) {
            //console.log("haut");
            span.textContent = "/\\";
            toper = toper - 1;
            span.style.top = toper + "px";
        } else if (bas == true) {
            //console.log("bas");
            span.textContent = "\\/";
            toper = toper + 1;
            span.style.top = toper + "px";
        } else if (droite == true) {
            //console.log("l'autre gauche");
            span.textContent = ">";
            lefter = lefter + 1;
            span.style.left = lefter + "px";
        } else if (gauche == true) {
            //console.log("gauche");
            span.textContent = "<";
            lefter = lefter - 1;
            span.style.left = lefter + "px";
        } else {
            console.log("probleme");
        }
    } else {
        span.style.display = "none";
        div.style.background = "black";
        div.style.textAlign = "center";
        div.style.lineHeight = "600px";
        div.style.fontSize = "6em";
        div.textContent = "PERDU !";
    }

    test(toper, lefter, topa, lefta);
    if (wesh == true) {
        topa = (Math.random() * 600) + 20;
        lefta = (Math.random() * 1000) + 20;
        a.style.left = lefta + "px";
        a.style.top = topa + "px";
        let section = document.createElement("section");
        section.style.left = ((Math.random() * 1000) + 20) + "px";
        section.style.top = ((Math.random() * 600) + 20) + "px";
        div.appendChild(section);
        score = score + 1;
        h1.textContent = score;

    } else {

    }
}, 5);