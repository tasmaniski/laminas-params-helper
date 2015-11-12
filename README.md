#Module ParamsHelper

Module name is 'ParamsHelper' so we should add it in *config/application.config.php* file.

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

Or you can get one variable by name. Second param in method is default value if helper can not find the requested value.

```php

//will read var with name 'id' and if id is null it will return 1 as default
$this->params()->fromRoute('id', 1);

```