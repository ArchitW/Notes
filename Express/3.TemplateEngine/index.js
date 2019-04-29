/*
Templating : pug
npm install --save pug
 */

var express= require('express');
var app = express();

app.set('view engine', 'pug');
app.set('views', './views');

app.get('/',(req,res) =>{
    res.render('firstView');
});


//passing variables
app.get('/pass',(req,res)=>{
   res.render('showPage', {
       name:"name passed!",
       url:"http://www.facebook.com"
   });
});

//Combining modules of html
app.get('/showPage',(req,res)=>{
   res.render('main');
});




app.listen(3000)
