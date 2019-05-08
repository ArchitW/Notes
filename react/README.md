
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
`functionNameHandler` => this is method u r assigning as event handler


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

<button onClick></button>

- Stateful /smart :manages state, Stateless /dumb / presentational: don't have state

***Passing method refrence***

you can pass methods as props.
```
<Person
name={this.state.persons[0].name}
age={this.state.person[0].age}
//pass a function to Person
click={this.myFunctionHandler}
></Person>

Person.js
{props.click}

```

***passing arguments***
```
functionHadler = (name) =>{
...
...
}

click={this.myFunctionHandler.bind(this, 'Max!')}

or

 `Onclick= () => this.functionHandler('Name');`
```

 ***Two way binding***
 ```
person.js
<input type = "text" 
    onChange = />


App.js
nameChangedHandler = (event) => {

this.setState ({
    persons:[
        {name: event.target.value,
        age:30
        }
    ]
})
}

return(

    <Person name={this.state.person[0].name}
    age={this.state.person[0].age}
    //bind here so changes can be reflected
    nameUpdate = {this.nameChnageHandler}
    >
    </Person>
)

Person.js
<input type="text" onChange = {props.nameUpdate}
value={props.name} //previous name
>
 ```

 ***Adding Styling***
```
Person.js, Person.css

.css
.Person {
width:50%;
margin:auto;
text-align:center;
}

.js
import './Person.css'
<div className="Person"></div>

OR directly in js file
const style = {
    backgroundColor:'red',
    font:'inherit,
    border:'1px solid blue'
}
<button 
style = {style}
>
</button>

```

***Conditional***
```
state = {
    showPerson : false
}

togglePersonHandler = () =>{
const currentState = this.state.showPerson;
this.setState({
    showPerson = !currentState
})

}

render(
<button onClick
    this.togglePersonHandler}>
}>

{ this.state.show ? 
    <div >

    </div> : null
}
if(condition) ? true then show : false
if show == true show dive else null
)

OR
use normal javascript 

let person = null;
if(this.state.showPerson){
    person = (
        <div></div>
    )
}

render() {
    return (
        { perosn }
    )
}

```

***List***

state = {
    persons : [
        {name:"a", age:"1"},
        {name:"b", age:"2"},
        {name:"c", age:"3"},
     ]
}

//  how to access

{
    this.state.persons.map(person => {
        return <Person 
        name = {person.name}
        age = {person.age} 
        />
    })
}       

deletePersonHandler =(personIndex) => {
    const person=this.state.persons;
    persons.splice(personIndex,1);
    this.setState({persons:persons})
}
    {
    this.state.persons.map((person,index) => {
        return <Person 
        name = {person.name}
        age = {person.age} 
        click = {() => this.deletePersonHandler(index)
        ler
        />
    })
}       

}
```


***CSS***
```
const style= {
  backgroundColor:red;
  fontColor:white;
}

//chnage dynamically
style.backgroundColor = 'blue'

// passing list of class Names
classes.push('red') <- push a new class
```
***Radium: Css wrapper***
npm install --save radium
```
import Radium from 'radium';

const style = {
':hover' : {....}
};

onchange = () => {
  style[':hover'] {
    ...
    ...
  }
}
 export default Radium(App)
```

*** Media Queries ***
```
Person.js
import Radim, {StyleRoot} from 'radium';

const person = () => {

  const style = {
    '@media(min-width: 500px)':{
      width:450px;
    }
  }
};
return(
<StyleRoot>
  <div className="person" style={style}></div>
</StyleRoot>
);
export default Radium(person)

```

*** CSS Modules (Scoped CSS) ***

unlock css modules
`npm run eject`
`webpack.config.dev and webpack.config.prod`
css-loader
```
  options:{
  modules:true,
  localIdentName:'[name]__[local]__[hash:base64:5]'
},
```
```
App.js

import vlasses from './App.css';
<div className={classes.App}></div>

```
***Error Handling ***
```

Show custom error message to users
import React , {Component} from 'react';

class ErroRBoundry extends Component {
  state = {
    hasError: false,
    errorMsg: ''
  }
componentDidCatach = (error, info) => {
  this.setState({
    hasError: true,
    errorMsg: msg
  });
}

render() {
  if(this.state.hasError){
    return <h1>Something Went Wrong</h1>;
  }
}
else
{
return this.props.childern;
}
}

export default errorMsg;


App.js
import errorMsg from './errorMsg'

return (
<errorMsg>
  <Person />
</errorMsg>
);
```

*** COMPONENTS ***

- class component
- functional component

| Class Component| Functional Component |
|class XY extends Component | const Xy = props => {} |
|Access to state, lifecycles hooks | Access to State|
|access strate vias `this`| access via `props`|
| used need to manage state| use in all cases |
stateful  state = {}
