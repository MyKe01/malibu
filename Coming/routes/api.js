const express = require('express');
const User = require('../models/newsletter');
const router = express.Router();

//add new receiver  to the db
router.post('/newsletter', function(req,res,next){
    User.create(req.body)
    .then(user => res.send(user))
    .catch(next);
    
    //update mailchimp list

});

module.exports = router;