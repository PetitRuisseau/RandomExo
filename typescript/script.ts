var truc:object = new ToDo();
let showHTML = function(truc):string {
    let html:string = '<ul>';
    truc.toDo.forEach(function(bidule){
        html += '<li>'+bidule+'</li>';
    });
    html += '</ul>';
    return html;
}
document.querySelector('form').addEventListener('submit', function(e) {
    let value:string = document.querySelector('#todo').value;
    truc.ajout(value);
    let div:Element = document.querySelector("div");
    div.innerHTML = showHTML(truc);
    e.preventDefault();
});
let div:Element = document.querySelector("div");
    div.innerHTML = showHTML(truc);

