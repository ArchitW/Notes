
# React

  

## ES-6

***Let & Const***

**let** : Creates Variable

**Const** : variables that do not change

  
***Arrow Functions***

**type 1**

```
 function testFunc(var) {
}
```

**type 2**

`var testFunc = function() {}`

**type 3**

`const testFunc = () => {}` 
- solves a lot of issues with `this` keyword, it will always keep its context
 

*arrow function with no argument*

`const testFunc = () => {}`

  

*arrow function with 1 argument*

`const testFunc = variable =>{}`

  

*arrow function with 1+ argument*

`const testFunc = (variable1, variable2) =>{}`

  

*arrow function with only 1 line of code in it*

`const multiply = (number) =>  number * 2` 
- can , remove `return` keyword omit curly brace



***Import & Export (Modules)***


- inside of js file we can import content from another file, so that js know dependencies 

*example*


```
 person.js

const person = {
   name:'archit'
}

export default person

main.js
import {person} from 'person'
//person is named export

```

***Classes***

```
class Capital {
    properties
    methods()
}
```
usage 

`constant class = new Class()`

*example*

```

class Person {
    constructor() { // default funtion }

// properties
this.name = 'archit'
    printName(){
        cosnole.log(this.name);
    }
}

//initalize obj
const person = new Person();
person.printName()
```

***Class Inheritance***

```class Human {
    constructor(){
        this.gender = 'male'
    }
    printGender(){
        console.log(this.gender);
    }
}

class Person extends Human {
    constructor(){
        super(); // Note : if you are inheriting from base class
        this.gender = 'male'
    }

    printName(){
        console.log(this.name);
    }
}

const person = new Person();
person.printName()
person.printGender()
```

***Cls, prop, ,methods Modern Syntax***


|  | Old ways| Next Gen | 
|--|--|--|
*Constructor*|`constructor(){ this.myProperty='value }`  | `myProperty = value`  ||
*Property*|`myMethod(){.....}`|`myMethod = () => {......}`|



***Spread & Rest Operator (...)***
*spread*
```
const oldArray = [1,2,3,4,5];
const newArray = [...oldArray,6,7,8] // add oldArray to new
=> 1,2,3,4,5,6,7,8

// Object
const newObj = {
    ...oldObj,
    newProp:5
    }
    
// if oldObj have prop `newProp` it will be overwritten
```

*Rest*

used to merge list of arguments

```
function sortArgs(...args){
    // all arguments will be merged into array
    // ex sortArgs(1,2,3,4) => will become [1,2,3,4] inside function
    return args.sort()
}


const filter = (...args) {
    return args.filter(el => el === 1);
}
console.log(filter([1,2,3,4]))
```

***Destructuring***
```
[a,b] = ['Hello','hi']
console.log(a) => Hello
console.log(b) => Hi

{name, age} = {name:'archit', age:30, sex:'male'}
console.log(name) => archit
console.log(age) => 30
console.log(sex) => undefined
```
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
    
 ***REACT***   
    try to have 1 root element while returning, nest everything in it.
```
render {
  return (
<div className="root-element">
  <h1>Test</h1>
</div>
<h2> this will not going to show</h2>
);
}
```

***creating functional component***
a componesnt is just a function return JSX/ HTML
```
Person/Person.js

import React from 'react'
const person = () => {
return <p>this is func component</p>
};

export default person;

App.js

import Person from './Person/Person'
//reason to name functional component CAPS is because lowercase is reserved for HTML

return (
  <Person></Person> or <Person />
  );
```
***outputting dynamic content***
use interpolation {}
```
return ( <p> Hello, {1+8})
```
***pass configuration from component to another***
```
App.js
<Person name="Archit" age=30 />
<Person name="user1" age=30>Hobbies are : test</Person>
<Person name="Archit-2" age=30 />

//props properties

Person.js
const person = (props) => {

  name = props.name;
  age = props.age;
}
```
***Get content from in between tags***
```
<Person name="user1" age=30>Hobbies are : test</Person>

const person = (props) => {

  children = props.children;

}

```

***State***
```
class .... {

state = {
    person : [
        name:'aaa', age:20
    ]
}

render() {
    return (
        <Person name={state.person[0].name}>
    )
}

}
```

***Event Handling***
functionNameHandler => this is method u r assigning as event handler


```
myFunctionHandler = () =>{
    console.log('was clicked');
}
```
```
render() {
return(
<button onClick={this.myFunctionHandler}></button>
// do not add() after function, it will call function during react load
)}
```

***State in React Handler***

```
myFunctionHandler = () =>{
WRONG -> this.state.persons[0].name="Test"

this.setState({
    persons:{ name : 'New Name', age:90 }
    })

}
```

return(
    <input type="text" onChange
)

- Stateful /smart :manages state, Stateless /dumb / presentational: don't have state