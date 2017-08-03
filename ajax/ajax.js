// function doAjax(url, callback) {

// }

// document.querySelector('#apparait').addEventListener('click', function() {
//     let ajax = new XMLHttpRequest();
//     ajax.onreadystatechange = function() {
//         if(ajax.readyState === 4) {
//             if(ajax.status === 200 || ajax.status === 304) {
//                 document.querySelector('p').innerHTML = ajax.response;
//             }
//         }
//     }
//     ajax.open('GET', 'fichier.txt', true);
//     ajax.send();
// });
// document.querySelector('#disparait').addEventListener('click', function() {
//     document.querySelector('p').innerHTML = "";
// });



let change = {
    url: 'change.txt',
    callback: function rempli(response) { document.querySelector('p').innerHTML = response; }
}

let apparait = {
    url: 'fichier.txt',
    callback: function rempli(response) { document.querySelector('p').innerHTML = response; }
}


function doAjax(options) {
    let defaults = {
        url: '',
        method: 'GET',
        async: true,
        args: '',
        callback: function () { },
        callbackError: function () { }
    };
    assignArgs(options,defaults);
    let ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4) {
            if (ajax.status === 200 || ajax.status === 304) { 
                defaults.callback(ajax.response);
            } else {
                defaults.callbackError();
            }
        }
    };
    ajax.open(defaults.method, defaults.url, defaults.async);
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(defaults.args);
}
function assignArgs(source, target) {
    for(let clef in source) {
        if(target.hasOwnProperty(clef)) {
            target[clef] = source[clef];
        }
    }
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
