When coding with PHP, it's important to have project templates with the tools you use all the time.

We have curated a PhpStorm and php 8.1.x project template with the following features:

- Basic PhpStorm initial setup
- Project's basic file structure
- Composer Package Manager (latest)
- File autoload (using composer)
- Xdebug 3.x
- phpUnit 9.x
- MySQL (latest)
- Docker LAMP for code testing
- Support for initial data dump
- Persistent data on db container
- Support for Unit testing with coverage

Just remove the word "sample" from the name of .env files and make appropriate changes to the file's content.

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
and copy value of DB_HOST_PORT to DATABASE_PORT. These changes will allow using Docker LAMP for code testing, also
allows using host machine's PHP and PhpStorm Build-in Preview without any configuration problems.

You may add any necessary SQLs dumps to the db_dumps folder, they will be imported on build to the db container.

You only need three Docker commands to build, run and stop the LAMP containers:

- `docker compose build`
- `docker compose up -d`
- `docker compose down`

You may run these commands at PhpStorm's Terminal or use the IDE's UI for the Docker Service.