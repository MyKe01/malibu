const express = require('express');
//db not necessary at the moment
//const User = require('../models/newsletter'); 
const router = express.Router();

require('dotenv').config()

const mailchimp = require("@mailchimp/mailchimp_marketing");

mailchimp.setConfig({
  apiKey: process.env.API_KEY_MAILCHIMP,
  server: process.env.SERVER_CODE_MAILCHIMP,
});

const listId = process.env.LIST_ID_MAILCHIMP;

async function run(subscribingUser) {
  const response = await mailchimp.lists.addListMember(listId, {
    email_address: subscribingUser.email,
    status: "subscribed",
    merge_fields: {
      FNAME: subscribingUser.firstName,
      LNAME: subscribingUser.lastName
    }
  })
  .then(res => console.log(`Successfully added contact as an audience member. The contact's id is ${res.id}.`))
  .catch(err => console.log(err.response.error.text));
}

//add new receiver  to the db
router.post('/newsletter', function(req,res,next){
  var subscribingUser = {
      firstName: req.body.name,
      lastName: req.body.surname,
      email: req.body.email
  };
  console.log(subscribingUser)

  //update mailchimp list
  run(subscribingUser);

//db not necessary at the moment
/*  User.create(req.body)
  .then(user => res.send(user))
  .catch(next);
*/
});

module.exports = router;