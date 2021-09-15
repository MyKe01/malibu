You have to add in file ".env" your global names as server address or api key.

With the command : "node ./index.js" 
the server will start to listen to requests.

In order to connect the MongoDB database you have to open a different command prompt. Create the data directory where MongoDB stores data.
MongoDB's default data directory path is the absolute path \data\db on the drive from which you start MongoDB.

From the Command Interpreter, create the data directories:

"
cd C:\
md "\data\db"
"

Start your MongoDB database.
To start MongoDB, run exe.

"C:\Program Files\MongoDB\Server\5.0\bin\mongod.exe" --dbpath="c:\data\db"

The --dbpath option points to your database directory.

If the MongoDB database server is running correctly, the Command Interpreter displays:

[initandlisten] waiting for connections
