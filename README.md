# Sailing
Setting up the a docker + building a simple project with Laravel sail

## Installing Docker
Well, installing docker is the easiest part of the project.<br />
Visit the link below and download the **docker.dmg** file.<br />
- [Docker website](https://www.docker.com/products/docker-desktop)

> If your using Macbook with Apple chip, make sure to download the file that matches your system requirements.

Once you downloaded the file, click on it to begin the installation.<br />
Since docker needs to edit some of the root files of your computer, make sure to give the access when running the docker.dmg file.<br />

After the installation is completed you can enter the following command in the terminal:
```shell
docker -v
```

And you should get a result like this:
```shell
Docker version 20.10.17, build 100c701
```

And you can work with the docker desktop with the installed application, besides of working with docker in terminal.

## Using sail
Now we are going to create a project with **laravel sail**.

After that use the sail command to run the project on a docker container:
```
cd teamSoftBrTest

./vendor/bin/sail up

./vendor/bin/sail artisan migrate

```

And now you have a simple laravel application on docker.


# Testing API


The api can now be accessed at


    POST:   http://localhost/api/client CREATE Client
    GET:    http://localhost/api/clients LIST Clients
    GET:    http://localhost/api/client/1 ID Client
    PUT:    http://localhost/api/client/1 UPDATE Client
    DELETE: http://localhost/api/client/1 DELETE Client

	"CNPJ":"12345678910",
	"corporate_name":"Empresa",
	"contact_name":"Pessoa",
	"telephone":"19000009999",
	"public_place":"Rua teste",
	"number":"10",
	"complement":"teste",
	"district":"Bairro",
	"city":"Cidade",
	"state":"Estado",
	"zip_code":"13064000"




Request headers

| **Required** 	| **Key**              	| **Value**            	|
|----------	|------------------	|------------------	|
| Yes      	| Content-Type     	| application/json 	|
| Yes      	| X-Requested-With 	| XMLHttpRequest   	|
| Optional 	| Authorization    	| Token {JWT}      	|

Refer the [api specification](#api-specification) for more info.
