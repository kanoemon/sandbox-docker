```
# アプリケーションの起動
$ docker-compose up
-> http://localhost:8080/

$ docker-compose down
```

## imageのビルド
```
$ docker image build -t php7.2-web-sandbox .
```

## DBへデータの作成
```
# コンテナに入る
$ docker exec -it mysql5.7-web-sandbox bash
# mysql -uroot -ppassword
```
