# Projeto Xastre Market
## Descrição do Projeto

<img src=https://simpleicons.org/icons/php.svg width="80"><img src=https://simpleicons.org/icons/laravel.svg width="80"><img src=https://simpleicons.org/icons/html5.svg width="80"><img src=https://simpleicons.org/icons/css3.svg width="80"><img src=https://simpleicons.org/icons/docker.svg width="80"><img src=https://simpleicons.org/icons/gnubash.svg width="80"><img src=https://simpleicons.org/icons/javascript.svg width="80">
<img src=https://simpleicons.org/icons/jquery.svg width="80"><img src=https://simpleicons.org/icons/yarn.svg width="80"><img src=https://simpleicons.org/icons/npm.svg width="80"><img src=https://simpleicons.org/icons/composer.svg width="80"><img src=https://simpleicons.org/icons/linux.svg width="80"><img src=https://simpleicons.org/icons/debian.svg width="80">

<p align="center" >Um simples CRUD de produtos e suas localições em uma dependência</p>

<a href="https://github.com/heitor92/xastre-market/issues"><img alt="GitHub issues" src="https://img.shields.io/github/issues/heitor92/xastre-market"></a>
<a href="https://github.com/heitor92/xastre-market/stargazers"><img alt="GitHub stars" src="https://img.shields.io/github/stars/heitor92/xastre-market"></a>
<a href="https://github.com/heitor92/xastre-market/network"><img alt="GitHub forks" src="https://img.shields.io/github/forks/heitor92/xastre-market"></a>
Tabela de conteúdos
=================
<!--ts-->
   * [Sobre](#Sobre)
   * [Tabela de Conteudo](#tabela-de-conteudo)
   * [Instalação](#instalacao)
        * [instalação do projeto](#instalacao-do-projeto)
   * [Como usar](#como-usar)
      * [Pre Requisitos](#pre-requisitos)
      * [Local files](#local-files)
<!--te-->

[Tabela de Conteudo](#tabela-de-conteudo)
======================
containers
--------
| Nome | Imagem | Localização Dockfile |
| ------------- |:-------------:|---------------------|
| xastre-market-app| php:8.0.0-apache (oficial)| xastre-market/containers/app/Dockerfile.dev | 
| xastre-market-db | mysql:8 (oficial)|xastre-market/containers/db/Dockerfile.dev | 

scripts
--------
| Arquivo  | Localização |
| ------------- |:-------------:|
| composer.sh |  xastre-market/composer.sh |
| php.sh | xastre-market/php.sh |
| npm.sh | xastre-market/npm.sh |
| yarn.sh | xastre-market/yarn.sh|

[Instalação](#instalacao)
=======
[instalação do projeto](#instalacao-do-projeto)
-------
Clone o Repositório:
```
$ git clone https://github.com/heitor92/xastre-market.git
``` 
Entre no diretorio do projeto:
```
$ cd xastre-market
```
Execute para levantar os containers de app e banco:
```
docker-compose up
```
Depois dos containers construído é só acessar a [http://localhost](http://localhost).
vá ao terminal novamente faça a migração do banco de dados:
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

[Como usar](como-usar)
=========
Acesse [http://localhost](http://localhost) depois de feito os passos de instalação.

Para executar comando root no container:
```
docker exec -ti xastre-market-app bash
```
Para executar comandos como seu usuario:
```
docker exec -ti -u $(id -u):$(id -g) xastre-market-app bash
```

[Pre Requisitos](pre-requisitos)
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
