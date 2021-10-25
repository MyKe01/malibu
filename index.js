const express = require('express');
const mongoose = require('mongoose');
require('dotenv').config()

//set up express app
const app = express();

//connect to mongodb
//db not necessary at the moment
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
app.listen(process.env.port || 4000, function(){
    console.log('now listening to requests');
});