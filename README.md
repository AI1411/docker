### laravel-docker

バージョン情報
- laravel  7.x

- php      7.4

- mysql    5.7

```bash
$ docker-compose up -d --build
```

```bash
$ docker-compose exec app ash
```

```bash
$ composer install

$ cp .env.example .env

$ php artisan key:generate

$ php artisan migrate 

#mysqlに接続
$ docker-compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'
```

## ライブラリ
- [laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)

- [laravel-cors](https://github.com/fruitcake/laravel-cors)

- [Laravel Cashier](https://readouble.com/laravel/7.x/ja/billing.html)

- 

DB PORT 13306

[アクセス](http://127.0.0.1:10080)

[参考URL](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4)

