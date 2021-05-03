//var fs = require('fs');
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

app.get('/contactus', function(req, res){
    res.send("Main page")
})

app.listen(8080, () => console.log(`Http server listening on 8080`));