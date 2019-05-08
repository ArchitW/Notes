# Flexbox

all children align in row
main-axis : horizontal
cross-axis : vertical

use : https://flexboxfroggy.com/

`display:flex`

***justify-content (left) >***

`flex-start` (<) , `flex-end` (>), `center`, `space-between - No space between left and right`, `space-around`


***align-items (down) v***

`flex-start`, `flex-end`,`center`, `baseline,stretch`

***flex-direction***

`row`, `row-reverse`
`column`, `column-reverse`


***order***

default: 0

range  -ve to +ve int

***align-self***

Used for individual items in container

`align-items` => all items in container

`align-self` => individual item

***Flex-Wrap***
to deal with overflow
`flex-wrap : wrap`
default `no-wrap`
`no-wrap` | `wrap` | `wrap-reverse`


`flex-direction + flex-wrap  => flex-flow`

***align-content***
only make a difference if you have more then 2 rows
`flex-start, flex-end, center,space-around, space-between`

***Ordering***
```
.container div:nth-child(2){
	order:6;
}
```
