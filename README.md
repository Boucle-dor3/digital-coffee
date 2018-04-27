# Laravel project

## Launch the project

  - Configure the database connection in ```.env``` file
  - Create tables in the database

  ```shell
   php artisan migrate
  ```

  - Launch the server

  ```shell
   php artisan serve
  ```

## API documentation

    GET /api/category : return the list of categories

    ```json
    {"data":[{"id":1,"name":"categorie 1","created_at":null,"updated_at":null}]}
    ```
    GET /api/user : return the list of users

    ```json
    {"data":[...]}
    ```
