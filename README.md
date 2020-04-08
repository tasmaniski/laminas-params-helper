```json
IMPORTANT NOTE: 
If you find this package useful, 
please click on a star button and let me know, 
so I will gladly continue with the updates.
```

# Laminas MVC Params Helper

View Helper will read params from $_GET, $_POST and Routes in Laminas MVC project.

## Install

Add in you **composer.json** file:

```json
{
    "require": {
        "tasmaniski/laminas-params-helper": "^3.0"
    }
}
```
After running: *composer update* 

You need to register new module. Add in file **config/application.config.php**: 

```
'modules' => array(
    '...',
    'ParamsHelper'
),
```

## Use

We can use it in any view file (including layout) as key name **params()**.
View Helper **params()** served to read variables from $_POST, $_GET or from Routes.


```php
//will read all variables from $_POST
$this->params()->fromPost();

//will read all variables from Routes
$this->params()->fromRoute();

//will read all variables from $_GET
$this->params()->fromQuery();
```

Or you can get one variable by name. Second param is optional and it's default value if helper can not find the key.

```php
//will read var with name 'id' and if id is null it will return 1 as default
$this->params()->fromRoute('id', 1);

```
