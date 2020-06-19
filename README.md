### Local PC environment

- Git clone the master repository 
```git clone https://github.com/ayahmed/backend-test.git```
- ``` composer install ```
- Define a file copy the contents of ```.env.example``` and make a new file ```.env``` where change the following fields
```
DB_CONNECTION=mysql
DB_HOST=[localhost address] 
DB_PORT=3306
DB_DATABASE=property_analytics
DB_USERNAME=root
DB_PASSWORD=[configured password]
```

- ``` php artisan migrate ```
- ``` php artisan db:seed ```
- ``` php artisan serve --host=localhost --port=8080 ```


- Access following api
- `Properties`
- ``` GET http://localhost:8080/api/properties ```
- ``` GET http://localhost:8080/api/properties/{id} ```
- ``` POST http://localhost:8080/api/properties ``` 
- ```
             {
                 "suburb" : "[String]",
                 "state" : "[String]",
                 "country" : "[String]"
             }```

- ``` PATCH http://localhost:8080/api/properties/{id} ```
- ```
             {
                 "suburb" : "[String]",
                 "state" : "[String]",
                 "country" : "[String]"
             }```

- ``` DELETE http://localhost:8080/api/properties/{id} ```
- `analytic types`
- ``` GET http://localhost:8080/api/analytic-types ```
- ``` GET http://localhost:8080/api/analytic-types/{id} ```
- ``` POST http://localhost:8080/api/analytic-types ``` 
- ```
             {
                "name": "[TYPE NAME]",
                 "units": "[UNIT]",
                 "is_numeric": [0,1],
                 "num_decimal_places": [NUMBER]
             }```

- ``` PATCH http://localhost:8080/api/analytic-types/{id} ```
- ```
             {
                "name": "[TYPE NAME]",
                 "units": "[UNIT]",
                 "is_numeric": [0,1],
                 "num_decimal_places": [NUMBER]
              }```

- ``` DELETE http://localhost:8080/api/analytic-types/{id} ```

- `property analytic`
- ``` GET http://localhost:8080/api/property-analytic ```
- ``` GET http://localhost:8080/api/property-analytic/{id} ```
- ``` POST http://localhost:8080/api/property-analytic ``` 
- ```
             {
               "property_id": [PROPERTY_ID],
               "analytic_type_id": [ANALYTIC_TYPE_ID],
               "value": "11"
               }```

- ``` PATCH http://localhost:8080/api/property-analytic/{id} ```
- ```
             {
              "property_id": [PROPERTY_ID],
              "analytic_type_id": [ANALYTIC_TYPE_ID],
              "value": "11"
              }```

- ``` DELETE http://localhost:8080/api/property-analytic/{id} ```
