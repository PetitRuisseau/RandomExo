function test() {
    console.log("bloup");
};

document.querySelector("a").addEventListener("click", test);

//---------------//

/*let i = 0;
while (i != 4) {
    i = prompt("2+2?");
}*/

document.querySelector("form").addEventListener('submit', function(e) {
    let texte = document.querySelector("#text").value;
    if (texte != "") {
        let sub = document.querySelector("#sub");
        sub.className = "green";
    } else {
        let sub = document.querySelector("#sub");
        sub.className = "red";
    }
    document.querySelector("#sub").addEventListener("webkitAnimationEnd", function() {
        document.querySelector("#sub").className.remove;
        console.log("ok");
    });
    e.preventDefault();
});

document.querySelector("#sub").addEventListener("webkitAnimationEnd", function() {
    document.querySelector("#sub").className.remove;
    console.log("ok");
});