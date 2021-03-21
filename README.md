## Laravelのインストール

同一の階層に
 「template-3rd-study」
 「template-3rd-study-env」
をcloneする（必要に応じてfork）

template-3rd-study-envに移動し、
```docker-compose up -d```
APコンテナにログイン
```
composer create-project --prefer-dist laravel/laravel blog "6.*"
mv ./blog/* ./
mv ./blog/.* ./
rm -fr ./blog
```
