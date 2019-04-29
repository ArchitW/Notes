//MiddleWare

var express = require('express');
var App = express();

App.use('/test',function(req,res,next){

    console.log("req received at " + Date.now());
    next();
});

App.get('/test',function(req,res){
    res.send('test page');
});
App.listen(3000);