/*
Node.js fait du Javascript dit modulaire. Cela signifie
qu'un fichier javascript ne connait que ce qu'il a été
déclaré à l'intérieur, il ne connait aucune des library
installées ou des modules de Node.js par défaut, ni même
les autres fichiers js d'un même projet.
Pour pouvoir utiliser les autres fichiers/library/module,
il faut utiliser la fonction require() avec comme argument
le nom du module à importer.
Ici, on fait un require du module fs qui se charge de la
gestion des fichiers et dossiers.
*/
/*
Pour utiliser des fonctions/classes/variables d'un autre
fichier js de notre projet, il faut également le require mais
en précédant le nom du fichier par ./
Sans le ./, il ira chercher dans les node_modules un projet
de ce nom là.
*/

console.log('bloup');


var http = require('http');

http.createServer(function (req, res) {
    con.connect(function(err) {
        let sql = "SELECT * FROM bateau";
    });
}).listen(8080);