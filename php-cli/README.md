```
# イメージの構築。タグはmy-php-app
$ docker build -t my-php-app .

# コンテナの実行。コンテナの名前はmy-running-appでmy-php-appのイメージを使う。
# コンテナ終了時、自動的に削除
$ docker run -it --rm --name my-running-app my-php-app
```