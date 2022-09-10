## Setup
1. Clone the Repository to your local enviroment.
2. CD into the root directory and run `docker-compose build`
3. When the build is done, run `docker-compose up`
4. When the containers are up, run  `docker-compose exec backend bash`
5. Inside the backend container, run `composer install`
6. Rename .env.dev to .env
7. When install is done run `composer key:generate`

The app is accessed via http://localhost
