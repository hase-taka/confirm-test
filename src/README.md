# 確認テスト

## 環境構築

Dockerビルド
1. git clone 
2. docker-compose up -d --build

Laravel環境構築

1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envファイルを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan DB:seed

## 使用技術
- PHP 7.49
- Laravel 8.83.8
- Mysql 8.0.26

## ER図


## URL
- 開発環境:<http://localhost/>
- phpMyAdmin:<http://localhost:8080/>
