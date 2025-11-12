## Mogitate

## 環境構築
**Dockerビルド**
- git clone [gitのURL]
- docker-compose up -d --build

**Laravel環境構築**
- docker-compose exec php bash
- composer install
- cp .env.example.env
- .envファイルに以下の環境変数を追加

- DB_CONNECTION=mysql
- DB_HOST=mysql
- DB_PORT=3306
- DB_DATABASE=laravel_db
- DB_USERNAME=laravel_user
- DB_PASSWORD=laravel_pass

- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## 使用技術
- PHP 8.4.8
- Laravel 8.75
- MySQL 8.0
- nginx 1.21.1

## ER図
![alt](./erd.png)

## URL
- 開発環境：http://localhost/
- phpMyAdmin:：http://localhost:8080/
