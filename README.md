### Software Stack
- PHP 8.2.3
- Postgis 14-3.1
- NodeJS v18.16.0

### Base Settings

1. Run git clone https://github.com/dsswork/skellar-test
2. Run cp .env.example .env
4. Set up APP_PORT, DOCKER_USERNAME and DOCKER_USER_ID 
5. Run docker compose build
6. Run docker compose up -d
7. Run docker exec -it skellar-app -bash 
8. Run composer install
9. Run php artisan key:generate
10. Run php artisan mifrate:fresh --seed
11. Run npm install
12. Run npm run build
