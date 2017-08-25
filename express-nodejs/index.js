var express = require('express');
var mustache = require('mustache');
var app = express();
var port = process.env.PORT || 80;


app.use(express.static('front'));

app.get('/test', function(req, res) {
    let str = mustache.render("hello {{name}}", {
        name: ['Clem', 'fred', 'cam']
    });
    res.send(str);
});

app.use(function(req, res) {
  res.status(404).sendFile(__dirname + '/front/404.html');
});

app.listen(port);