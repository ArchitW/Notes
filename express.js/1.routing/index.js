var express = require('express');

var App = express();

var routs = require('./routs.js');
App.use('/', routs);


// Other Routs for 404
// Shuld be placed at the end
routs.get('*',(req,res) => {
    res.send('<h1>404, Not a Valid Request</h1>',404);
});
App.listen(3000);