var mysql = require("mysql")

var connection =mysql.createConnection({
    host: "localhost",
    user: "admin",
    password: "admin",
    database: 'db_name',
    port : 3306
  });

connection.connect();

connection.query('CREATE DATABASE mydb', function (error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results[0].solution);
  });
  
connection.query('CREATE TABLE users', function (error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results[0].solution);
  });

  
connection.query('SELECT *', function (error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results[0].solution);
  });
   
connection.end()