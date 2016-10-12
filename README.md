#Zend Framework Params Helper

View Helper will read params from $_GET, $_POST and Routes in ZF

New version is here! Current version support Zend Framework 3


##Install

Add in you **composer.json** file:

```json
{
    "require": {
        "tasmaniski/zend-params-helper": "^2.0"
    }
}
```
After running: *sudo composer update* 

You need to register new module. Add in file **config/application.config.php**: 

```
'modules' => array(
    '...',
    'ParamsHelper'
),
```

Note: if you want to use it in ZF2 app, add in composer.json version ^1.0

##Use

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
