const form = document.querySelector('#newsletter');
const submit = document.querySelector('#submit');

function ValidateEmail(mail){
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
    return (true);
  }
    alert("You have entered an invalid email address!");
    return (false);
}

submit.addEventListener('click', function(e){ 
  var dict = {};
  const mail = document.querySelector('#email').value;

  for (var [key, value] of new FormData(form).entries()) { 
    dict[`${key}`] = `${value}`;
  }
  console.log(mail);
  if(ValidateEmail(mail)){
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
      //se va male
      document.getElementById('Not_Added').style.display = 'flex';
      document.getElementById('Added').style.display = 'none';
    }else{
      //se va bene
      document.getElementById('Not_Added').style.display = 'none';
      document.getElementById('Added').style.display = 'flex';
    } 
    return res.text();
  })
  .then(console.log)
  .catch(console.log)
  }
})