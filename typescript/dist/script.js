var truc = new ToDo();
var showHTML = function (truc) {
    var html = '<ul>';
    truc.toDo.forEach(function (bidule) {
        html += '<li>' + bidule + '</li>';
    });
    html += '</ul>';
    return html;
};
document.querySelector('form').addEventListener('submit', function (e) {
    var value = document.querySelector('#todo').value;
    truc.ajout(value);
    var div = document.querySelector("div");
    div.innerHTML = showHTML(truc);
    e.preventDefault();
});
var div = document.querySelector("div");
div.innerHTML = showHTML(truc);
//# sourceMappingURL=script.js.map