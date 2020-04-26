### laravel-docker

バージョン情報
- laravel  7.x

- php      7.4

- mysql    5.7

## 構築手順

ターミナル,windowsの場合gitbashを導入

```bash
#任意のディレクトリで
$ git clone https://github.com/AI1411/docker.git

$ cd docker

$ docker-compose up -d --build

#ワークスペースに入る
$ docker-compose exec app ash

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

