var fs = require('fs');
//var http = require('http');
//var https = require('https');
//var privateKey  = fs.readFileSync('./server.key', 'utf8');
//var certificate = fs.readFileSync('./server.cert', 'utf8');

//var credentials = {key: privateKey, cert: certificate};
var express = require('express');
var app = express();
//var httpServer = http.createServer(app);
//var httpsServer = https.createServer(credentials, app);

//comments up are for http/https server but we are without official certificate

app.use(express.static("C:/Users/Utente/Desktop/repo/startup/FrontEnd"));

app.get('/', function(req, res) {
    res.sendFile('/index.html', {root: __dirname })
});

app.listen(8080, () => console.log(`Http server listening on 8080`));