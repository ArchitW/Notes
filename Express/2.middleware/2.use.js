var express = require('express');
var app = express();
// Order of middle ware

app.use(function (req,res,next) {
    console.log("Start");
    next();
});

app.get('/',function (req,res,next) {
    res.send("middle");
    next();
});

app.use('/',function (req,res) {
    console.log("end");
});

app.listen(3000);