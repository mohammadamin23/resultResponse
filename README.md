# result Response

**template for restapi response.**

install laravel >= 5 and lumen >=5.

```
composer require amin.aliee/resualt-response
```

add to provider in confing/app.php

```
// in laravel
Prs\ResultResponse\Provider\ResultResponseServiceProvider::class
//&
Result => Prs\ResultResponse\Service\Result::class

//in lumen
 $app->register(\Prs\ResultResponse\Provider\ResultResponseServiceProvider::class);

```

# usage

```
Result::response(true , ['can be anything'] , 'server message' , 200)

//or

result(true , ['can be anything'] , 'server message' , 200)

```