import {doAjax} from './ajax';


let change = {
    url: 'change.txt',
    callback: function rempli(response) { document.querySelector('p').innerHTML = response; }
}

let apparait = {
    url: 'fichier.txt',
    callback: function rempli(response) { document.querySelector('p').innerHTML = response; }
}


document.querySelector('#apparait').addEventListener('click', function () {
    doAjax(apparait);
});
document.querySelector('#change').addEventListener('click', function () {
    doAjax(change);
});
document.querySelector('#disparait').addEventListener('click', function() {
    document.querySelector('p').innerHTML = "";
});
document.querySelector('input[type="submit"]').addEventListener('click', function(e) {
    let input = document.querySelector('input[type="text"]').value;
    doAjax({
        url: 'php.php',
        callback: function rempli(response) { 
            document.querySelector('ul').innerHTML += '<li>' + response + '</li>'; 
        },
        method: 'POST',
        args: 'new=' + input
    });
    document.querySelector('input[type="text"]').value = '';
    e.preventDefault();
});
