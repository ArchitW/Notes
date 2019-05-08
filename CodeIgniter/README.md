# CI

***Conteoller***

```
class __ extends CI_Controller {

public function index(){} 
public function store(){} 
public function create(){} 
public function edit($id){} 
public function update($id){} 
public function delete($id){} 
    
}
```
***Model***
```
class __ extends CI_Model{

public function get(){} 
public function insert(){} 
public function update($id){} 
public function delete($id){} 
    
}
```
***Routes***

```
$route['products'] = "products/index";
$route['productsCreate']['post'] = "products/store";
$route['productsEdit/(:any)'] = "products/edit/$1";
$route['productsUpdate/(:any)']['put'] = "products/update/$1";
$route['productsDelete/(:any)']['delete'] = "products/delete/$1";
```

| Plugin | README |
| ------ | ------ |
| Dropbox | [plugins/dropbox/README.md][PlDb] |


