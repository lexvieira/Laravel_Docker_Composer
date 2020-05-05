Creating a Docker with Laravel and Composer
1 - Clone Git Laravel Project from 
    1.1 git clone https://github.com/laravel/laravel.git [name of your folder | laravel-app | src | app]

2 - Composer Install
    2.1 docker run --rm -v $(pwd)/src:/app composer install

3 - Setting Permissions
    sudo chown -R $USER:$USER [app folder name]

4 - Inside [app folder] copy .env.example to .env
    cp .env.example .env

5 - Configure the Nginx on 
    >nginx/default.conf

6 - Creating Dockers
    3.1 - Nginx
    3.2 - Mysql
    3.3 - PHP over Dockerfile

7 - Testing if Docker is OK (LISTEN PORTS)

    7.1 docker-compose build && docker-compose up -d
    7.2 sudo lsof -i -P -n | grep LISTEN
    7.3 Error Log /var/www/html/storage/logs/laravel.log" could not be opened: failed to open stream: Permission denied
        7.3.1 -- Access Docker bash
                docker-compose exec php /bin/sh
        7.3.2 -- Change the owner of the folders
                chown -R www-data: /var/www/html 
    7.4 docker-compose build after create image mysql 
        7.4.1 - Set Permission (755 means full permissions for the owner and read and execute permission for others)
                sudo chmod -R 755 *

8 - Composer (Include on Docker Composer and Artisan Configuration)
    8.1 - composer require aschmelyun/larametrics
        docker-compose run --rm composer require aschmelyun/larametrics
    8.2 - Install Composer with Docker
        BEFORE
        docker-compose exec php composer install
        NOW
        docker-compose run --rm composer install
        OR (CHECK)
        docker-compose run --rm composer composer install
    8.3 Run composer install directly from a composer image
        docker run --rm -v $(pwd):/app composer install
    8.4 Run using a PHP image 
        docker-compose exec php composer install
9 - NPM
    9.1 - Run npm install
        docker-compose run --rm npm install
    9.2 - run npm run dev
        docker-compose run --rm npm run dev
10 - Artisan
    10.1 - Encrypted Sessions with key:generate
        BEFORE
        docker-compose exec php php artisan key:generate
        Application key set successfully.
        NOW - (OK)
        docker-compose run artisan key:generate
11 - Kick off Migrations with Artisan (OK)
    docker-compose run --rm artisan migrate


ERRORS:
Questions about authorization to save file with php docker due permissions to local user.

Update in the next Dockerfile Commit
END




