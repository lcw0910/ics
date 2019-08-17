# ICS (Integrated Control System)
## Overview
솔루션 운영에 필요한 모든 데이터와 영역별 기능을 통합관리 한다.
데이터와 이벤트에 대한 구독/발행 모델을 지원한다.
 

## Environment
- PHP 7.2.1
- MariaDB

## Command
- DB Migrate
    ```bash
    artisan migrate:fresh --seeder=UsersTableSeeder
    ```
    
- DB Migrate (With Seeder)
    ```bash
    artisan migrate:fresh --seeder=UsersTableSeeder
    ```

- DB Seeding
    ```bash
    artisan db:seed --class=UsersTableSeeder
    ``` 

## Release Note

### v0.3 (2019.08.18)
- Create Shop Migration, Factory, Model, Seeder
    ```bash
    artisan make:migration create_shops_table --create shops
    ```

### v0.2 (2019.08.17)
- Create User Factory
- Add Web Route
    - '/info' > phpinfo()
- Add Column User table
    - is_admin
    - role

### v0.1 (2019.08.11)
- Set Environment Variables
- Web / API Route Setting
- Create User Model, Migration, Seeder