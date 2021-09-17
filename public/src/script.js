const form = document.querySelector('#newsletter');

form.addEventListener( 'submit', function(e){ 
  var dict = {};
  for (var [key, value] of new FormData(form).entries()) { 
    dict[`${key}`] = `${value}`;
  }
  e.preventDefault();
  fetch(`http://localhost:4000/api/newsletter`, {
    method : 'POST',
    headers : {
      'content-type' : 'application/JSON'
    }, 
    body : JSON.stringify(dict)
  })
  .then(res => {
    if (res.status == 422){
      document.getElementById('Not_Added').style.display = 'flex';
      document.getElementById('Added').style.display = 'none';
    }else{
      document.getElementById('Added').style.display = 'flex';
      document.getElementById('Not_Added').style.display = 'none';
    } 
    return res.text();
  })
  .then(console.log)
  .catch(console.log)
})