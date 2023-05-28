When coding with php, it's important to have project templates with the tools you use all the time.

Here we have a template for phpStorm and php 8.1.x with the following features:

- Basic phpStorm setup
- Basic file structure for a project
- Composer (latest)
- Class autoload (using composer)
- Xdebug3.x
- phpUnit 9.x
- MySQL (latest)
- Docker LAMP for testing code
- Persistent data on db container

Just remove the word "sample" from the name of .env file's and make appropriate changes to the files content.

At *.env* file, only replace values of:

- SERVER_HTTP_HOST_PORT
- SERVER_HTTPS_HOST_PORT
- DB_HOST_PORT
- DB_ROOT_PASSWORD

At *app.env* file, replace values of:

- DATABASE_HOST
- DATABASE_PORT
- DATABASE_USER_NAME
- DATABASE_USER_PASSWORD
- DATABASE_DB_NAME

**Note:** On Windows, use host machine's [WSL](https://learn.microsoft.com/en-us/windows/wsl/about) IP for DATABASE_HOST
and copy value of DB_HOST_PORT to DATABASE_PORT. These changes will allow using Docker LAMP for testing, also allows
using host machine's PHP and PhpStorm Build-in Preview without configuration problems.

You may add any necessary SQLs dumps to the db_dumps folder, they will be imported on build to the db container.

You only need three Docker commands to build, run and stop the LAMP containers:

- docker compose build
- docker compose up -d
- docker compose down

You may run these commands at phpStorm's Terminal or use the IDE's UI for the Docker Service.