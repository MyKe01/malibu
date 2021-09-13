const form = document.querySelector('#newsletter');
form.addEventListener( 'submit', function(e){ 
  var dict = {};
  for (var [key, value] of new FormData(form).entries()) { 
    dict[`${key}`] = `${value}`;
  }
  e.preventDefault();
  fetch('http://localhost:4000/api/newsletter', {
    method : 'POST',
    headers : {
      'content-type' : 'application/JSON'
    }, 
    body : JSON.stringify(dict)
  })
  .then(res => {
    return res.text();
  })
  .then(console.log)
  .catch(console.log)
})