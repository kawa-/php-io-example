# PHP IO Example

PHPを用いたファイルの読み込み・書き込みプログラムがどのぐらいの性能なのかを確かめるためのレポジトリ。主にmod_phpやphp-fpmを用いて叩く用途。

Linuxではファイルへの書き込みは特に指定しない場合、基本的には非同期で行われる。いろいろなOSやコンフィグでそういうキャッシュがらみを確かめたく。

## 使い方

~~~
# 下準備
$ sh run-me-at-first.sh

# 動作確認 (エラーがでなければOK)
$ php hello.php
$ php write.php
$ php read.php

# サーバーにデプロイ
# 各自やって下さい、mod_phpなりphp-fpmなりhhvmなり

# ベンチマークを取ってみる
# 各自やってください。apachebench, wrkなどなど
~~~

