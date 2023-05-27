When working on php, it's important to have project templates with the tools you use all the time.

Here we have a template for phpStorm and php 8.1.x with the following features:

- Xdebug3.x
- Composer (latest)
- phpUnit 9.x
- MySQL (latest)
- Docker LAMP for testing code
- Basic phpStorm setup
- Basic file structure for a project
- Class autoload (using composer)

Just remove the word "sample" from .env files and make appropriate changes to the files. At .env file only replace
values of:

- SERVER_HTTP_HOST_PORT
- SERVER_HTTPS_HOST_PORT
- DB_HOST_PORT
- DB_ROOT_PASSWORD

At app.env file replace all values of:

- DATABASE_HOST
- DATABASE_PORT
- DATABASE_USER_NAME
- DATABASE_USER_PASSWORD
- DATABASE_DB_NAME

Note: On Windows, use WSL IP for DATABASE_HOST and copy value of DB_HOST_PORT to DATABASE_PORT. This will allow not only
to use Docker LAMP for testing, but also HOST machine's PHP and PhpStorm Build-in Preview.