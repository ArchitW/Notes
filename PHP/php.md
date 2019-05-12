###PHP OO###



public: accessed everywhere
private: to class only
protected: class + sub class


***static modifier***

you dont need instance of class
```
class x {
    static $myVar = 123;

    static function method(){
        x::$myVar = 456;
    }
}
x::$myVar;
x::method();
```
***getters setters***

for private vars

```
class Cars {
//define property


}
```