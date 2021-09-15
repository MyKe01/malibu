const mongoose = require('mongoose');
const Schema = mongoose.Schema;

//create newsletter schema & model
const UserSchema = new Schema({
    name : {
        type : String,
        required :[true, 'Name field is required']
    },
    surname : {
        type : String,
        required :[true, 'Name field is required']
    },
    email : {
        type : String,
        required :[true, 'Email field is required'],
        unique : true
    },
});

const User = mongoose.model('user', UserSchema);

module.exports = User;