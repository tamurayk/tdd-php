# テスト駆動開発 をPHPで写経

https://www.amazon.co.jp/dp/4274217884/

## 環境構築

```
$ git clone git@github.com:tamurayk/tdd-php.git
$ cd tdd-php
$ docker-compose up -d
$ docker exec -it tdd-php bash
# composer install --dev
```

## テスト実行

```
/// Chapter 1-5
$ docker exec -it tdd-php bash
# vendor/bin/phpunit tests/TestCase/Part1/Chapter5
```

```
/// Chapter 6 
$ docker exec -it tdd-php bash
# vendor/bin/phpunit src/Part1/Chapter6
```

## メモ

- 各章の差分
  - `$ diff -y app/src/Part1/Chapter14 app/src/Part1/Chapter15 | less -R`
  - (なるべく) [コミットログ](https://github.com/tamurayk/tdd-php/commit/7334271177087a080e752859fac0297373dc75a6) でも見れるように作業した
