```
$ docker build -t my-php-app .

# コンテナをバックグラウンドで実行し、コンテナ ID を表示
$ docker run --publish 8000:80 --detach --name my-running-app my-php-app
-> http://localhost:8000/

# -vでコードをコンテナにマウントできる。コード即時反映ができる。
$ docker run -v /xxxx/src/:/var/www/html --publish 8000:80 --detach --name my-running-app my-php-app
```
