const express = require('express');
const mongoose = require('mongoose');
const http = require('http');
const https = require('https');
const fs = require('fs');
require('dotenv').config()

const privateKey = fs.readFileSync(process.env.dirname + '/pk-APKAJVIYTSGT44Z3LY6A.pem');
const certificate = fs.readFileSync(process.env.dirname + '/cacert.pem');

const credentials = {
    key: privateKey,
    cert: certificate,
};

//set up express app
const app = express();

//connect to mongodb
//mongoose.connect(`mongodb://${process.env.DB_ADDRESS}/modelist`)
//mongoose.Promise = global.Promise; //beacuse it's deprecated

app.use(express.static('public'));

app.use(express.json());

app.use(express.urlencoded({
    extended: true
}))

//initialize routes
app.use('/api', require('./routes/api'));

//error handling middleware
app.use(function(err,req,res,next){
    res.status(422).send({error : err});
});

//listen for requests

var httpsServer = https.createServer(credentials, app);
httpsServer.listen(8443, function(){
    console.log('Listening on 8443');
});

app.listen(process.env.port || 4000, function(){
    console.log('now listening to requests');
});
