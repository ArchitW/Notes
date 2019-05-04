
# React

  

## ES-6

***Let & Const***

**let** : Creates Variable

**Const** : variables that do not change

  
***Arrow Functions***
**type 1**
` function testFunc(var) {}`

**type 2**
`var testFunc = function() {}`

**type 3**
`const testFunc = () => {}` // solves a lot of issues with `this` keyword, it will always keep its context
 

*arrow function with no argument*
`const testFunc = () => {}`

  

*arrow function with 1 argument*
`const testFunc = variable =>{}`

  

*arrow function with 1+ argument*
`const testFunc = (variable1, variable2) =>{}`

  

*arrow function with only 1 line of code in it*
`const multiply = (number) =>  number * 2`  \\ can , remove `return` keyword omit curly brace


## day 1


## **Setting up local react project**
 

***Install React Globally***
`npm install -g create-react-app`

  

***Create New Project***
`create-react-app myApp`

  

**Folder Structure**

**[f] node_modules**
**[f]public** (root folder)
- `index.html` (never add more html in this page)
- `<div id="root"></div>` entry point of app

**[f]src** (react application)
	`index.html`
    `package.json`
