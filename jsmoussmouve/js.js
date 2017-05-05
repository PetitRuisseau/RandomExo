document.body.addEventListener("mousemove", function(event) {
    let x = event.clientX;
    let y = event.clientY;
    //console.log(x.toString(), y.toString());
    let div = document.querySelector("div");
    div.style.left = x - 30 + "px";
    div.style.top = y - 27 + "px";
    let h = window.innerHeight;
    let w = window.innerWidth;
    let red = (y * 255) / h;
    let blue = (x * 255) / w;
    red = Math.trunc(red);
    blue = Math.trunc(blue);
    div.style.background = "rgb(" + red + ",0," + blue + ")";
    console.log(h, red);
});

document.querySelector("a").addEventListener("mouseenter", function(event) {
    let x = Math.random() * 90;
    let y = Math.random() * 90;
    let a = document.querySelector("a");
    a.style.left = x + "vh";
    a.style.top = y + "vh";
});