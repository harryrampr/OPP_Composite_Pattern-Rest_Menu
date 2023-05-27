Here is how to run an apache/php container for this project:
   docker run --name apache-php-xxx -d -p 8X:80 harryrampr/apache-php:8.1.18

To create new

Note: Replace 'x' with valid values.

To view IP of containers inside inter-container network:
   docker network inspect bridge

Use IP of database container in bridge network to access database from other containers.