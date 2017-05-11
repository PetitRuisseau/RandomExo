let i = 0
let truc = [
    [1],
    [1],
    [1]
];
truc[0][0]

let ajouter = function() {
    let tablo = [];
    let tablesection = document.querySelector("section").children;
    for (i = 0, i < tablesection.length, i++) {
        let titre = tablesection[i].querySelector("h3").textContent;
        let caf = tablesection[i].querySelector("p").textContent;
        tablo[i] = [titre, caf];
        console.log(titre + caf);
    }

}

let afficher = function() {
    let ul = document.querySelector("ul");
    ul.innerHTML = " ";
    for (i = 0, i < tablo.length, i++) {
        console.log(titre);
    }
}

document.querySelector("#ajouter").addEventListener("click", function(e) {

    let titre = document.querySelector("#titre").value;
    let caf = document.querySelector("#caf").value;
    let section = document.querySelector("section");

    let div = document.createElement("div");
    let button = document.createElement("button");
    let h3 = document.createElement("h3");
    let p = document.createElement("p");

    div.id = "element" + i;
    button.id = "button" + i;
    h3.textContent = titre;
    p.textContent = caf;
    button.textContent = "X";

    section.appendChild(div);
    div.appendChild(h3);
    div.appendChild(p);
    div.appendChild(button);

    button.addEventListener("click", function() {
        div.remove;
    });

    i = i + 1;
    e.preventDefault();
    ajouter();
    afficher();

});