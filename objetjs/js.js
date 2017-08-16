let liste = {
    manger: "fruit",
    prendre: "sac",
    faire: "sport"
};
liste["faire"]

let afficheListe = function() {
    document.querySelector("ul").innerHTML = "";
    for (let clef in liste) {
        let ul = document.querySelector("ul");
        let li = document.createElement("li");
        if (Array.isArray(liste[clef])) {
            li.textContent = clef + " : ";
            for (i = 0; i < liste[clef].length; i++) {
                li.textContent += liste[clef][i];
                if (i != liste[clef].length - 1) {
                    li.textContent += ", ";
                }
            }
        } else {
            li.textContent = clef + " : " + liste[clef];
        }
        ul.appendChild(li);

    }
}

function ajoute(clef, valeur) {
    liste[clef] = valeur;
};

function transformeTable(clef, oldvaleur, valeur) {
    liste[clef] = [oldvaleur, valeur];
}

function push(clef, valeur) {
    liste[clef].push(valeur);
}

afficheListe();

document.querySelector("form").addEventListener("submit", function(e) {
    let clef = document.querySelector("#clef").value;
    let valeur = document.querySelector("#valeur").value;
    if (clef != "") {
        if (liste.hasOwnProperty(clef)) {
            if (Array.isArray(liste[clef])) {
                push(clef, valeur);
            } else {
                let oldvaleur = liste[clef];
                transformeTable(clef, oldvaleur, valeur);
            }
        } else {
            ajoute(clef, valeur);
        }
        afficheListe();
    }
    e.preventDefault();
});
