# php Artisan 指令

啟動伺服器
```bash
php artsian serve
```
建立Controller
```bash
php artisan make:controller TestController

php artisan make:controller TestController --resource
```

Migrate
```bash
# 執行Migrate
php artisan migrate

## 回復Migrate
php artisan migrate:rollback

## 重置Migrate
php artisan migrate:reset

## 查看Migrate狀態
php artisan migrate:status
```

建立Migration
```bash
php artisan make:migration create_posts_table
```