## Laravel Basic API
### Routes
- GET /api/users
- GET /api/user/{id}
- POST /api/user

#### How to do

- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db::seed`
- `php artisan serve`

set token em app/Http/Controllers/ApiController.php
``

    
    static function  getToken()
        {
        return "TOKENTESTE";
    }



***
Use Postman <https://www.postman.com/> for test

* set Bearer Token ex. TOKENTESTE
* import json in postman

***

````
{
	"info": {
		"_postman_id": "cbf51144-25c6-4b38-b7bd-4709452c2473",
		"name": "Test",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "14534651",
		"_collection_link": "https://universal-flare-689252.postman.co/workspace/My-Workspace~2d3ae7d6-70bc-4365-8251-a29e5f86b7cd/collection/14534651-cbf51144-25c6-4b38-b7bd-4709452c2473?action=share&source=collection_link&creator=14534651"
	},
	"item": [
		{
			"name": "127.0.0.1:8000/api/user",
			"request": {
				"auth": {
					"type": "bearer",
					"bearer": [
						{
							"key": "token",
							"value": "TOKENTESTE",
							"type": "string"
						}
					]
				},
				"method": "POST",
				"header": [],
				"body": {
					"mode": "formdata",
					"formdata": [
						{
							"key": "name",
							"value": "teste",
							"type": "text"
						},
						{
							"key": "email",
							"value": "test@example2.com",
							"type": "text"
						},
						{
							"key": "password",
							"value": "123456",
							"type": "text"
						}
					]
				},
				"url": {
					"raw": "127.0.0.1:8000/api/user",
					"host": [
						"127",
						"0",
						"0",
						"1"
					],
					"port": "8000",
					"path": [
						"api",
						"user"
					]
				}
			},
			"response": []
		},
		{
			"name": "http://127.0.0.1:8000/api/users",
			"request": {
				"auth": {
					"type": "bearer",
					"bearer": [
						{
							"key": "token",
							"value": "TOKENTESTE",
							"type": "string"
						}
					]
				},
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://127.0.0.1:8000/api/users",
					"protocol": "http",
					"host": [
						"127",
						"0",
						"0",
						"1"
					],
					"port": "8000",
					"path": [
						"api",
						"users"
					],
					"query": [
						{
							"key": "search",
							"value": "teste",
							"disabled": true
						}
					]
				}
			},
			"response": []
		},
		{
			"name": "127.0.0.1:8000/api/user/1",
			"request": {
				"auth": {
					"type": "bearer",
					"bearer": [
						{
							"key": "token",
							"value": "TOKENTESTE",
							"type": "string"
						}
					]
				},
				"method": "GET",
				"header": [],
				"url": {
					"raw": "127.0.0.1:8000/api/user/1",
					"host": [
						"127",
						"0",
						"0",
						"1"
					],
					"port": "8000",
					"path": [
						"api",
						"user",
						"1"
					]
				}
			},
			"response": []
		}
	],
	"variable": [
		{
			"key": "$apikey",
			"value": "chavebling"
		}
	]
}
