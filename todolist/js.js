let i = 0

document.querySelector("#ajouter").addEventListener("click", function(e) {

    let t = document.querySelector("#titre").value;
    let c = document.querySelector("#caf").value;
    let s = document.querySelector("section");
    let d = document.createElement("div");
    let b = document.createElement("button");
    d.id = "chose" + i;
    b.id = "button" + i;
    s.appendChild(d);
    d.innerHTML = "<h2>" + t + "</h2><p>" + c + "</p>";
    d.appendChild(b);
    b.textContent = "X";

    b.addEventListener("click", function(e) {
        s.removeChild(d);
    });

    i = i + 1;
    e.preventDefault();

});