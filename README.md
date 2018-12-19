<center><img src="https://cdn.thenewstack.io/media/2014/04/homepage-docker-logo.png" alt="" width="30%">

# Docker work station

![Docker-version](https://badgen.net/badge/Docker-compose/v3.1/green?icon=docker) ![Docker-version](https://badgen.net/badge/Mysql/v5.7/orange) ![Composer-version 1.8](https://badgen.net/badge/Composer/v1.8.0/red?icon=terminal) ![Composer-version 1.8](https://badgen.net/badge/PHP/v7.3.0/purple) ![](https://badgen.net/github/watchers/micromatch/micromatch) ![](https://badgen.net/github/license/micromatch/micromatch)</center>

> Рабочее пространство Docker с готовыми настройками

Проект для начала работы в основном для PHP разработчиков, но может быть использован так же для иных разработчиков<div class=""></div>

---

## Установка

- All the `code` required to get started
- Images of what it should look like

### Clone

- Скопируйте репрозиторий в нужную вам папку для работы с файлами проекта `git clone https://github.com/hose1021/Docker_work_station`

### Настройка

- Если вы хотите поменять параметры под нужные вам то меняем файл `.env`:

```shell
#PATHS

DB_PATH_HOST=./database #База хранения данных

APP_PATH_HOST=./www #Ваш проект

APP_PATH_CONTAINER=/var/www/html/
```

- Если вы хотите поменять версии пакетов под нужные вам то меняем файл `docker-compose.yml`:

```shell
version: '3.1'

services:

    web: 
        build: ./web
        environment:
            - APACHE_RUN_USER=www-data
        volumes:
            - ${APP_PATH_HOST}:${APP_PATH_CONTAINER}
        ports:
            - "80:80"
        working_dir: ${APP_PATH_CONTAINER}

    db:
        image: mysql:5.7
        command: --innodb_use_native_aio=0
        restart: always
        environment:
              MYSQL_ROOT_PASSWORD: 9200
        volumes:
            - ${DB_PATH_HOST}:/var/lib/mysql/
        ports:
            - "3306:3306"
```

---
- Copyright 2018 © Hose1021 with ♥.