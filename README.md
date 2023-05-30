## Project Templates for PHP Development

### When coding with PHP, it's important to have a good IDE and project templates with the tools you use all the time.

[PhpStorm](https://www.jetbrains.com/phpstorm/) is the best IDE I have ever used. Worth every penny since it helps to
improve your coding quality, saving a lot
of time during development, testing and maintenance. If you aren't using PhpStorm, we encourage you to test it [free for
30 days](https://www.jetbrains.com/phpstorm/download/#section=windows).

We have curated a project template for PHP 8.1.x development. You don't need PhpStorm to use our template, just remove
the `.idea` folder containing PhpStorm configuration.

#### Template Features:

- PhpStorm initial project setup
- Project's basic file structure
- Composer Package Manager (latest)
- File autoload (using composer)
- Xdebug 3.x
- phpUnit 9.x
- MySQL (latest)
- [Docker Containers](https://www.docker.com/products/docker-desktop/) LAMP for code testing
- Support for initial database dump
- Persistent data on database container
- Support for Unit Testing with Coverage Report

#### Installation:

1. After downloading the template, go to PhpStorm Settings and select the `Default PHP Interpreter`. Also,
   setup `Composer`
   execs location.

2. Update necessary info at `composer.json` file, then run `composer install`.

3. To configure the Docker LAMP, just copy sample `.env` files to new files without the "sample" prefix. Then only make
   important changes to these files.

    1. For `.env` file, most defaults should work. If necessary replace values of:
        - `SERVER_HTTP_HOST_PORT`
        - `SERVER_HTTPS_HOST_PORT`
        - `DB_CONTAINER_HOST_PORT`
        - `DB_ROOT_PASSWORD`
        - `DB_CONTAINER_VOLUME_NAME`(Must update)
        - `DB_CONTAINER_VOLUME_EXTERNAL`

    2. For `app.env` file, most defaults should work. If necessary replace values of:
        - `DATABASE_HOST`(Must update)
        - `DATABASE_PORT`
        - `DATABASE_USER_NAME`
        - `DATABASE_USER_PASSWORD`
        - `DATABASE_DB_NAME`

   ***Note:** On Windows, use host machine's [WSL](https://learn.microsoft.com/en-us/windows/wsl/about) IP for
   DATABASE_HOST and copy value of DB_CONTAINER_HOST_PORT to DATABASE_PORT. These changes will allow using Docker LAMP
   for
   code testing, also allows using host machine's PHP and PhpStorm Build-in Preview without any configuration problems.*

4. Run all PHPUnit tests located at `app/tests` folder to verify template & containers configuration.

5. Add any necessary SQL dumps to the db_dumps folder, they will be imported during the building stage of database
   container.

6. To start the LAMP containers, run these commands at IDE's Terminal.

    - `docker compose build`
    - `docker compose up -d`

7. When necessary, run `docker compose down`to stop the containers.