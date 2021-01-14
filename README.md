[![Gitpod ready-to-code](https://img.shields.io/badge/Gitpod-ready--to--code-blue?logo=gitpod)](https://gitpod.io/#https://github.com/heitor92/xastre-market)

# Projeto Xastre Market
## Descrição do Projeto

<img src=https://simpleicons.org/icons/php.svg width="80"><img src=https://simpleicons.org/icons/laravel.svg width="80"><img src=https://simpleicons.org/icons/html5.svg width="80"><img src=https://simpleicons.org/icons/css3.svg width="80"><img src=https://simpleicons.org/icons/docker.svg width="80"><img src=https://simpleicons.org/icons/gnubash.svg width="80"><img src=https://simpleicons.org/icons/javascript.svg width="80">
<img src=https://simpleicons.org/icons/jquery.svg width="80"><img src=https://simpleicons.org/icons/yarn.svg width="80"><img src=https://simpleicons.org/icons/npm.svg width="80"><img src=https://simpleicons.org/icons/composer.svg width="80"><img src=https://simpleicons.org/icons/linux.svg width="80"><img src=https://simpleicons.org/icons/debian.svg width="80">

<p align="center" >Um simples CRUD de produtos em laravel.</p>

<a href="https://github.com/heitor92/xastre-market/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/heitor92/xastre-market"></a>
<a href="https://github.com/heitor92/xastre-market/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/heitor92/xastre-market"></a>
<a href="https://github.com/heitor92/xastre-market/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/heitor92/xastre-market"></a>

[Tabela de conteudo](#tabela-de-conteudo)
=================
<!--ts-->
   * [Sobre](#Sobre)
   * [Tabela de conteudo](#tabela-de-conteudo)
   * [Tabela informativa](#tabela-informativa)
   * [Instalacao](#instalacao)
        * [instalacao do projeto](#instalacao-do-projeto)
   * [Como usar](#como-usar)
      * [Pre Requisitos](#pre-requisitos)
      * [Local files](#local-files)
<!--te-->

[Tabela informativa](#tabela-informativa)
======================
containers
--------
| Nome | Imagem Base | Localização Dockerfile | Imagem Construída |
| ------------- |:-------------:|---------------------| --------------------------------------|
| xastre-market-app| php:8.0.0-apache (oficial)| xastre-market/containers/app/Dockerfile.dev | [heitor92/xastre-market-app](https://hub.docker.com/r/heitor92/xastre-market-app) |
| xastre-market-db | mysql:8 (oficial)|xastre-market/containers/db/Dockerfile.dev | [heitor92/xastre-market-db](https://hub.docker.com/r/heitor92/xastre-market-db) |

scripts
--------
| Arquivo  | Localização |
| ------------- |:-------------:|
| composer.sh |  xastre-market/composer.sh |
| php.sh | xastre-market/php.sh |
| npm.sh | xastre-market/npm.sh |
| yarn.sh | xastre-market/yarn.sh|
| cmd.sh | xastre-market/cmd.sh|

[Instalacao](#instalacao)
=======
[instalacao do projeto](#instalacao-do-projeto)
-------
Clone o Repositório:
```
$ git clone https://github.com/heitor92/xastre-market.git
``` 
Entre no diretorio do projeto:
```
$ cd xastre-market
```
Execute a sesuir para construir e subir os containers de app e banco:
```
docker-compose up --build
```
Instale as dependências PHP:
```
./composer.sh install
```
Em seguida do JavaScript e CSS:
```
./yarn.sh install
```
copie o arquivo .env.example:
```
./cmd.sh cp .env.example .env
```
Gere uma key no app:
```
./php.sh artisan key:generate
```
Em seguida faça a migração do banco de dados:

```
./php.sh artisan migrate:install
```
```
./php.sh artisan migrate
```
Para Executar as Seeders:
```
./php.sh artisan db:seed
```
Pronto! agora acesse [http://localhost](http://localhost)

[Como usar](#como-usar)
=========
Acesse [http://localhost](http://localhost) depois de feito os passos de instalação.

Para executar comando no container:
```
./cmd.sh bash
```

[Pre Requisitos](#pre-requisitos)
------------
 * docker
 * docker-compose

 [Local files](#local-files)
 -------------
```
.
├── composer.sh
├── containers
│   ├── app
│   └── db
├── docker-compose.yml
├── LICENSE
├── npm.sh
├── php.sh
├── README.md
├── xastre-market-app
│   ├── app
│   ├── artisan
│   ├── bootstrap
│   ├── composer.json
│   ├── composer.lock
│   ├── config
│   ├── database
│   ├── docker-compose.yml
│   ├── node_modules
│   ├── package.json
│   ├── phpunit.xml
│   ├── public
│   ├── README.md
│   ├── resources
│   ├── routes
│   ├── server.php
│   ├── storage
│   ├── tests
│   ├── vendor
│   ├── webpack.mix.js
│   ├── yarn-error.log
│   └── yarn.lock
├── xastre-market.code-workspace
└── yarn.sh

```
