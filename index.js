const express = new require('express');
const app = express();
const http = require('http').Server(app);
const fetch = require('node-fetch')
const router = express.Router();
const bodyParser = require('body-parser');
const urlencodedParser = bodyParser.urlencoded({extended: false});
app.use(bodyParser.json())
//const nbc4001k = require("nbc4001k")
//const nfs4002k = require("nfs4002k")
//const nc4003k = require("nc4003k")
const parseRTF = require('rtf-parser')
const fs = require('fs')

const path1 = "node_modules/nbc4001k"
const path2 = "node_modules/nfc4002k"
const path3 = "node_modules/nc4003k"

text = "первый хотеть надо должный должный должный сделать сделать понимать нужный хорошо читать читать читать оставаться следовать труд личный"
var out = text.split(" ")
var map = "{"
for (i = 0; i < out.length; i+=1){
	map += '"'+ out[i] + '"' + ":" + '"' + i + '"'
	if (i != out.length-1)
	map += ","
}
map += "}"
console.log(JSON.parse(map))

fs.writeFile('solution.json', map, function (err) {
  if (err) return console.log(err);
  console.log('Hello World > helloworld.txt');
});



app.use('/', router);
app.use(express.static(__dirname + '/'));
router.get('/',function(req,res){
  console.log(req);
});


app.post('*',function(req,res){
});
http.listen(3000, 'wellink.tmweb.ru', ()=>{
 console.log("listen");
});
app.post('/post', urlencodedParser, function(req, res){
  res.setHeader('Access-Control-Allow-Origin', '*');
 res.setHeader('Access-Control-Allow-Headers', 'origin, content-type, accept');
 console.log(req.body);
   console.log("вв");
 res.send(JSON.stringify({
  data: "message"
 }));
});

