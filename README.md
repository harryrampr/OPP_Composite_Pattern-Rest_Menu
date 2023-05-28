## Project Templates for PHP Development

### When coding with PHP, it's important to have a good IDE and project templates with the tools you use all the time.

[PhpStorm](https://www.jetbrains.com/phpstorm/) is the best IDE I have ever used. Worth every penny since it helps to
improve your coding quality, saving a lot
of time during development, testing and maintenance. If you aren't using PhpStorm, we encourage you to test it [free for
30 days](https://www.jetbrains.com/phpstorm/download/#section=windows).

We have curated project template for PHP 8.1.x development. You don't need PhpStorm to use our template, just remove
the `.idea` folder containing PhpStorm configuration.

#### Our template has the following features:

- PhpStorm initial project setup
- Project's basic file structure
- Composer Package Manager (latest)
- File autoload (using composer)
- Xdebug 3.x
- phpUnit 9.x
- MySQL (latest)
- Docker LAMP for code testing
- Support for initial db dump
- Persistent data on db container
- Support for Unit testing with coverage report

#### To configure the Docker LAMP, just remove `sample` from the name of `.env` files. Then make the suggested changes to each file content.

1. For `.env` file, only replace values of:
    - `SERVER_HTTP_HOST_PORT`
    - `SERVER_HTTPS_HOST_PORT`
    - `DB_HOST_PORT`
    - `DB_ROOT_PASSWORD`

2. For `app.env` file, replace values of:
    - `DATABASE_HOST`
    - `DATABASE_PORT`
    - `DATABASE_USER_NAME`
    - `DATABASE_USER_PASSWORD`
    - `DATABASE_DB_NAME`

***Note:** On Windows, use host machine's [WSL](https://learn.microsoft.com/en-us/windows/wsl/about) IP for
DATABASE_HOST
and copy value of DB_HOST_PORT to DATABASE_PORT. These changes will allow using Docker LAMP for code testing, also
allows using host machine's PHP and PhpStorm Build-in Preview without any configuration problems.*

#### Add any necessary SQL dumps to the db_dumps folder, they will be imported during the building stage of db container.

#### You only need three Docker commands to build, run and stop the LAMP containers:

- `docker compose build`
- `docker compose up -d`
- `docker compose down`

Run these commands at PhpStorm's Terminal or use the IDE's UI for the Docker Service.