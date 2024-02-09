composer install
cp .env.example .env
php artisan migrate
php artisan lunar:install
php artisan db:seed
php artisan storage:link
php artisan view:clear
