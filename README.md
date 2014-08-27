# SpongeCake

spongecake は、dietcake のプロジェクトテンプレートです。 spongecake を利用する事で、dietcakeを簡単に使いはじめる事ができるようになります。

## インストール手順

### composerを使用してインストール

composerが使えるなら、以下のコマンドで簡単にインストールすることが可能です。

```
composer create-project dietcake/spongecake path/ "1.0.*"
```
これで、path/ 以下にdietcakeが使える状態で展開されます。

### zipファイルをダウンロードしてインストール

https://github.com/tsukimiya/spongecake/releases/latest から最新のzipファイルをダウンロードし、展開します。

```
wget https://github.com/tsukimiya/spongecake/archive/v1.0.0.zip
unzip v1.0.0.zip
```

### core.php のコピー

データベースの接続設定などを書き込む core.php ファイルを作成します。雛形をコピーします。

```
cd spongecake
cp app/config/core.development.php app/config/core.php
```

### ビルトインサーバの起動

PHP 5.4以降であればビルトインWebサーバが以下のコマンドで使えるので、以下のコマンドを実行後、ブラウザで http://localhost:8080/default/index にアクセスできれば環境構築完了です。

```
cd app/webroot

php -S localhost:8080 index.php

```

もちろん apache で app/webroot を docroot に指定しても利用する事ができます

