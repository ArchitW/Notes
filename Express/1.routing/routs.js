var express = require('express');
var routs = express.Router();


routs.get('/:id1', function(req,res){
    res.send('Id is :' + req.params.id1, 200)
});


routs.get('/things/:name/:id',(req,res) => {

    res.send('id:'+req.params.id+ 'and name is:'+ req.params.name);
});

//match the requests that have a 5-digit long id

routs.get('/verify/:id([0-9]{5})',(req,res)=>{
    res.send('5 digit id is ' + req.params.id);
});



routs.post('/',(req,res)=>{
    res.send('this is test /POST',200);
});


module.exports = routs;