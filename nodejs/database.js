let mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "navale"
});

function getBoat(sql) {
    con.query(sql, function (err, result) {
        console.log(result);
        let ok = JSON.stringify(result);
        let yo = result[1].nom;
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.write(ok);
        res.write(yo);
        res.end();
    });
}

